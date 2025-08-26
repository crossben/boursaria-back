<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    public function register(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:students,email',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'dateOfBirth' => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'currentLevel' => 'nullable|string|max:255',
            'fieldOfStudy' => 'nullable|string|max:255',
            'role' => 'required|in:student,admin',
            'password' => 'required|string|min:8|confirmed', // requires 'password_confirmation' field
        ]);

        // Create student
        $student = Student::create($validatedData);

        // Generate token
        $token = $student->createToken('student-api-token')->plainTextToken;

        // Return response
        return response()->json([
            'message' => 'Registered successfully.',
            'student' => $student,
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to find the student by email
        $student = Student::where('email', $validatedData['email'])->first();

        // Check if student exists and if the password is correct
        if (!$student || !Hash::check($validatedData['password'], $student->password)) {
            // Log failed login attempt
            \Log::warning('Failed login attempt', ['email' => $validatedData['email']]);

            return response()->json([
                'status' => 'error',
                'message' => 'invalid_credentials',
            ], 401);
        }

        // Log the successful login attempt
        \Log::info('student logged in', ['student_email' => $student->email]);

        // Return successful response with the token
        return response()->json([
            'status' => 'success',
            'message' => 'Connexion réussie!',
            'data' => $student,
            'token' => $student->createToken('student-api-token')->plainTextToken,
        ], 200);
    }

    public function getStudentById(Request $request)
    {
        $student = Student::with(['favorites', 'applications'])->find($request->id);

        if (!$student) {
            return response()->json([
                'status' => 'error',
                'message' => 'student_not_found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $student,
        ], 200);

    }
}

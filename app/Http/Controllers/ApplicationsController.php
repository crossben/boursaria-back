<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationsController extends Controller
{
    public function apply(Request $request)
    {
        $validatedData = $request->validate([
            'student_id' => 'required|exists:students,id',
            'scholarship_id' => 'required|exists:scholarships,id',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:0',
            'anneeDernierDiplome' => 'required|string|max:4',
            'dernierDiplome' => 'required|string|max:255',
            'ecole' => 'required|string|max:255',
            'programmeInteresse' => 'required|string|max:255',
            'motivation' => 'required|string',
        ]);

        // Prevent duplicate applications
        $exists = Applications::where('student_id', $validatedData['student_id'])
            ->where('scholarship_id', $validatedData['scholarship_id'])
            ->exists();

        if ($exists) {
            return response()->json([
                'status' => 'error',
                'message' => 'Vous avez déjà postulé à cette bourse.',
            ], 409);
        }

        $application = Applications::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Candidature soumise avec succès',
            'data' => $application,
        ], 201);
    }

    public function getApplicationsByStudentId(Request $request)
    {
        // Validate the student_id in the query string
        $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        // Get student_id from the query
        $studentId = $request->query('student_id');

        // Retrieve applications with related student and scholarship data
        $applications = Applications::with(['student', 'scholarship'])
            ->where('student_id', $studentId)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $applications,
        ]);
    }

    public function getMyApplications(Request $request)
    {
        $studentId = $request->user()->id;

        $applications = Applications::with(['scholarship', 'student'])
            ->where('student_id', $studentId)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $applications,
        ]);
    }
}

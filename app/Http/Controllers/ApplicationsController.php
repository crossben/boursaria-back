<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applications;

class ApplicationsController extends Controller
{
    public function apply(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'scholarship_id' => 'required|exists:scholarships,id',
        ]);

        // Prevent duplicate applications
        $exists = Applications::where('user_id', $validatedData['user_id'])
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
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $userId = $request->query('user_id');

        $applications = Applications::with('scholarship')
            ->where('user_id', $userId)
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $applications,
        ]);
    }
}

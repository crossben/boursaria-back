<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    public function createScholarShip(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'domains' => 'required|string|max:255',
            'level' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'flagUrl' => 'nullable|url|max:255',
            'advantages' => 'nullable|string',
            'eligibilityConditions' => 'nullable|string',
            'deadline' => 'required|date',
            'applicationProcess' => 'nullable|string',
            'requiredDocuments' => 'nullable|string',
            'contactInfo' => 'nullable|string|max:255',
        ]);

        $scholarship = Scholarship::create($validatedData);

        return response()->json([
            'status' => 'success',
            'data' => $scholarship,
        ], 201);
    }

    public function getAllScholarships(Request $request)
    {
        $query = Scholarship::query();

        // Optional: Add filtering by query parameters
        if ($request->has('country')) {
            $query->where('country', $request->input('country'));
        }
        if ($request->has('level')) {
            $query->where('level', $request->input('level'));
        }
        if ($request->has('domain')) {
            $query->where('domains', 'like', '%' . $request->input('domain') . '%');
        }

        // Optional: Add pagination
        $perPage = $request->input('per_page', 15);
        $scholarships = $query->paginate($perPage);

        return response()->json([
            'status' => 'success',
            'data' => $scholarships->items(),
            'meta' => [
                'current_page' => $scholarships->currentPage(),
                'last_page' => $scholarships->lastPage(),
                'per_page' => $scholarships->perPage(),
                'total' => $scholarships->total(),
            ],
        ], 200);
    }

    public function getScholarshipById(Request $request)
    {
        $scholarship = Scholarship::find($request->id);

        if (!$scholarship) {
            return response()->json([
                'status' => 'error',
                'message' => 'Scholarship not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $scholarship,
        ], 200);
    }
}

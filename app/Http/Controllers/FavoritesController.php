<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorites;

class FavoritesController extends Controller
{
    public function addFavorite(Request $request)
    {
        $validatedData = $request->validate([
            'scholarship_id' => 'required|exists:scholarships,id',
        ]);

        $userId = $request->user()->id;

        $favorite = Favorites::firstOrCreate([
            'user_id' => $userId,
            'scholarship_id' => $validatedData['scholarship_id'],
        ]);

        return response()->json([
            'status' => $favorite->wasRecentlyCreated ? 'success' : 'info',
            'message' => $favorite->wasRecentlyCreated
                ? 'Bourse ajoutée aux favoris'
                : 'Bourse déjà dans les favoris',
        ], $favorite->wasRecentlyCreated ? 201 : 200);
    }

    public function removeFavorite(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'scholarship_id' => 'required|exists:scholarships,id',
        ]);

        $favorite = Favorites::where([
            'user_id' => $validatedData['user_id'],
            'scholarship_id' => $validatedData['scholarship_id'],
        ])->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Bourse retirée des favoris',
            ], 200);
        } else {
            return response()->json([
                'status' => 'info',
                'message' => 'Bourse n\'est pas dans les favoris',
            ], 200);
        }
    }

    public function getFavoriteByStudentId(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $favorites = Favorites::where('user_id', $validatedData['user_id'])->get();

        return response()->json([
            'status' => 'success',
            'data' => $favorites,
        ], 200);
    }
}

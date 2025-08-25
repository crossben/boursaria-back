<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function getAllBlogPosts(Request $request)
    {
        $query = BlogPost::query();

        // // Optional: Add filtering by query parameters
        // if ($request->has('category')) {
        //     $query->where('category', $request->input('category'));
        // }
        // if ($request->has('author')) {
        //     $query->where('author', $request->input('author'));
        // }

        // Optional: Add pagination
        $perPage = $request->input('per_page', 15);
        $blogPosts = $query->paginate($perPage);

        return response()->json([
            'status' => 'success',
            'data' => $blogPosts->items(),
            'meta' => [
                'current_page' => $blogPosts->currentPage(),
                'last_page' => $blogPosts->lastPage(),
                'per_page' => $blogPosts->perPage(),
                'total' => $blogPosts->total(),
            ],
        ], 200);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $user->id;
        $post->save();

        return response()->json($post, 201);
    }

    public function get($userId)
    {
        $user = User::with('posts')->findOrFail($userId);
        return response()->json([
            'user' => $user->name,
            'posts' => $user->posts
        ]);
    }
}

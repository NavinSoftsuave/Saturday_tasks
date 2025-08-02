<?php

namespace App\Http\Controllers\Api;

use App\Models\Profile;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        $profile = new Profile();
        $profile->bio = $request->bio;
        $profile->user_id = $user->id;
        $profile->save();

        return response()->json($profile, 201);
    }

    public function get($userId)
    {
        $user = User::with('profile')->findOrFail($userId);
        return response()->json($user);
    }
}


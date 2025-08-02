<?php

namespace App\Http\Controllers\Api;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function assign(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->roles()->sync($request->role_ids);

        return response()->json(['message' => 'Roles assigned successfully']);
    }

    public function getRoles($userId)
    {
        $user = User::with('roles')->findOrFail($userId);
        return response()->json($user);
    }
}


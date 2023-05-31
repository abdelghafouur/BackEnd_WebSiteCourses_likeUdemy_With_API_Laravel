<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);

            // Exclude the password field from the response
            $user->makeHidden('password');

            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $data = $request->all();

            if (isset($data['password'])) {
                $data['password'] = bcrypt($data['password']);
            } else {
                unset($data['password']);
            }

            $user->update($data);

            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update user profile'], 500);
        }
    }
}
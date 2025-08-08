<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {

        $data = $request->validate(
            [
                'first_name' => ['required'],
                'last_name' => ['required'],
                'post_code'=> ['required'],
                'phone_number' => ['nullable'],
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required'],
                'role' => ['nullable'],
                

            ],
            [
                'first_name.required' => 'First name is required.',
                'last_name.required' => 'Last name is required.',
                'email.required' => 'Please enter an email.',
                'email.email' => 'Please enter a valid format.',
                'email.unique' => 'This email is already registered.',
                'password.required' => 'Password is required.',
            ]
        );

        
        $user = User::create($data);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'Owner' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 201);
    }


 public function getUserData()
    {

        $userData = auth()->user();

        return response()->json([
            'user' => $userData
        ], 200);
    }

    public function checkUser(Request $request)
    {

        return $request->user();
    }

    // public function editProfile(Request $request)
    // {

    //     $user = auth()->user();

    //     try {
    //         $updatedData = $request->validate(
    //             [
    //                 'display_name' => ['sometimes', 'string'],
    //                 'email' => ['sometimes', 'email', Rule::unique('users')->ignore($user->id)],
    //                 'password' => ['sometimes'],
    //                 'bio' => ['sometimes', 'string']
    //             ],
    //             [
    //                 'display_name.string' => 'Please enter a valid display name.',
    //                 'email.email' => 'Please enter a valid format.',
    //                 'email.unique' => 'This email is already registered.'
    //             ]
    //         );

    //     } catch (ValidationException $erreur) {
    //         return response()->json([
    //             'erreur' => 'Erreur de validation.',
    //             'details' => $erreur->errors(),
    //         ], 422);
    //     }
        
    //     if (!empty($updatedData['password'])) {
    //         $updatedData['password'] = Hash::make($updatedData['password']);
    //     }

    //     $user->update($updatedData);

    //     $user->refresh();

    //     return response()->json([
    //         'user' => $user,
    //     ], 200);
    // }






}

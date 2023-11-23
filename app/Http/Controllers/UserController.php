<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function create()
    {
        // Return a view or data for creating a new user
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        return response()->json($user);
    }

    public function edit(User $user)
    {
        // Return a view or data for editing the specified user
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
    //list of all users by gender
    public function gender(){
        $male = User::where('gender', 'male')->count();
        $female = User::where('gender', 'female')->count();
    
        return response()->json([
            'male' => $male,
            'female' => $female,
        ]);
    }

    // list of all users by last login time
    public function time(){
        $users = User::orderBy('last_login_at', 'desc')->get();
    
        return response()->json($users);
    }
}

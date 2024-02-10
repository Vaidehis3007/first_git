<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
 // Other methods…
  /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }
    // Other methods…
    /**
     * Show the form for editing the specified resource.
     */

     public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
       return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
        ]);
        $user->update($validatedData);
        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);
        User::create($validatedData);
        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserSettingsController extends Controller
{
    //
    public function index()
    {
        $users = User::paginate(25);
        return view('backend.user-settings.userIndex',compact('users'));
    }
    public function edit(User $user)
{
    $permissions = Permission::all();
    return view('backend.users.edit', compact('user', 'permissions'));
}

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|min:8',
        'permissions' => 'array'
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    if ($request->filled('password')) {
        $user->update(['password' => Hash::make($request->password)]);
    }

    // Sync permissions
    if ($request->has('permissions')) {
        $user->syncPermissions($request->permissions);
    }

    return redirect()->route('users.index')
        ->with('success', 'User updated successfully');
}
}

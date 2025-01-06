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
}

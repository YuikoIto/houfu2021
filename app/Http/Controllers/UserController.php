<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($uniqueId)
    {
        $user = User::where('unique_id', $uniqueId)->firstOrFail();
        return view('user.show', compact('user'));
    }
}

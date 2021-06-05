<?php

namespace App\Http\Controllers\Auth;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    public function update(Request $request)
    {
        return Hash::check($request->oldPassword, Auth::user()->password) 
        ? Auth::user()->update(['password' => bcrypt($request->newPassword)])
        : throw new Error('The old password is wrong');
    }
}

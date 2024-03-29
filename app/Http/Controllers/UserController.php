<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $current_user=\Auth::user();
        
        if ($current_user->isCustomer()) {
            abort(403, 'Unauthorized action.');
        }

        return view('/admin/user');
    }

    public function update(Request $request)
    { 

        $user = Auth::user();

        $validator = Validator::make($request->input(), array(
            'identification' => ['required', 'string', 'max:9'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:8'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $user->identification = request('identification');
        $user->name = request('name');
        $user->phone = request('phone');
        $user->address = request('address');
        $user->email = request('email');

        $user->save();

        return view('user');
    }
}
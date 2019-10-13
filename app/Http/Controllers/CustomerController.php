<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'asc')->paginate(3);

        return view('customer')->with('user',$user);
    }
}

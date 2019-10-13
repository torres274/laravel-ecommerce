<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdministratorController extends Controller
{
    public function index(Request $request)
    {
        $user = User::orderBy('id', 'asc')->paginate(3);

        return view('administrator')->with('user',$user);
    }
}

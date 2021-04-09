<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UsersController extends Controller
{
    public function index () {
        return view('users.registetion');
    }

    public function store (Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min:6|max:15|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm_password' => 'required|same:password'
        ]);

        $input = $request->all();

        $inputArray = array(
            'email' => $request->email,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'password' => Hash::make($request->password)
        );

        $user = users::create($inputArray);

        //create success
        if (!is_null($user)) {
            return back()->with('success', 'You have registered successfully.');
        } 
        // unsuccess
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }

    public function login () {
        if (Auth::check()) {
            return redirect('/etree');
        }
        return view('users.login');
    }

    public function checkLogin (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $userCredentails = $request->only('email', 'password');

        // check user using auth function
        if (Auth::attempt($userCredentails)) {
            return redirect('/');
        }
        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }

    public function logout () {
        Auth::logout();
        return back();
    }
}

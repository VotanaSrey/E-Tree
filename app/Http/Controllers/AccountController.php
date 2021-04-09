<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\users;

class AccountController extends Controller
{
    public function change_name () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-name');
    }

    public function update_name (Request $request) {
        $request->validate([
            'firstname' => 'required|max:45',
            'lastname' => 'required|max:45'
        ]);

        $input = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your name has been changed.');
        }
    }

    public function change_email () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-email');
    }

    public function update_email (Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users,email'
        ]);

        $input = array(
            'email' => $request->email
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your email has been changed.');
        }
    }

    // dob
    public function change_dob () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-dob');
    }

    public function update_dob (Request $request) {
        $request->validate([
            'dob' => 'required|before: -15 years'
        ]);

        $input = array(
            'dob' => $request->dob
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your birthday has been changed.');
        }
    }

    // gender
    public function change_gender () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-gender');
    }

    public function update_gender (Request $request) {
        $request->validate([
            'gender' => 'required'
        ]);

        $input = array(
            'gender' => $request->gender
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your gender has been changed.');
        }
    }

    //phone
    public function change_phone () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-phone');
    }

    public function update_phone (Request $request) {
        $request->validate([
            'phone' => 'required|max:10'
        ]);

        $input = array(
            'phone' => $request->phone
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your phone has been changed.');
        }
    }

    //address
    public function change_address () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-address');
    }

    public function update_address (Request $request) {
        $request->validate([
            'address' => 'required',
            'city' =>  'required',
            'country' => 'required',
            'zip_code' => 'required|min:5|max:5'
        ]);

        $input = array(
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => $request->zip_code
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your address has been changed.');
        }
    }

    //profile
    public function change_profile () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('setting.change-profile');
    }

    public function update_profile (Request $request) {
        $request->validate([
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $image_name = time().'.'.$image->extension();
        $image->move(public_path('images/users'), $image_name);
        $d_image = '/images/users/'.$image_name;

        $input = array(
            'image' => $d_image
        );

        $id = Auth::user()->id;
        $user = users::where('id', $id)->update($input);

        if ($user != null) {
            return back()->with('success', 'Your profile has been changed.');
        }
    }
}

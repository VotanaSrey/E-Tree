<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donations;
use App\Models\users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class DonationsController extends Controller
{
    public function index () {

        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }

        return view('application.donations');
    }

    public function store (Request $request) {
        $request->validate([
            'amount' => 'required',
            'username' => 'required',
            'cardNumber' => 'required|min:16|max:16',
            'month' => 'required|min:1|max:2|gt:0|lt:13',
            'year' => 'required|gt:2022',
            'cvv' => 'required|min:3|max:3'
        ]);

        $input = array(
            'amount' => $request->amount,
            'userId' => Auth::user()->id
        );

        $donate = donations::create($input);
        return redirect('/etree/list-donation');
    }

    public function list () {
        $donations = donations::latest()->orderBy('id', 'desc')->paginate(20);
        $i = 0;
        foreach ($donations as $donation) {
            $user = users::where('id', '=', $donation->userId)->get();
            $donations[$i]->name = $user[0]->firstname.' '.$user[0]->lastname;
            $donations[$i]->address = $user[0]->address;
            $i++;
        }
        return view('application.list-donation')->with('donations', $donations);
    }

    public function history () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        $id = Auth::user()->id;
        $donations = donations::where('userId', '=', $id)->get();
        return view('application.donated-history')->with('donations', $donations);
    }
}

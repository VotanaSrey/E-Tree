<?php

namespace App\Http\Controllers;

use App\Models\messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);
        messages::create($request->all());
        return redirect('/etree/contact')->with('alert', 'Message has been submited successfully');
    }
}

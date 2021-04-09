<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store (Request $request) {
        
        $request->validate([
            'comment' => 'required'
        ]);

        $input = array(
            'comment' => $request->comment,
            'userId' => Auth::user()->id,
            'treeId' => $request->treeId
        );

        $comment = comments::create($input);

        return back();
    }
}

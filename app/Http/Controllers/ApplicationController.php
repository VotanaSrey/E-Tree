<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\events;
use App\Models\trees;
use App\Models\members;
use App\Models\partners;
use App\Models\learning;
use App\Models\categories;
use App\Models\comments;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    public function index () {
        $events = events::latest()->paginate(4);
        $trees = trees::latest()->paginate(8);
        $partners = partners::latest()->paginate();
        return view('application.index')->with(['events' => $events, 'trees' => $trees, 'partners' => $partners, 'i' => 1]);
    }

    public function about () {
        $members = members::latest()->paginate(3);
        $partners = partners::latest()->paginate();
        return view('application.about')->with(['members' => $members, 'partners' => $partners]);
    }

    public function contact () {
        return view('application.contact');
    }

    public function events () {
        $events = events::latest()->paginate(4);
        return view('application.events')->with('events', $events);
    }

    public function learning () {
        $learning = learning::latest()->paginate(60);
        return view('application.learning')->with('learning', $learning);
    }

    public function store (){
        $categories = categories::latest()->paginate(10);
        $trees = trees::latest()->paginate(30);
        return view('application.store')->with(['categories' => $categories, 'trees' => $trees]);
    }

    public function categories ($categoryId) {
        $trees = trees::where('categoryId', '=', $categoryId)->get();
        $categories = categories::latest()->paginate(10);
        return view('application.store')->with(['categories' => $categories, 'trees' => $trees]);
    }

    public function search (Request $request) {
        $ser = $request->search;
        $trees = trees::where('name', $ser)->orWhere('name', 'like', '%'.$ser.'%')->get();
        $categories = categories::latest()->paginate(10);
        return view('application.store')->with(['categories' => $categories, 'trees' => $trees]);
    }

    public function detail ($id) {
        $tree = trees::where('id', '=', $id)->get();
        $comments = comments::where('treeId', '=', $id)->orderBy('id', 'desc')->get();
        $i = 0;
        foreach($comments as $comment) {
            $user = users::where('id', '=', $comment->userId)->get();
            $comments[$i]->name = $user[0]->firstname.' '.$user[0]->lastname;
            $comments[$i]->image = $user[0]->image;
            $i++;
        }
        return view('application.detail')->with(['tree' => $tree, 'comments' => $comments]);
    }

    public function account () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        return view('application.account');
    }

    public function setting () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        return view('setting.index');
    }

    //order
    public function order ($id) {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        $tree = trees::where('id', $id)->get();
        return view('application.orders')->with('tree', $tree);
    }

    public function store_order (Request $request) {
        $request->validate([
            'quantity' => 'required|gt:0',
            'phone' => 'required|max:10',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zip_code' => 'required|min:5|max:5',
            'username' => 'required',
            'cardNumber' => 'required|min:16|max:16',
            'month' => 'required|gt:0|lt:13',
            'year' => 'required|gt:2020',
            'cvv' => 'required|min:3|max:3'
        ]);

        $tree_id = $request->tree_id;
        $quantity = $request->quantity;
        $tree = trees::where('id', $tree_id)->get();
        $price = $tree[0]->price;
        $total = $price * $quantity;

        $user_id = Auth::user()->id;
        $input = array(
            'quantity' => $quantity,
            'total' => $total,
            'progress' => 'processing',
            'tree_id' => $tree_id,
            'phone' =>$request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zip_code' => '21108',
            'user_id' => $user_id
        );

        $order = orders::create($input);
 
        if ($order != null) {
            return redirect('/etree/ordered-history');
        }
    }

    public function ordered_history () {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        $user_id = Auth::user()->id;
        $orders = orders::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        $i = 0;

        foreach ($orders as $order) {
            $tree = trees::where('id', $order->tree_id)->get();
            $orders[$i]->tree_name = $tree[0]->name;
            $i++;
        }
        return view('application.ordered-history')->with('orders', $orders);
    }

    public function ordered_detail ($id) {
        if (!Auth::check()) {
            return redirect('/etree/login')->with('error', 'Please, login your account first.');
        }
        $order = orders::where('id', $id)->orderBy('created_at', 'desc')->get();
        $tree = trees::where('id', $order[0]->tree_id)->get();
        return view('application.ordered-detail')->with(['order' => $order, 'tree' =>$tree]);
    }

    public function ordered_cancel ($id) {
        $order = orders::where('id', $id)->delete();
        return redirect('/etree/ordered-history')->with('success', 'You have canceled succefully');
    }
}

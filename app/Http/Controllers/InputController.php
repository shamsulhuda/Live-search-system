<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InputController extends Controller
{
    public function index(){
    	return view('search.search');
    }

    public function store(Request $request){
    	$request->validate([
    		'title'=> 'required',
    		'description'=> 'required',
    		'price' => 'required'
    	]);

    	Product::create($request->all());
    	return redirect()->back()->with('success', 'product create successfully!');

    }
}

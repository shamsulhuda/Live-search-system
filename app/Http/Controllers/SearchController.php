<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(){
    	return view('search.search');
    }

 	public function search(Request $request){

		if($request->ajax()){

			$output="";
			$products=DB::table('products')
				->where('title','LIKE','%'.$request->search."%")
				->orWhere('description','LIKE','%'.$request->search."%")
				->orWhere('price','LIKE','%'.$request->search."%")
				->get();

		if($products){

		foreach ($products as $key => $product) {
			$output.='<tr>'.
			'<td>'.$product->id.'</td>'.
			'<td>'.$product->title.'</td>'.
			'<td>'.$product->description.'</td>'.
			'<td>'.$product->price.'</td>'.
			'</tr>';
		}
		
		

		}
		else{

	   	$output =DB::table('products')
	   		->orderBy('id', 'desc')
	   		->get();
	   }
	   return Response($output);


	   }
	}


}



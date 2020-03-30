<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use DB;
class product extends Controller
{
    //
    


public function show_products(){

	$products = products::orderBy('po_id' , 'asc')->paginate(4);
	return view ('layouts.products' , compact('products'));

}

}

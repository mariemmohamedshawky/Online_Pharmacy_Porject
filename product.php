<?php


namespace App\Http\Controllers;
use App\products;
use Illuminate\Http\Request;
use DB;
class product extends Controller
{
    //

/*public function add_product(){



return view('addpo');

}*/
public function insert_product(){

//$add_product=new product;
$productn = request("name");
$productp = request("price");
$productd= request("des");
$productdate =request("expire_date");
$productimg=request("img");
$data=array('po_name'=>$productn,"po_price"=>$productp,"po_description"=>$productd,"po_date"=>$productdate,"po_img"=>$productimg);
DB::table('products')->insert($data);
echo "Record inserted successfully.<br/>";

return redirect("/home");

}


public function show_products(){

	$products = products::orderBy('po_id' , 'asc')->paginate(4);
	return view ('product' , compact('products'));

}
public function show_products_admin(){

	$products = products::orderBy('po_id' , 'asc')->paginate(4);
	return view ('productad' , compact('products'));

}
}


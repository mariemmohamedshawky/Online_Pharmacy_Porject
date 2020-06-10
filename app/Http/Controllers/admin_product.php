<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\products;
use Illuminate\Http\Request;
use DB;
class admin_product extends Controller
{
    
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

public function show_products_admin(){

	$products = products::orderBy('po_id' , 'asc')->paginate(4);
	return view ('productad' , compact('products'));}

public function destroy($id) {
DB::delete('delete from products where po_id = ?',[$id]);

return redirect ('/admin');

}

public function show($id) {
$products = DB::select('select * from products where po_id = ?',[$id]);
return view('edit_product',['products'=>$products]);
}

public function edit(Request $request,Product $product,$id)
{
    $productn = request("name");
    $productp = request("price");
    $productd= request("des");
    $productdate =request("expire_date");
    $productimg=request("img");
    $data=array('po_name'=>$productn,"po_price"=>$productp,"po_description"=>$productd,"po_date"=>$productdate,"po_img"=>$productimg);
    DB::table('products')->where('po_id', $id)->update($data);
    echo "Record updated successfully.<br/>";
    
    return redirect("/home");
}


    public function showproductdetailsadmin($id) {
    $products = DB::select('select * from products where po_id = ?',[$id]);
    return view('productdetailsadmin',['products'=>$products]);
    }
public function search_admin (Request $request)
{
  $search_admin = $request->get('titlea');
  $products = DB::table('products')->where('po_name' , 'like' , '%'.$search_admin.'%')->paginate(5);
  return view('search_admin' , ['products'=>$products]) ;
  
    
}

public  function view_user(){
       $users = DB::select('select * from users ');  
    
     return view('view_users',compact('users'));  
   
     
        }
        
    public  function view_order(){
        $orders = DB::select('select * from orders ');  
    
        return view('order',compact('orders')); 

}

}
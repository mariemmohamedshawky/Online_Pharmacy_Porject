<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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

/*
public function index(){
$products =DB::table('products')->select('select * from products');
return view ('details' , compact('products'));
//return view('details',['products'=>$products]);
}
*/
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
public function showproductdetails($id) {
    $products = DB::select('select * from products where po_id = ?',[$id]);
    return view('productdetails',['products'=>$products]);
    }
    public function addToCart($id)


    {
        //$products = products::find($id);

        $products = DB::select('select * from products where po_id = ?',[$id]);
         //  $product= DB::table('products')->where('po_id', $id)->compact(varname);
        //$product = product::find($id);
 
        if(!$products) {
 
            abort(404);
 
        }
foreach($products as $p)
          $name=$p->po_name;
       $price=$p->po_price;
           $img=$p->po_img;

  //endforeach;

        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
     
            $cart = [
                    $id => [

                        "name" =>  $name        ,
                        "quantity" => 1,
                        "price" => $price,
                        "photo" => $img
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
         
                        "name" =>  $name        ,
                        "quantity" => 1,
                        "price" => $price,
                        "photo" => $img
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function cart()
    {
        return view('cart');
    }
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function search (Request $request)
{
  $search = $request->get('title');
  $products = DB::table('products')->where('po_name' , 'like' , '%'.$search.'%')->paginate(5);
  return view('search' , ['products'=>$products]) ;
  
    
}

}





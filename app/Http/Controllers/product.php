<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\products;
use Illuminate\Http\Request;
use DB;
class product extends Controller
{
  
public function show_products(){

	$products = products::orderBy('po_id' , 'asc')->paginate(4);
	return view ('product' , compact('products'));

}

public function index(){
$products =DB::table('products')->select('select * from products');
return view ('details' , compact('products'));
//return view('details',['products'=>$products]);
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

public  function make_order(){        
if(session('cart')){
    $total = 0;
            foreach(session('cart') as $id => $details){
 
 
         $name= $details['name'];

          $username = request("_name");
           $price=$details['price'];
            $q=$details['quantity'];
          
          // unset($_session['cart']);
      
      //    $t=$ $details['price'] * $details['quantity'];
          $phone= request("phone");
            $address =request("Address");
              $way =request("pay");
    
          $email = request("email");

$data=array('user_name'=>$username,"email"=>$email,"product_name"=>$name,"product_price"=>$price,"product_quantity"=>$q,"phone"=>  $phone,"address"=>$address,"payWay"=>  $way);


DB::table('orders')->insert($data);
  $cart=session()->get('cart');

session()->flash('cart', $cart);

   }

if($way=='online')

return view('payonline');
else
 
return view('bill');
}
  else
    
echo 'your cart is empty choose the products first';

}


}
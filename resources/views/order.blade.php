@extends("adminlayout")
@section("cont")




<!DOCTYPE html>
<html lang="en">

<hesad>

  <title>The Orders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<table class=" table table-striped w-auto">
  <thead class="table table-bordered ">
    <tr>
    
      <th scope="col" class="text-primary">User Name</th>
      <th scope="col" class="text-primary">User Email</th>
      <th scope="col" class="text-primary">User Phone</th>
      <th scope="col" class="text-primary">User Address</th>
      <th scope="col" class="text-primary">Product Name</th>
      <th scope="col" class="text-primary">Product price</th>
      <th scope="col" class="text-primary">Product Quantity</th>
      <th scope="col" class="text-primary">Pay Way</th>
      
   
    </tr>
  </thead>

      @foreach($orders as $order)
 <tbody>
   <tr>
    
     <th scope="row" >{{ $order->user_name   }}</th>
     <th scope="row" >{{ $order->email    }}</th>
     <th scope="row" >{{ $order->phone     }}</th>    
     <th scope="row" >{{ $order->address     }}</th>
     <th scope="row" >{{ $order->product_name    }}</th>
     <th scope="row" >{{ $order->product_price     }}</th>
     <th scope="row" >{{ $order->product_quantity  }}</th>
     <th scope="row" >{{ $order->payWay     }}</th>
     
   </tr>
   
 </tbody>
  @endforeach

 
</table>



<style>
body {

  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.center {
  text-align: center;
  border: 3px solid green;
  margin:20px;
padding:10px;
}
</style>




</head>
</html>

@endsection
@extends("adminlayout")
@section("cont")

<!DOCTYPE html>
<html lang="en">

<head>

  <title>The Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<table class=" table table-striped w-auto">
  <thead class="table table-bordered ">
    <tr>
    
      <th scope="col" class="text-primary">Product Name</th>
      <th scope="col" class="text-primary">Product price</th>
      <th scope="col" class="text-primary">Product Description</th>
      <th scope="col" class="text-primary">Product Date</th>
      <th scope="col" class="text-primary">Product Image</th>
   
    </tr>
  </thead>

@foreach ($products as $product)
  
  <tbody>
    <tr>
     
      <th scope="row" >{{ $product->po_name        }}</th>
      <th scope="row" >{{ $product->po_price        }}</th>
      <th scope="row" >{{ $product->po_description }}</th>
      <th scope="row" >{{ $product->po_date        }}</th>      
      <td> <img src=" /images/{{ $product->po_img }}" class="img-rounded" alt="{{ $product->po_name }}" style="width: 200px; height: 200px;"> </td>
        <td><a href = 'edit/{{ $product->po_id }}<' ><input type="submit" class="btn btn-primary mt-4 mb-10" value="Edit "><a></td>
     
         <td><a href = 'delete/{{ $product->po_id }}<' ><input type="submit" class="btn btn-primary mt-4 mb-10" value="Delete "><a></td>

    </tr>
    
  </tbody>

@endforeach

 
</table>


{{ $products->links()  }}

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
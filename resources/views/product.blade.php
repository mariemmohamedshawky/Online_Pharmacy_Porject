@extends("layout")
@section("content")


<!DOCTYPE html>
<html lang="en">

<head>
  <title>The Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<table class=" table table-striped w-auto">
  <thead class="table table-bordered ">
    <tr>

      <th scope="col">Product Name</th>
      
      <th scope="col">Product Image</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

@foreach ($products as $product)
  
  <tbody>
    <tr>
    
      <th scope="row" class="text-primary">{{ $product->po_name        }}</th>
     
      <td> <img src= "/images/{{ $product->po_img }}" class="img-rounded" alt="{{ $product->po_img }}" style="width: 200px; height: 200px;"> </td>
      <td><input type="submit" class="btn btn-primary mt-4 mb-10" value="Add to carts"></td>
      <td><a href = 'showproductdetails/{{ $product->po_id }}<' ><input type="submit" class="btn btn-primary mt-4 mb-10" value="Details"></td>

    </tr>
    
  </tbody>

@endforeach

 
</table>


{{ $products->links()  }}

<style>
body {
  background-image: url('images/3.jpg');
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
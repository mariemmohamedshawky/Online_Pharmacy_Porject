@extends("layout")
@section("content")


<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <body>
<div class="row justify-content-around">
   @foreach ($products as $product)
    

        <div class="col-lg-2 col-md-3 col-sm-6 col-6" style=" height:470px;">

            <div class="card" style="width: 25rem;height:440px; margin:20px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color: #000000;opacity: 90%; border-radius: 35px;">
                <img class="card-img-top"src=" /images/{{ $product->po_img }}" alt="{{ $product->po_img }}" value = '<?php echo$products[0]->po_img; ?>' style="width:120px;height:120px;">
             
                <div class="card-body">
                    
                      <div style="font-family:Lucida Handwriting;text-align: center;font-weight:bolder;color:white;font-size: 15px;">{{ $product->po_name}}</div>

                     <dt style="color: white;font-size: 17px;font-family:Comic Sans MS;">
                      Product price:<?php echo$products[0]->po_price; ?> $
                    </dt>
                    <dt style="color: white;font-size: 17px;font-family:Comic Sans MS;">
                      Description:<?php echo$products[0]->po_description; ?> 
                    </dt>
                    
                      <dt style="color: white;font-size: 17px;font-family:Comic Sans MS;">
                      Expiration date of product:<?php echo$products[0]->po_date; ?> 
                    </dt>
                    
                      
                      

                       <div class="form-actions no-color" style="position:center;margin:12px;margin-bottom:5px;">
    
  
                     <div class="btn-holder"><a href='add-to-cart/{{ $product->po_id }}' class="btn btn-primary mt-4 mb-10" role="button">Add To Cart</a> </p></div>



               </div>
                </div>
                  </div>
                    </div>
           
           @endforeach
        </div>

{{ $products->links()  }}






<style>
body {
  background-image: url('images/004.jpg');
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
</body>


@endsection 
@extends("layout")
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <body>



                 <div class="container">
                 <div class="row justify-content-center">
                 <div class="col-md-8 col-lg-6 form-wrapper" data-form-type="formoid">  
                



<h3 style="text-align: center; margin: 50px; font-family:'Lucida Handwriting';text-transform:uppercase;font-weight:bolder;color:midnightblue;">PRODUCT DETAILS</h3>
@foreach ($products as $product)

<div class="card" style="width: 34rem;height:710px; margin:20px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background:#CCEEFF;">
<br>

                     <dt style="font-family:Lucida Handwriting;text-align: center;text-transform:uppercase;font-weight:bolder;color:midnightblue;font-size: 25px;">
                      <?php echo$products[0]->po_name; ?> 
                     </dt>
                <img src=" /images/{{ $product->po_img }}" alt="{{ $product->po_img }}" value = '<?php echo$products[0]->po_img; ?>' style="float:left;width:250px;height:250px;">

                <div class="card-body">
                    <div class="card-title" style="margin-bottom: 25px;text-align:center;font-size:15px;font-weight:bold;">
                   
                    </div>

                    

                     <dt style="color: midnightblue;font-size: 20px;font-family:Comic Sans MS;">
                      Product price:
                    </dt>
                    <dt style="font-family: Comic Sans MS; font-size: 15px">
                     <?php echo$products[0]->po_price; ?> $
                     </dt>
                      

                  <dt style="color: midnightblue;font-size: 20px;font-family:Comic Sans MS;">
                     Description of product:
                    </dt>
                  <dt style="font-family: Comic Sans MS; font-size: 15px">
                     <?php echo$products[0]->po_description; ?>
                     </dt>
                    

                   <dt style="color: midnightblue;font-size: 20px;font-family:Comic Sans MS;">
                   Expiration date of product:
                    </dt>
                   <dt style="font-family: Comic Sans MS; font-size: 15px">
                     <?php echo$products[0]->po_date; ?>
                     </dt>
                     
                     <div class="btn-holder"><a href='add-to-cart/{{ $product->po_id }}' class="btn btn-primary mt-4 mb-10" role="button">Add To Cart</a> </p></div>

  

</div>
@endforeach
</div>
</div>
   </div>
  </div>

  
</body>
</html>
@endsection 
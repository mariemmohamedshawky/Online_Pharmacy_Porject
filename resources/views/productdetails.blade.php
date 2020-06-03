<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.8, https://mobirisethemes.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.8, mobirisethemes.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title> Product Details</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">

 <link rel="stylesheet" href="{{asset('css/tether.min.css')}}">

<link rel="stylesheet" href="{{asset('css/stylec.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">






  
  
  
</head>
<body>


<section class="form4 cid-raTI7nYObn" id="form4-1">

   <div class="container">
        
        
                 <div class="row justify-content-center">
                 <div class="col-md-8 col-lg-6 form-wrapper" data-form-type="formoid">  
                <div class="form-head">
                   
                  
                </div>



<h3 style="text-align: center; margin: 50px; font-family:'Lucida Handwriting';text-transform:uppercase;font-weight:bolder;color:midnightblue;">PRODUCT DETAILS</h3>
@foreach ($products as $product)

<div class="card" style="width: 34rem;height:650px; margin:20px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background:#CCEEFF;">
<br>

                     <dt style="font-family:Lucida Handwriting;text-align: center;text-transform:uppercase;font-weight:bolder;color:midnightblue;font-size: 25px;">
                      <?php echo$products[0]->po_name; ?> 
                     </dt>
                <img src=" /images/{{ $product->po_img }}" alt="{{ $product->po_img }}" value = '<?php echo$products[0]->po_img; ?>' style="float:left;width:300px;height:300px;">

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

</div>
@endforeach
</div>
</div>
   </div>
  </div>
</section>
  
  
</body>
</html>
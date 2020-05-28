


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
  <title>Edit product details</title>
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
                    <h2 class="mbr-section-subtitle form-subtitle mbr-fonts-style align-center pb-3 display-4">
                        Add Medcine FORM
                    </h2>
                  
                </div>
                <div class="form1" data-form-type="formoid">
                    <div data-form-alert="" hidden="">The record added sucessfully!</div>


        <form   action="/edit/<?php echo $products[0]->po_id; ?>" method = "post">
                        <div class="input-wrap" data-for="email">
                        	 <input type="hidden" class="form-control" name="name"  value="<?php echo csrf_token();?>">

                            <label class="form-label-outside mbr-lighter" for="form-1-email">Name:</label>
                            <input type="text" class="form-control" name="name" data-form-field="Email" required="" id="email-form4-1" value='<?php echo$products[0]->po_name; ?>'/> 
                        </div>
                            
                            <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Price:</label>
                            <input type="text" class="form-control" name="price" data-form-field="Email" required="" id="email-form4-1" value = '<?php echo$products[0]->po_price ; ?>'/> >
                        </div>
                        
                    
                        <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Description:</label>
                            <input type="text" class="form-control" name="des" data-form-field="Email" required="" id="email-form4-1" value = '<?php echo$products[0]->po_description; ?>'/>
                        </div>
                     <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">ExpireDate:</label>
                            <input type="data-form-field" class="form-control" name="expire_date" data-form-field="Email" required="" id="email-form4-1"  value = '<?php echo$products[0]->po_date; ?>'/>
                        </div>
                            
                           
                            
                            
              <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Upload Image:</label>
                            <input type="file" class="form-control" name="img" data-form-field="Email" required="" id="email-form4-1" alue = '<?php echo$products[0]->po_img; ?>'/>
                        </div>
                            
                           
                            
                    
                    
                    
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-lg btn-form btn-info display-4">Submit</button></span>
                    </form>
                </div>
            </div>
        </div>
   </div>
</section>
  
  
</body>
</html>



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
  <title>Add product page</title>
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
        <form   action="{{url('/insert_product')}}" class="mbr-form" method="get">
                        <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Name:</label>
                            <input type="text" class="form-control" name="name" data-form-field="Email" required="" id="email-form4-1">
                        </div>
                            
                            <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Price:</label>
                            <input type="text" class="form-control" name="price" data-form-field="Email" required="" id="email-form4-1">
                        </div>
                        
                    
                        <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Description:</label>
                            <input type="text" class="form-control" name="des" data-form-field="Email" required="" id="email-form4-1">
                        </div>
                     <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">ExpireDate:</label>
                            <input type="data-form-field" class="form-control" name="expire_date" data-form-field="Email" required="" id="email-form4-1">
                        </div>
                            
                           
                            
                            
              <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email">Upload Image:</label>
                            <input type="file" class="form-control" name="img" data-form-field="Email" required="" id="email-form4-1">
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




























<!------------
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
 
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  
    <link rel="stylesheet" href="css/templatemo-style.css">
  
  </head>


<body>
<h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
    <form action="{{url('/insert_product')}}" class="tm-edit-product-form" method="get">

                  <div class="form-group mb-3">
                    <label for="name">Product Nam</label>
                    <input id="name" name="name" type="text" class="form-control validate"required />
                    
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Description</label
                    >
                    <input name="des"
                      class="form-control validate"
                      rows="3"
                      
                    ></input>
                  </div>
                
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                  </div>
                  
              </div>
             
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" name="img"type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
       
    </footer> 

  </body>
</html>

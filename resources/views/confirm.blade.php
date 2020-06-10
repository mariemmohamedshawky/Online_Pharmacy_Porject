<html lang="en">
<head>



	<title>Confirm order</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<script src="{{asset('js/onlinepaye.js')}}" ></script>

 <link rel="stylesheet" href="{{URL::asset('/css/onlinepaye.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div>

  <a href="#" data-toggle="popover" title=" The amount payable is" data-content="
 <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
               

                 @endforeach
                 @endif

                 {{$total}}$


   "style="padding-left:700px ; font-color:blue;"> <img src="/images/cart.png"></a>





<div class="container mt-3">


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action=" {{url('/make_order')}}" method="get" >
				<span class="contact100-form-title">
					Confirm Your Order
				</span>
             
				<label class="label-input100" for="first-name">Your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type your name">
					<input id="first-name" class="input100" type="text" name="_name" placeholder="First name"  value=" <?php echo Auth::user()->name;?>">
					<span class="focus-input100"></span>
				</div>
			

				<label class="label-input100" for="email"> your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
					<input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com" value="<?php echo Auth::user()->email;?>">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone" required>Enter phone number*</label>
				<div class="wrap-input100 validate-input" data-validate = "number is required" required>
					<input type="phone" id="phone" class="input100" name="phone" >
					<span class="focus-input100"></span>
				</div>
				<div>
  <br>
	
				</div>
				<br>
				<label class="label-input100" for="message">Enter your Address in details*
				<br> Number of Street/Number of Building /Number of flat</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required" required>
					<textarea id="message" class="input100" name="Address" ></textarea>
					<span class="focus-input100"></span>
				</div>
				<br>
				<br>
<div>
 <p  style=" color:black;font-size:20px">Please select The payment Way :</p>
  <input type="radio" id="online" name="pay" value="online">
  <label for="online">online payment</label><br>
  <input type="radio" id="off" name="pay" value="offline" >
  <label for="offline">offline payment</label><br>
 
</div>

 
     

				<div class="container-contact100-form-btn" type="submit">
					<button class="contact100-form-btn">
						Send
					</button>
				</div>
			
       
         
 
			</form>
		

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							El houria ST 8th floor, El daki, cario,Egypt
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							01100859745
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							lifePharmacy@gmail.com
						</span>
					</div>
				</div>


  

	


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
   <!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>
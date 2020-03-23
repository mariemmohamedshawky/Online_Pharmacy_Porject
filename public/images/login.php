 <?php  
 include 'intit.php';     
 $message = '';
$data=new source();  
 if(isset($_POST["login"])) 
 {  
      $field = array(  
           'email'     =>     $_POST["email"],  
           'password'     =>     $_POST["password"]  
      );  
      if($data->required_validation($field))  
      {  
           if($data->can_login("users", $field))  
           {  
                $_SESSION["email"] = $_POST["email"];  
                header("location:login_success.php");  
           }  
           else  
           {  
                $message = $data->error;  
           }  
      }  
      else  
      {  
           $message = $data->error;  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <meta charset="UTF-8">
 <link rel="stylesheet" href="style.css">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
      </head>  
      <body>  
      	<div>
      		<img src="2.jpg">
      	</div>
     
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?> 

                  <div class="container">
  <div class="form">
   <div class="form-section">
    <form action="" method="POST">
      <div class="group">
            
     <div class="group">
      <h3 class="heading"> Login</h3>
     </div>
     <div class="group">
      <input type="email" name="email" class="control" placeholder="Enter Email.." >
      <div class="error">
    
      </div>
     </div> <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
     <div class="group">
      <input type="password" name="password" class="control" placeholder="Create Password..." >
      </div>
     </div>
 
     <div class="group m20">
      <input type="submit" name="login" class="btn" value="Login">
     </div>
     <div class="group m20">
      <a href="register.php" class="link">Create new account ?</a>
     </div>
    </form>
</div>
</div>
</div>
</div>
<div>
      		<img src="4.jpg">
      	</div>
</body>
 </html>  
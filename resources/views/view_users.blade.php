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
      
   </tr>
  </thead>
    
      @foreach ( $users as $user)
      
 <tbody>
   <tr>
    
     <th scope="row" >{{ $user->name   }}</th>
     <th scope="row" >{{ $user->email    }}</th>
  
    
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
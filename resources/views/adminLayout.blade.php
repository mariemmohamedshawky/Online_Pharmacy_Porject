
    <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<script src="{{asset('js/bootstrap.min.js')}}" ></script>
<script src="{{asset('js/jquary-1.12.1.min.js')}}" ></script>
<script src="{{asset('js/popper.min.js')}}" ></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('Add Medicine')}}">Add Medicine <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{url('Delete Medicine')}}">Delete Medicine <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{url('Update Medicine')}}">Update Medicine <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="{{url('View Orders')}}">View Orders <span class="sr-only">(current)</span></a>
      </li>
        
      @guest
       

        <li class="nav-item active">
       <a class="nav-link" href="{{url('logout/')}}">Logout <span class="sr-only">(current)</span></a>

      </li>
     @else

      <li class="nav-item">
        <a class="nav-link" href="{{url('logout/')}}">Log out</a>
      </li>
        </ul>
  
  </div>
</nav>
      @endguest





      @yield("cont");
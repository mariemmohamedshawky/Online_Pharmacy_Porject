@extends("layout")
@section("content")
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: black;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
     <!-- <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">-->
      <div class="container">
        <h2>Nada Farid</h2>
        <p class="title">Online pharamcy Founder</p>
        <p>FcAI level3.</p>
        <p>nodyfared6@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
     
      <div class="container">
        <h2>Marirem shawkey </h2>
        <p class="title">Project director</p>
        <p>FcAI level3.</p>
        <p>maroma@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>leila tariq</h2>
        <p class="title">Manager</p>
        <p>FcAI level3..</p>
        <p>lelia@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Mena Ali</h2>
        <p class="title">public relationship</p>
        <p>FcAI level3..</p>
        <p>menna@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Mariena Talaat</h2>
        <p class="title">Hr manager</p>
        <p>FcAI level3..</p>
        <p>mery@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Ghorod Mostafa</h2>
        <p class="title">Hr manager</p>
        <p>FcAI level3..</p>
        <p>ghorod@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection()
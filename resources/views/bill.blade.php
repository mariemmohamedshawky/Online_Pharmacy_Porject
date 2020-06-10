
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet"href="{{URL::asset('/css/bill.css')}}" media="all" />
  </head>
  <body>

    <header class="clearfix">
      <div id="logo">
        <img src="/images/logo.png">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div id="company" class="clearfix">
        <div>Life Pharmacy</div>
        <div>El houria ST 8th floor <br />El dokki </div>
        <div>cario,Egypt</div>
        <div><a href="mailto:company@example.com">lifePharmacy@gmail.com</a></div>
      </div>
      <div id="project">
       
        <div><span>CLIENT</span>   <?php echo Auth::user()->name;?></div>
        <div><span>ADDRESS</span>  <?php echo request("Address");?></div>
        <div><span>PhoneNumber</span>     <?php echo request("phone");?></div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">	<?php echo Auth::user()->email;?></a></div>
        <div>
      </div>
    </header>
    <main>
    	
      <table>
        <thead>
          <tr>
            <th class="desc">product_Name</th>
          
            <th class="unit" >produt_PRICE</th>
            <th class="qty">product_QTY</th>
            <th class="qty">SubTOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
         <?php $total = 0 ?>
 
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>
           
            <td class="desc">{{ $details['name'] }}</td>
            <td class="unit">${{ $details['price'] }}</td>
            <td class="qty">{{ $details['quantity'] }}</td>
            <td class="total">${{ $details['price'] * $details['quantity'] }}</td>
          </tr>
          <tr>
                @endforeach
        @endif
       
          <tr>
            <td colspan="4" style="color:red;">SUBTOTAL</td>
            <td class="total">{{$total}} </td>
          </tr>
          <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">${{$total*.25}}</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total"style="color:red;">GRAND TOTAL</td>
            <td class="grand total">${{$total+$total*.25}}</td>
          </tr>
        </tbody>
      </table>
      <div id="notices"  >
      <button onclick="myfunction()" style="color:red;margin-left:300px" >print your bill </button>
            <script >
              function myfunction(){
                window.print();
              }
            </script>

        </div>
        <a href="back" style="color:red;margin-left:500px;">Back To Home</a>
    

    </br>
</br>
        <div>NOTICE:</div>
        <div class="notice">Your Order will recive in 2 hours.</div>
      </div>
    </main>
    <footer>

      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>

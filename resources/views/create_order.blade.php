<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" href="css/cssfooter.css">
    <link rel="stylesheet" href="css/body.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
  />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Order</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-*" style="cursor: pointer;">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="images/Icon.png" width="100%" height="40" alt=""></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-supported-content"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-supported-content">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link " href="index.html" style="color:black">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbar-dropdown"
              role="button"
              data-bs-toggle="dropdown"
              style="color:black"
              >Menu</a
            >
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="cake.html" style="color:black;">Cakes</a></li>
              <li><a class="dropdown-item" href="bnp.html" style="color:black">Bread and Pastries</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.html" style="color:black">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html" style="color:black">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control" type="search" placeholder="Searching for?">
          <button class="btn" type="submit" style="background-color: hsl(210, 14%, 53%, 0.5)">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <form action="/Menu/checkout" method="POST">
    @csrf
        
        <h1>Total order is ₱{{$total}}</h1>
        <ul>
            @for ($i = 0; $i < count($products); $i++)
                @if ($request -> input('order_' . $products[$i] -> product_ID) > 0)
                    <li>{{$products[$i] -> product_name}}: {{$request -> input('order_' . $products[$i] -> product_ID)}}</li>
                @endif
                <input
                name="order_{{$products[$i]->product_ID}}"
                value="{{$request -> input('order_' . $products[$i] -> product_ID)}}"
                hidden
                />
            @endfor
  
        </ul>
  <div class="container pt-2" style="background-color: white">
    <div class="row">
        <div class="col-xl-6">
            <div class="card-body p-md-5 text-black">
                <div class="row">
                  <h1>Billing Address</h1>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="name" style="color: black">First Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Ex. Kriss" name="fname">
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <label for="name" style="color: black">Last Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Ex. Santos" name="lname">
                      </div>
                    </div>
                  </div>
    
                  <div class="form-outline mb-4">
                    <label for="name" style="color: black">Address:</label>
                        <input type="address" class="form-control" id="address" placeholder="Ex. Block 1 Lot 30 Brgy. Sampaloc 2. Dasmarinas city, Cavite" name="address">
                  </div>
                  <div class="col-md-4">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Zip:</label>
                    <input type="text" id="form3Example3" class="form-control" placeholder="Ex. 4114" />
                  </div>
                  </div>
    
                  <div class="form-outline mb-4">
                    <label for="name" style="color: black">Mobile Number:</label>
                    <input type="number" class="form-control" id="number" placeholder="Ex. 0916-XXXX-XXX" name="number">
                  </div>
                  <div class="form-outline mb-4">
                    <label for="name" style="color: black">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ex. kriss.santos@yahoo.com" name="email">
                  </div>
                </div>
             </div>
             <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <h1>Payment</h1>
                      <p>Bank Transfer/Credit Card:</p>
                        Bank: BDO Peso Account<br>
                        Account Name: katrinasbakeshop<br>
                        Account Number: 0019 0037 0881
                    </div>
                  </div>
                  <div class="form-outline mb-4">
                    <label for="name" style="color: black">Accepted Cards:</label>
                    <div class="icon-container">
                      <img src="creditcard_logos/american-express-logo.png" width="40px">
                      <img src="creditcard_logos/paypal.png" width="50px">
                      <img src="creditcard_logos/visa_logo.png" width="30px">
                      <img src="creditcard_logos/mastercard.png" width="30px">
                    </div>
                  </div>
                <div class="form-outline mb-4">
                   <label for="name" style="color: black;">Cardholder Name:</label>
                   <input type="text" class="form-control" id="name" placeholder="Ex. Kriss D. Santos" name="cname">
                </div>
                <div class="form-outline mb-4">
                   <label for="name" style="color: black;">Credit card Number:</label>
                   <input type="number" class="form-control" id="name" placeholder="Ex. Kriss D. Santos" name="cnumber">
                </div>
                <div>
                  <label for="start">Expiration Date:</label>
                  <input type="date" min="2000-08-15" max="2030-08-26">
                </div>
           </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <div class="bt-btn pt-5 pb-3">
            <button type="submit">Place order</button>
            </div>
          </div>
        </div>
      </div>
      </form>
  <footer class="footer-distributed pt-3" style="margin-top: 20px">
      <div class="footer-left">
        <h3 style="font-family: Sun Valley, san-serif;">Katrina's Bakeshop</h3>
        <p>ⓒ 2022 katrinasbakeshop.com. All rights reserved.</p>
      </div>
      <div class="footer-center">
        <div class="pt-1">
           <img src="footer_logo/location.png" style="width: 40px; padding-right: 10px; height: 40px;">
            <p  class="pb-1" style="padding-left: 5px">
              Molino RD, Greenfield District <br>
              Bacoor City, Cavite
            </p>
        </div>
        <div>
          <img src="footer_logo/telephone.png" style="width: 30px;">
          <p style="padding-left: 15px;">
          Contact Number<br>
          8-7000<br>
          Globe 0916-7006035<br>
          Smart 0906-9028632</p>
        </div>
      </div>
      <div class="footer-right" style="margin-top: 5px;">
          <p class="footer-company-about">
          <span>About the company</span>We are dedicated to serve you with our freshly baked Cakes, Breads and pastries.
          </p>
        <div class="footer-icons">
          <h1 class="fs-5">Follow Us</h1>
            <a href="https://www.facebook.com/kriss.santos.5">
                <img src="footer_logo/facebook-logo.png" style="width: 12%; margin-right: 7px;">
            </a>
            <a href="https://twitter.com/">
                <img src="footer_logo/twitter.png" style="width: 7%; margin-right: 13px;">
            </a>
            <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2F%3F__coig_login%3D1">
                <img src="footer_logo/IG.png" style="width: 7%;">
            </a>
            <a href="https://www.youtube.com/">
                <img src="footer_logo/yt.png" style="width: 15%">
            </a>
        </div>
      </div>
  </footer>
</body>
</html>
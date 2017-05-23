<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apparel | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Buy some new gear at Suni Run">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="SuniRun.css">
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
     <img src="SuniBanner.png">
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-left" href="index.php"><img src="SuniNavLogo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="AboutSuniRun.php">About Us</a></li>
        <li><a href="SuniApparel.php">Apparel</a></li>
        <li><a href="SuniEvents.php">Local Events</a></li>
        <li><a href="SuniRunners.php">Weekly Runner</a></li>
        <li><a href="ContactSuniRun.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="tab-content">
<h1>Our Running Gear</h1>
<h3>Suni Run prides itself on providing the best gear possible in order for you
to perform at maximum level! Our prices <strong>cannot</strong> be beat and we 
assure you the best quality possible. See something you like? Contact
us to ensure your product!</h3>
</div>

<div class="row">
  <div class="col-sm-2">
    <p class="text-center"><strong>Head Bands</strong></p><br>
    <a href="#demo" data-toggle="collapse">
      <img src="RunningHeadBand.jpg" class="img-circle person" alt="Heab Bands">
    </a>
    <div id="demo" class="collapse">
      <p>Unisex HeadBand</p>
      <p>$10.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
  </div>
  <div class="col-sm-2">
    <p class="text-center"><strong>Pants</strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <img src="RunningPants.jpg" class="img-circle person" alt="Running Pants">
    </a>
    <div id="demo2" class="collapse">
      <p>Mens Jogging Pants</p>
      <p>$17.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
  </div>
  <div class="col-sm-2">
    <p class="text-center"><strong>Shirts</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <img src="RunningShirt.jpg" class="img-circle person" alt="Running Shirts">
    </a>
    <div id="demo3" class="collapse">
      <p>Mens Running Shirt</p>
      <p>$12.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
  </div>
  <div class="col-sm-2">
    <p class="text-center"><strong>Shorts</strong></p><br>
    <a href="#demo4" data-toggle="collapse">
      <img src="RunningShorts.jpg" class="img-circle person" alt="Running Shorts">
    </a>
    <div id="demo4" class="collapse">
      <p>Unisex Athletic Shorts</p>
      <p>$15.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
  </div>
  
<div class="col-sm-2">
    <p class="text-center"><strong>Socks</strong></p><br>
    <a href="#demo5" data-toggle="collapse">
      <img src="RunningSocks.jpg" class="img-circle person" alt="Running Socks">
    </a>
    <div id="demo5" class="collapse">
      <p>Womans Running Socks</p>
      <p>$9.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
  </div>
<div class="col-sm-2">
    <p class="text-center"><strong>Shoes</strong></p><br>
    <a href="#demo6" data-toggle="collapse">
      <img src="RunningShoes.jpg" class="img-circle person" alt="Running Shoes">
    </a>
    <div id="demo6" class="collapse">
      <p>Mens Running Shoes</p>
      <p>$39.99</p>
      <p><a href="http://student068.webdev.seminolestate.edu/final/ContactSuniRun.php">Contact Us for Availability!</a></p>
    </div>
</div>
</div>

<footer class="container-fluid text-center">
<marquee> Suni Run is not responsible for any exhaustion that you may feel during
your workout. (That means you Paul!) &copy; <strong>Brandon Rodriguez 

<script>
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;
document.write(today);
</script>

</footer>

</body>
</html>
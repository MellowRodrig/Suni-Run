<!--Suni Runners will go here-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Local Weekly Runner | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Check out this weeks local runner at Suni Run">
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

<!--#include file="nav.shtm"-->
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
<div class="col-sm-12">
<h1>Local Runner of The Week</h1>
</div>
</div>

<div class="row">

<div class="col-sm-6">
<h2>John Persuad</h2>
<p> John Persuad, one of the original runners of our organization, began his running
career in 1990. John is also a large factor in the development of Suni Run. Ever since it's
beginning, John has ran each and every event that we've sponsored or hosted.
We congratulate John on being an awesome runner and an even better friend. 
Congratulations on being Suni Run's <strong>Local Runner of The Week</strong><p>
</div>

<div class="col-sm-6">
<img src="JohnPersuad.jpg">
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
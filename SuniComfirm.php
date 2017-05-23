<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comfirmation | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Your message was sent to Suni Run">
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

<div class="row">
<div class="tab-content">
<div class="col-sm-6">
<h2>Thanks for reaching out!</h2>
<h3>Now that you've taken care of business, it's time to relax with some
yoga! Here's a complimentary yoga lesson.</h3>
</div>

<div class="col-sm-6">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/SBzjsPgTZm8" frameborder="0" allowfullscreen></iframe>
	</div>
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
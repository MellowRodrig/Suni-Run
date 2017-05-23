<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Welcome to Suni Run, one of the largest running organizations in Florida!">
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

<!--#include file="nav.shtm"-->

<div class="panel-group">
<div class="container">    
 <div class="row"> 
    <div class="col-sm-12">
      <!--<div class="panel panel-primary">-->
        <a href="SuniApparel.php">
        <div class="panel-body"><img src="RunningApparel.jpg" class="img-responsive" style="width:100%" alt="Running Apparel"></div>
		</a>      
      <!--</div>-->
    </div>
    <div class="col-sm-12" class="collapse in">

	<!--<div class="panel panel-danger">-->
        <a href="SuniEvents.php">
        <div class="panel-body"><img src="LocalEvents.jpg" class="img-responsive" style="width:100%" alt="Local Events"></div>
        </a>
     <!-- </div>-->
    </div>
    <div class="col-sm-12"> 
      <!--<div class="panel panel-success">-->
        <a href="SuniRunners.php">
        <div class="panel-body"><img src="WeeklyLocalRunner.jpg" class="img-responsive" style="width:100%" alt="This Week's Weekly Runner"></div>
      	</a>
     <!-- </div>-->
      <div class="col-sm-12">
      <!--<div class="panel panel-primary">-->
	
		<a href="AboutSuniRun.php">
        <div class="panel-body"><img src="AboutSuniRun.jpg" class="img-responsive" style="width:100%" alt="About Suni Run"></div>
      	</a>
      </div>
      <div class="col-sm-12">
      <!--<div class="panel panel-primary">-->
        <a href="ContactSuniRun.php">
        <div class="panel-body"><img src="ContactUs.jpg" class="img-responsive" style="width:100%" alt="Contact Suni Run"></div>
      	</a>
      <!--</div>-->
  </div> 
  </div>
</div>
</div><br>

<br><br>

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
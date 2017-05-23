<!--Suni Events Will be placed here-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Events | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="See events sponsored by Suni Run">
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

<!--#include file="/final/nav.shtm"-->

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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="CityRunners.jpg" alt="Runners in city">
      <div class="carousel-caption">
        <h1>Suni Run 2k17</h1>
      </div> 
    </div>

    <div class="item">
      <img src="OldMeetsNew.jpg" alt="Old and young runner">
      <div class="carousel-caption">
        <h1>Fun For All Ages</h1>
        <h2>Yes, that even means you grandma.</h2>
      </div> 
    </div>

    <div class="item">
      <img src="AerialView.jpg" alt="Aerial View of Suni Run 2k17">
      <div class="carousel-caption">
        <h1>Breaking Records</h1>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="tab-content">
<h1>Suni Run 2k17</h1>
<p>Hosted in Central Florida, this event features one of the largest populations of
runners in Florida! Included in our run was complimentary snacks, beverages, and live
music. Not only did our marathon include these goodies, but a free medal and shirt were
provided to each and every runner. This is irregardless of their run time or if they completed
the full marathon. We are genuinely thrilled to see such a turn out, and can't wait to 
see each and every on of you in <strong>Suni Run 2k18!</strong>
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
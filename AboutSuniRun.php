<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Learn about Suni Run here!">
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

<style>
.nav-tabs li a {
    color: #777;
}
</style>

<h3 class="text-center">Our History Is Your History</h3> 
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Our Past</a></li>
  <li><a data-toggle="tab" href="#menu1">Our Present</a></li>
  <li><a data-toggle="tab" href="#menu2">Our Future</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h2>The History of Suni Run</h2>
    <img src="OldOrlando.jpg">
    <h3>With a rapidly growing population of runners in the state of Florida, some young runners
    took to action in the '90s and formed <strong>Suni Run.</strong> This group consisted of 
    runners from around the state, meeting and greeting with fellow locals and bonding while
    doing something that they all love, running!</h3>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h2>Suni Run Today</h2>
    <img src="CurrentOrlando.png">
    <h3>With an organization branching all across the state of Florida, it's easy to see just
    how much Floridians love running Suni! Month after month, we host and sponsor runs across
    the state of Florida, as well as offer running gear to keep you in top performance!</h3>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h2>The Future of Suni Run</h2>
    <img src="SuniRunMainLogo.png">
    <h3>With growth as dramatic as ours, the future of Suni Run is tremendous! We know 
    that you will be pleased to join us in our sponsored runs including our famous <strong>Suni Run 2k17
    marathon</strong> and we thank you for your support.</h3>
  </div>
</div>

<blockquote>
<h1>John Doe</h1>
<p>Suni Run is awesome!</p>
</blockquote>

<blockquote>
<h1>Mary Sue</h1>
<p>I got my pants from this site... fits nice.</p>
</blockquote>

<blockquote>
<h1>Roberto Sanchez</h1>
<p>Last years Suni Run Marathon was off the chain!</p>
</blockquote>

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
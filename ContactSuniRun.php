<!--Contact Suni Run page will be placed here-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us | Suni Run</title>
  <meta charset="utf-8">
  <meta name="description" content="Contact us for anything from apparel to suggestions!">
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
<h1>Drop Us A Line!</h1>

<!--#include file="nav.shtm"-->

<div class="row">
<div class="col-sm-6">
 <form name="myform" id="myform" method="post" action="Brandon-Rodriguez-Form-Processor.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First Name">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last Name">

    <label for="Region">Region</label>
    <select id="Region" name="Region">
      <option placeholder="Select Region">
      <option value="Central Florida">Central Florida</option>
      <option value="South Florida">South Florida</option>
      <option value="North Florida">North Florida</option>
    </select>
    
    <input type="hidden" name="recipient" id="recipient" value="brandonarodrig@gmail.com">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="What's the subject?" style="height:200px"></textarea>
	<input type="hidden" name="redirect" id="redirect" value="SuniConfirm.php">
    <input type="submit" value="Submit">

  </form>
</div>

<div class="col-sm-6">
<h2>Visit Our Headquarters!</h2>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(28.5383,81.3792),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

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
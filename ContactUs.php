<!DOCTYPE html>
<html land="en">
<head>
 <meta charset="UTF-8" />
    <meta name="description" content="A website to find Job in a reputed Company" />
    <meta name="keywords" content="Job, COMPANY,PORTAL, RECRUITER" />
    <meta name="author" content="Shreyal" />
    <meta http-equiv="refresh" content="" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="./css/main.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('./upload/BlogBanner.png');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("Banner01.png");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("Banner01.png");
    min-height: 400px;
}

.job-wide {letter-spacing: 10px;}
.job-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
</head>
<body>

<?php 
include "Admin/company_settings/company_info.php";
include "includes/Header.php"
?>
<?php 
include "includes/menu.php"
?> 

<!-- Container (Contact Section) -->
<div class="job-content job-container job-padding-64">
  <h3 class="job-center">WHERE I WORK</h3>
  <p class="job-center"><em>I'd love your feedback!</em></p>

  <div class="job-row job-padding-32 job-section">
    <div class="job-col m4 job-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="job-round-large"></div>
    </div>
    <div class="">
      <div class="w3-large job-margin-bottom">
        <i class="fa fa-map-marker job-hover-text-black" style="width:30px"></i> <?php echo $contact_address ?><br>
        <i class="fa fa-phone job-hover-text-black" style="width:30px"></i> <?php echo $contact_email ?><br>
        <i class="fa fa-envelope job-hover-text-black" style="width:30px"> </i> <?php echo $contact_phone ?><br>
      </div>
			<form action="sendMail.php"> 
			<div>
				<input type="text" placeholder="Enter Your Name" name="guest_name" id="guest_name" required/>
        <br/>
				<input type="email" placeholder="Enter Your Email" name="guest_email" id="guest_email" required>
				<br/>
        <br/>
        <textarea placeholder="Enter Youe Message" name="guest_msg" id="guest_msg" required></textarea>
				<br/>
        <input type="submit" value="Send" name="send_msg" id="send_msg">
			</div>
			</form>
      <p>Swing by for a cup of coffee, or leave me a note:</p>
	      
  </div>
</div>
</div>
<?php
include "includes/footer.php"
?>
 
<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAP2nn9ykf3yky8wksEW4ZSp8JnYoBVgOY"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "job-navbar" + " job-card-2" + " job-animate-top" + " job-white";
    } else {
        navbar.className = navbar.className.replace(" job-card-2 job-animate-top job-white", "");
    }
}
</script>

</body>
</html>


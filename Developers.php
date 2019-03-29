 <?php
include('heading.php');
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script src="jquery-3.3.1.min.js"></script>


      <style>
        @font-face {
font-family:"custom1";
font-style:normal;
src:url("./font/Requiem/Requiem.ttf");
        }
        *{
font-family:"custom1";

        }
    .section-header {
  margin-bottom: 60px;
  position: relative;
  padding-bottom: 20px;
}

.section-header::before {
  content: '';
  position: absolute;
  display: block;
  width: 60px;
  height: 5px;
  background: #f82249;
  bottom: 0;
  left: calc(50% - 25px);
}

.section-header h2 {
  font-size: 36px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 10px;
}

.section-header p {
  text-align: center;
  padding: 0;
  margin: 0;
  font-size: 18px;
  font-weight: 500;
  color: #9195a2;
}
.back-to-top {
  position: fixed;
  display: none;
  background: #f82249;
  color: #fff;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s ease-in-out;
}

.back-to-top i {
  font-size: 24px;
  padding-top: 6px;
}

.back-to-top:focus {
  background: #e0072f;
  color: #fff;
  outline: none;
}

.back-to-top:hover {
  background: #e0072f;
  color: #fff;
}

.card-body{
	 background-position: center;
background-repeat: no-repeat;
background-size: cover;background-attachment:fixed;
background-image : url("mobile 2.jpg");
box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.card-title{
	text-align:center;
}



</style>
</head>

<body background='mobile 2.jpg' style="  background-position: center;
background-repeat: no-repeat;
background-size: cover;background-attachment:fixed">

<div class="container"><BR><BR><br>
<img src="heading/developers.png" style="width:100%"><br><br>
 <div class="card-deck" style="width:100%">
	  <div class="card rounded" style="">
	    <img class="card-img-top profile-pic img-fluid " src="img/Abhishek.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">ABHISEK KUMAR</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Aditya.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">ADITYA PRATAP</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Atul.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">ATUL TATHAGAT</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Dikshant2.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">DIKSHANT GAUTAM</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Niraj.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">NIRAJ SINGH</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Suman.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">KUMAR SUMAN</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Ahteshamul.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">MD AHTESHAMUL HAQUE</h5>
	      <h6 style="text-align: center">(DEVELOPER)<br>CSE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	  <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Harshit.png" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">HARSHIT SAINI</h5>
	      <h6 style="text-align: center">(CREATIVE)<br>CSE, 3RD YEAR </h6>
	      
	    </div>
	  </div>
	   <div class="card rounded">
	    <img class="card-img-top profile-pic img-fluid " src="img/Gunjan.jpeg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">GUNJAN BIHARI</h5>
	      <h6 style="text-align: center">(CREATIVE)<br>EEE, 2ND YEAR </h6>
	      
	    </div>
	  </div>
	</div>
	</div>
   <br><BR>  
<?php include('footer.php')?>
  <script>
window.onscroll = function() {scrollFunction()};
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>       
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
<?php include('heading.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pronites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>




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
body{
    background-image: url('mobile 2.jpg');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
}

.comingsoon{
    max-width: 100%;
}




@font-face{
    font-family: "custom1";
    font-style:normal;
    src: url("../font/Requiem/Requiem.ttf");
}

*{
    font-family: "custom1";
}







</style>
</head>
<body>
    
<br>

<div class="container">
    <br><br>
     <img   src="heading/pronites.png" style="width: 100%;">
 <br>
  <br>
  
  <!-- Tab panes -->
  <div >
    <div id="day1"><br>
      <img class="comingsoon" src="coming soon.png" alt="">
      
    </div>
    
  </div>
</div>
 <br><br>
  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>  
   <?php include('footer.php')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	   
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
	<script>
   $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });
</script>
</body>
</html>

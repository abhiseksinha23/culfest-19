<?php include('heading.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src = 'js/jquery.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	   
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
<style>

.card-action {
  font-size: 30px;
}

.card-title {
  text-transform: uppercase;
}

@font-face { 
  font-family: "custom1" !important;
  font-style: normal !important;
  src: url("font/Requiem/Requiem.ttf") !important;
} 
body {
  font-family: 'custom1' !important;
  background: url('images/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.card {
  background: inherit;
  background: url('images/background.jpg');
  box-shadow: 0 0 10px rgb(0,0,0);
}

.card-action a {
  color: #222222 !important;
}

.card-action a:hover {
  color: black !important;
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

.event-title {
  position: absolute;
  top: 1.2em;
  left: 2.2em;
  font-weight: bold;
  color: orange;
  padding: 5px 10px;
  border-radius: 20px;
  background-color: white;
}

.card-title {
  text-align: center;
  padding-top: 10px;
  text-transform: uppercase;
}
</style>
</head>
<body style=" background-image: url('img/mo.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
<br>


 <br><br><br>
 
 <div class="Main-heading" >
    	    <img   src="heading/events.png" style="width: 100%;"><br><br>
        <!--<h2 > GALLERY </h2>-->
 </div>

 <?php
    $string = file_get_contents("json/events.json");
    $json = json_decode($string, true);

    foreach($json['events'] as $event) {
        echo '
        <div class="container">
          <div class = "card">
            <h3 class = "card-title">'.$event['name'].'</h3>
            <div id="'.str_replace(" ","_",$event['name']).'" class="carousel slide my-carousel" data-ride="carousel">

                <ol class="carousel-indicators">';

                for($i = 0; $i < count($event['sub_events']); ++$i) {

                  if($i == 0)
                    echo '<li data-target="#'.$event['name'].'" data-slide-to="'.$i.'" class="active"></li>';
                  else
                    echo '<li data-target="#'.$event['name'].'" data-slide-to="'.$i.'"></li>';
                }

                echo '
                </ol>

                <div class="carousel-inner">';
                $i = 0;
                foreach($event['sub_events'] as $sub_event) {

                  if($i == 0) {
                    echo '
                      <div class="carousel-item active">
                        <a href = "description.php?event='.$event['name'].'&sub_event='.$sub_event['name'].'"><span class = "event-title">'.$sub_event['name'].'</span><img class="d-block w-100" src="'.$sub_event['image'].'"></a>
                      </div>';
                      $i++;
                  }
                   else {
                    echo '
                        <div class="carousel-item">
                          <a href = "description.php?event='.$event['name'].'&sub_event='.$sub_event['name'].'"><span class = "event-title">'.$sub_event['name'].'</span><img class="d-block w-100" src="'.$sub_event['image'].'"></a>
                        </div>';
                   }
                }

                echo '
                  </div>

                <a class="carousel-control-prev" href="#'.str_replace(" ", "_",$event['name']).'" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" href="#'.str_replace(" ", "_",$event['name']).'" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>

                </a>

              </div>
          </div>
        </div>
        <div><br><br>';
    }

?>
 <br><br>


  <?php include('footer.php')?>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>  

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

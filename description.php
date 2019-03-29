<?php include('heading.php');?>

<?php

$EVENTS = ['dance', 'faces', 'dramatics', 'fashion', 'informals', 'literacy',
		'mega event', 'phocus', 'qunite', 'vocals'];
$SUBEVENTS = [''];

$event = $_GET['event'];
$sub_event = $_GET['sub_event'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Description</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src = "js/jquery.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
	
.head * {
	font-size: 16px;
}
.card {
	background: url('images/background.jpg');
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

.board{
  width: 100%;
margin: 20px auto;
height: 600px;
overflow: auto;
background: url('img/mob.jpg');
box-shadow: 0 0 4px 4px rgba(0,0,0,0.5);
}
.board .nav-tabs {
    position: relative;
		margin-bottom: 0;
    box-sizing: border-box;
}
* {
	background: url('img/mob.jpg');
}

.board > div.board-inner{
    background:  url(img/mob.jpg);
    background-size: 30%;
}

p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: orange;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
}

span.round-tabs{
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: white;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}

li.active {
    color: rgb(34, 194, 34);
}

span.round-tabs.one, span.round-tabs.two, span.round-tabs.three, span.round-tabs.four,  span.round-tabs.five {
		color: #febe29;
		border: 2px solid #febe29;
}


.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
.nav-tabs > li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;
    
}
.nav-tabs > li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
}
.nav-tabs > li a{
   width: 70px;
   height: 70px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-pane {
  position: relative;
	padding: 20px 10px;
}
.tab-content {
	position: relative;
	max-height: 500px;
}
.tab-content .head{
    font-size: 25px;
    text-transform: uppercase;
		padding-bottom: 10px;
		text-decoration: underline;
		margin-bottom: 10px;
		position: relative;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}


@media( max-width : 585px ){
    
.board {
width: 90%;
height:auto !important;
}
    span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
    .tab-content .head{
        font-size:20px;
        }
    .nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

.nav-tabs > li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}

.tab-pane p, .tab-pane ul, .tab-pane li, .tab-pane span {
	font-size: 20px;
}
</style>
</head>
<body style=" background-image: url('img/mo.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
<br>

<div class="container">
 <br><br><br>
	<br>
		<a href = 'events.php' style = 'color: brown; font-size: 25px;'><i class="fas fa-arrow-left"></i></a>
		<div class="row">
			<div class="board">
				<div class="board-inner">
					<ul class="nav nav-tabs">
						<div class="liner"></div>
						<li class="active">
							<a class = "active show" href="#picture" data-toggle="tab" aria-expanded="true">
								<span class="round-tabs one">
										<i class="glyphicon glyphicon-picture"></i>
								</span> 
							</a>
						</li>

						<li>
							<a href="#description" data-toggle="tab">
								<span class="round-tabs two">
									<i class="glyphicon glyphicon-file"></i>
								</span> 
							</a>
						</li>
						
						<li>
							<a href="#rules" data-toggle="tab">
								<span class="round-tabs three">
									<i class="glyphicon glyphicon-pencil"></i>
								</span> 
							</a>
						</li>

						<li>
							<a href="#prize" data-toggle="tab">
								<span class="round-tabs four">
									<i class="glyphicon glyphicon-gift"></i>
								</span> 
							</a>
						</li>

						<li>
							<a href="#coordinators" data-toggle="tab">
								<span class="round-tabs five">
									<i class="glyphicon glyphicon-user"></i>
								</span> 
							</a>
						</li>       
					</ul>
				</div>

				<?php
						$string = file_get_contents("json/$event.json");
						$json = json_decode($string, true);
				?>

				<div class="tab-content">
					<div class="tab-pane fade active show in active" id="picture">
						<h3 class="head"><?php echo strtoupper($sub_event); ?></h3>
								<p class = 'text-center'><img class = 'img-thumbnail'  width = "430" height = "400" src = <?php echo $json['events'][$sub_event]['image']; ?>> </p>
					</div>

					<div class="tab-pane fade" id="description">
						<h3 class="head">DESCRIPTION</h3>
							<p> <?php echo $json['events'][$sub_event]['description']; ?> </p>           
					</div>
									
					<div class="tab-pane fade" id="rules">
						<h3 class="head">RULES</h3>
							<?php echo "<p>".$json['events'][$sub_event]['rules']."</p>"; ?>
					</div>
					
					<div class="tab-pane fade" id="prize">
						<h3 class="head">PRIZES</h3>
							<p> <?php 
											if($json['events'][$sub_event]['prize'])
												echo "The prize money is worth : ".$json['events'][$sub_event]['prize']; 
											else
												echo "The prize money is not available";
									?> </p>
					</div>
					
					<div class="tab-pane fade" id="coordinators">
					<p>
						<?php	
							
							if($json['segment_head']) {
								echo '<h3 class="head">SEGMENT HEAD</h3>';
								echo "<span>".$json['segment_head']."</span><br>";
								echo "<span>".$json['segment_head_roll']."</span><br>";
								echo "<span>".$json['segment_head_contact']."</span><br><br>";
							}

							if($json['events'][$sub_event]['coordinators']) {
								echo '<h3 class="head">CO-ORDINATORS</h3>';

								foreach($json['events'][$sub_event]['coordinators'] as $coordinator) {
									echo "<span>".$coordinator['name']."</span><br>";
									echo "<span>".$coordinator['roll']."</span><br>";
									echo "<span>".$coordinator['contact']."</span><br><br>";
								}
							}

							if($json['events'][$sub_event]['joint_coordinators']) {
								echo '<h3 class="head">JOINT-ORDINATORS</h3>';

								foreach($json['events'][$sub_event]['joint_coordinators'] as $joint_coordinator) {
									echo "<span>".$joint_coordinator['name']."</span><br>";
									echo "<span>".$joint_coordinator['roll']."</span><br>";
									echo "<span>".$joint_coordinator['contact']."</span><br><br>";
								}
							}
						?>
						</p>
					</div>
				</div>
			</div>
		</div>

</div>
 <br><br>



  <?php include('footer.php')?>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>  
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

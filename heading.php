

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Culfest 19</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <!-- Main Stylesheet File -->
  
  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <style>

   @font-face {
    font-family: "custom1";
    src: url("font/Requiem/Requiem.ttf");
  }

  *{
    font-family: custom1;
  }

  a:hover,
a:active,
a:focus {
  color: #f8234a;
  outline: none;
  text-decoration: none;
}
  #header {
  height: 90px;
  padding: 25px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

#header.header-scrolled,
#header.header-fixed {
  background:#AB773E;
  height: 70px;
  padding: 15px 0;
  transition: all 0.5s;
}
#header #logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 span {
  color: #f82249;
}

#header #logo h1 a,
#header #logo h1 a:hover {
  color: #fff;
}


/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/

/* Nav Menu Essentials */
.nav-menu{
	margin-top:300px;
}
.nav-menu,
.nav-menu * {
  
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
 top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}

/* Nav Menu Arrows */

.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}

/* Nav Meu Container */

#nav-menu-container {
  float: right;
  margin: 0;
}

/* Nav Meu Styling */

.nav-menu a {
  padding: 8px;
  text-decoration: none;
  display: inline-block;
  color: rgba(202, 206, 221, 0.8);
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  outline: none;
}

.nav-menu .menu-active a,
.nav-menu a:hover {
  color: #fff;;
}

.nav-menu > li {
  margin-left: 8px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #f82249;
  visibility: hidden;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before,
.nav-menu li:hover > a:before,
.nav-menu .menu-active > a:before {
  visibility: visible;
  width: 100%;
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
  border-radius: 3px;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color:#060c22;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
  border-radius: 3px;
}

.nav-menu ul li:hover > a {
  background: #f82249;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */

#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 15px 15px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: brown;
}

/* Mobile Nav Styling */

#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(6, 12, 34, 0.9);
  left: -100%;
  width: 100%;
  overflow-y: auto;
  transition: 0.4s;

}


#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;

}

#mobile-nav ul li a {
  color: #fff;
  font-size: 25px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: #f82249;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #f82249;
}

#mobile-nav ul .menu-item-active {
  color: #f82249;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(6, 12, 34, 0.8);
  display: none;
}

/* Mobile Nav body classes */

body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}
@media (max-width: 991px) {
  #header {
   
    height: 70px;
    padding: 15px 0;
    transition: all 0.5s;
  }

  #nav-menu-container {
    display: none;
  }

  #mobile-nav-toggle {
    display: inline;
  }

  </style>
  </head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
     <div id="logo" class="pull-left">
      <a href="#intro" class="scrollto"><img src="img/c1.png" height="50px" alt="" title=""></a>

      </div>

      <nav id="nav-menu-container" style=" background-image: url('img/mobile.jpg'); background-repeat: no-repeat; background-size: cover;">
       <ul class="nav-menu responsive" style="width:90%;margin:auto;">
        <br><br>
          <li class="menu-active"><a href="index.php" style="color:brown;"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="events.php"style="color:brown;" ><i class="fas fa-calendar-alt"></i> Events</a></li>
          <li><a href="schedule.php"style="color:brown;"><i class="far fa-clock"></i> Schedule</a></li>
          <li><a href="prenites.php"style="color:brown;"> <i class="fab fa-product-hunt"></i> Pro Nites</a></li>
          <li><a href="team.php"style="color:brown;"><i class="fas fa-users"></i> Team</a></li>
          <li><a href="Gallery.php"style="color:brown;"><i class="fas fa-camera-retro"></i> Gallery</a></li>
          <li><a href="sponsor.php"style="color:brown;"><i class="fas fa-dollar-sign"></i> Sponsors</a></li>
          <li><a href="Developers.php"style="color:brown;"><i class="fas fa-code"></i> Developers</a></li>		 
		 <li><a href="#footer"style="color:brown;"><i class="far fa-envelope"></i> Contact Us</a></li>
		   
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section>
   
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->


    <!--==========================
      Speakers Section
    ============================-->
   
    <!--==========================
      F.A.Q Section
    ============================-->
    


  <!--==========================
    Footer
  ============================-->

  
</body>

</html>

<?php include_once('functions.php');
$config['base_url1'] = 'http://localhost/cont/';
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Event Calendar by CodexWorld</title>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</head>
<body>
	 <nav class="top-header">
          <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="Add_Contact">Add Contact</a></li>
              <li><a href="Home">Home</a></li>
              </ul>
            </div>
        </nav>


         <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="http://localhost/cont/html/images/logo.png" class=responsive-img"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="Add_Contact">Add Contact</a></li>
              <li><a href="Home">Home</a></li>
               <li><a href="calendar">calender</a></li>
              <li><a href="UserLogin/user_logout">LogOut</a></li>
            </ul>
          </div>
        </nav>

<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>

</body>
</html>
<style type="text/css">
	nav.top-header {
    height: 40px !important;
    position: relative;
    line-height: 40px !important;
    background: #746382;
    box-shadow: none;
}

/*global stysheet*/

nav.top-header {
    height: 40px !important;
    position: relative;
    line-height: 40px !important;
    background: #746382;
    box-shadow: none;
}

/*Navigation pagination*/
button#example_previous {
    background: #35174c;
    padding: 7.5px 10px !important;
    border: none;
    border-bottom-left-radius: 15px;
    border-top-left-radius: 15px;
    font-weight: 500;
}
button#example_next
{ 
    background: #35174c;
    padding: 7.5px 10px !important;
    border: none;
    border-bottom-right-radius: 15px;
    border-top-right-radius: 15px;
    font-weight: 500;
}
button.mdl-button.mdl-button--raised.mdl-button--colored{
    background: #35174c;
    padding: 7.5px 10px !important;
    font-weight: 500;
    border: none;
    color: ghostwhite;
}
button.mdl-button{
    background: #35174c;
    padding: 7.5px 10px !important;
    font-weight: 500;
    border: none;
    color:#f8f8ff65;   
}

div#example_length label {
    display: block !important;
    width: max-content;
}
select {
    display: block !important;
}
div#example_filter label {
    position: relative;
    float: right;
    top: 0;
    margin-top: -50px;
}
input.form-control.input-sm {
    width: auto !important;
    position: relative;
    right: 0;
    float: right;
}


.sidenav-overlay{
   z-index:995 !important;
}

.carousel-item h2 {
    display: block;
    color: #b43abc;
    position: relative;
    top: 0;
    right: 0;
    z-index: 1000;
}
.carousel .carousel-item>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.textBox {
    position: absolute;
    text-align: justify;
    right: 250px;
    top: 25px;
}
.sldr-logo {
    position: absolute;
    bottom: 2%;
    right: 25%;
}
.sldr-logo img{
    z-index: 8;
    min-width: 250px;
}
.textBox h2 {
   font-family: 'Titan One', cursive  !important;
    z-index: 8;
    min-width: 363px;
    max-width: 363px;
    white-space: nowrap;
    font-size: 35px !important;
    line-height: 40px !important;
    font-weight: 800 !important;
    color: rgb(165, 51, 173);
    letter-spacing: 0px;
    font-family: "Open Sans";
    visibility: ;
    transition: none;
    text-align: inherit;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
    text-shadow: 0px 1px 2px #00000050;
}

/*slide 2*/
.purple-box {
    background: linear-gradient(0deg,#800080,#800080) !important;
}
.purple-box h2{
 font-family: 'Titan One', cursive  !important;
      z-index: 5;
    white-space: nowrap;
    font-size: 70px !important;
    color: rgba(255, 255, 255, 0.95);
    letter-spacing: 0px;
    line-height: 50px !important;
    font-family: "Open Sans";
    font-weight: 900 !important;
}

.textBox3 {
    position: absolute;
    bottom: 0;
    /*right: 300px;*/
    left: 300px;
}

.textBox3 h2 {
font-family: 'Titan One', cursive  !important;
   z-index: 8;
    min-width: 363px;
    max-width: 363px;
    white-space: nowrap;
    font-size: 35px !important;
    line-height: 40px !important;
    font-weight: 800 !important;
    color: rgb(165, 51, 173);
    letter-spacing: 0px;
    font-family: "Open Sans";
    visibility: ;
    transition: none;
    text-align: inherit;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
    text-shadow: 0px 1px 2px #00000050;
}

.textBox4{
    position: absolute;
    text-align: justify;
    right: 250px;
    top: 25px;
}
.textBox4 h2{
     z-index: 8;
    min-width: 363px;
    max-width: 363px;
    white-space: nowrap;
    font-size: 35px !important;
    line-height: 40px !important;
    font-weight: 800 !important;
    color: ghostwhite;
    letter-spacing: 0px;
    font-family: "Open Sans";
    visibility: ;
    transition: none;
    text-align: inherit;
    border-width: 0px;
    margin: 0px;
    padding: 0px;
    opacity: 1;
    transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
    transform-origin: 50% 50% 0px;
    text-shadow: 0px 1px 2px #00000050;
}
.titleBox h4 {
    color: #0079b5;
    margin-bottom: 50px;
    font-size: 22px;
    font-weight: bold;
    text-shadow: 0px 1px 2px #00000082 !important;
}
body{
    margin: 0;
    font-family: "PT Sans",sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 400;
    letter-spacing: 1px;
    color: #5f5f5f;
}
/*NavBar*/
nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
    height: 80px !important;
    line-height: 75px !important;
    
}
.Disclaimer-box {
    color: #aaa;
    text-align: center;
    overflow: hidden;
    max-width: 1280px;
    margin: 0 auto;
}
nav {
    color: #fff;
    /*background-color: #492763 !important;*/
    background: linear-gradient(0deg,#270c3c,#492763);
    width: 100%;
    height: 75px;
    
}
nav .nav-wrapper {
    position: relative;
    height: 100%;
    max-width: 1280px;
    margin: 0 auto;
}
nav .dropdown-content {
    margin-top: 0px !important;
    position: absolute;
    overflow: hidden;
    top: 80px !important;
}
i.fa.fa-shopping-bag {
    color: #fff;
    text-shadow: 0px 3px 10px #28022b8f;
}
span.badge-box {
    position: relative;
    padding: 5px;
   color: #fff;
    border-radius: 50px;
    width: 35px;
    height: 35px;
    border: 1px solid #5a145f;
    top: -15px;
    display: inline-block;
    line-height: initial;
    text-align: center;
    background: linear-gradient(1deg,#661b6b,#b33cbb);
    /* box-shadow: 0px 3px 7px #00000070; */
}

/*navigation page*/

.fixed-header {
  position: fixed;
  top:0; left:0;
  z-index: 5;
}
.relative-header{
  position: relative;
}

.page-footer {
    padding-top: 20px;
    color: #fff;
    background-color: #402059 !important;
}
.page-footer .footer-copyright{
    background-color: rgba(0, 0, 0, 0.20);
}


.main-box {
    position: relative;
    min-height: 500px;
    display: block;
    overflow: hidden;
    max-width: 1280px;
    margin: 0 auto;
}
.max-width {
    max-width: 1280px;
    margin: 0 auto;
    padding: 15px;
    position: relative;
}

a.brand-logo img {
    height: 80px;
    padding: 10px;
}
</style>
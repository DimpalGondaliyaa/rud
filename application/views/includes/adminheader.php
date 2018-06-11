<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>html/images/favicon.ico" type="image/x-icon"/>
    <title><?php echo $pageTitle; ?></title>
    
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
   
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- forn-awesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    
    <!-- oogle font -->
    <link href="https://fonts.googleapis.com/css?family=Aclonica|PT+Sans" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <!-- <script src="<?php echo base_url(); ?>html/js/materialize.js"></script> -->
    
   
    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

   <!-- Data Table --> 


   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.4/css/dataTables.responsive.css">
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.material.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
       


    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>?<?php echo time(); ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <?php if($this->session->userdata('email')!='' | $this->session->userdata('admin')!=''){ ?>

    <header>
<!--===============================nav 1======================-->
        <nav class="navone">
            <div class="nav-wrapper navonewapp">
              <ul id="nav-mobile" class="hide-on-med-and-down navoneul">
                <li><a href="#">Logged In As: <?= $this->session->userdata('email'); ?></a></li>
                <li><a href="#">Recent Pages</a></li>
                <li><a href="#">Logout</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">My Settings</a></li>
                <li><a href="#">Support</a></li>
              </ul>
            </div>
          </nav>

<style type="text/css">
nav.navone {
    background: #213F66 !important;
    height: 30px !important;
    line-height: 28px !important;
    overflow: hidden;
}
.navone ul{
  left: 25px;
  position: relative;
}
.navoneul li a {
    font-size: 11px;
    text-transform: capitalize;
    line-height: 25px;
    font-weight: 700;
    font-family: Arial, sans-serif;
    margin: 0 auto;
    padding: 0px 5px;
    letter-spacing: 0;
    color: #ffffffdb;
}
.navoneul li a:hover {
    color: #ffffff8a;
    background: #00000029;
}
</style>          
<!--=============================== end nav 1 ======================-->

<!--=============================== nav 2 ======================-->
<nav class="navtwo">
  <a href="#!"><img src="<?php echo base_url(); ?>html/images/l.png" style="top: 15px;
    position: relative;
    left: 9px;"></a>
  <div class="nav-wrapper navwaptwo">
      <ul id="nav-mobile" class="hide-on-med-and-down nav2ul">
        <li><a href="<?php echo base_url(); ?>Home" class="<?php if($this->uri->segment(1)=='Home'){?> active <?php } ?>"><img src="<?php echo base_url(); ?>html/images/dash-icon2.png" class="responsive-img"></a></li>
         <li><a href="<?php echo base_url(); ?>Guidelines" class="<?php if($this->uri->segment(1)=='Guidelines'){?> active <?php } ?>">Guidelines</a></li>

          <li><a href="<?php echo base_url(); ?>Home" class="<?php if($this->uri->segment(1)=='Home'){?> active <?php } ?>">Contact</a></li>
          <li><a href="<?php echo base_url(); ?>Calendar" class="<?php if($this->uri->segment(1)=='Calendar'){?> active <?php } ?>">calender</a></li>
          <li><a href="<?php echo base_url(); ?>Docs" class="<?php if($this->uri->segment(1)=='Docs' || $this->uri->segment(1)=='uplode_pdf') { ?> active <?php } ?>">Docs</a></li>
          <li><a href="<?php echo base_url(); ?>UploadFile" class="<?php if($this->uri->segment(1)=='UploadFile'){?> active <?php } ?>">Files</a></li>
           <li><a href="<?php echo base_url(); ?>AssignUser" class="<?php if($this->uri->segment(1)=='AssignUser'){?> active <?php } ?>">Admin</a></li>
      </ul>
  </div>
</nav>
<style type="text/css">
nav.navtwo {
  box-shadow: none;
    background: #fff;
    width: 100% !important;
    height: auto !important;
    padding: 0px 10px;
}
.nav-wrapper.navwaptwo {
    width: 100% !important;
    margin: 0px 15px;
    height: auto;
    overflow: hidden;
    position: relative;
    bottom: 0;
}
/*.nav-wrapper.navwaptwo {
    width:  100% !important;
    margin:  0px 15px;
}*/
.nav2ul li a {
    background: #323232;
    margin: 0px 1px;
    border-radius: 5px;
    z-index: 1;
    position: relative;
    font-size: 12px;
    font-family: Arial, sans-serif;
    line-height: 35px !important;
    border-top: 5px solid #323232;
}
.nav2ul li a:hover {
    background: #2e5890;
    color: #fff;
    z-index: 1;
    position: relative;
    border-top: 5px solid #2e5890;
    font-family: Arial, sans-serif;
}
.nav2ul li a.active{
  background-color: rgb(221, 221, 221);
  color: #2e5890;
  border-top: 5px solid #213F66;
}
nav ul a {
  padding: 0 10px;
}

</style>
<!--=============================== end nav 2 ======================-->        
        
  
    <!--  
        <nav>
          <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>home" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" class=responsive-img"></a>
             <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
              <li><a href="<?php echo base_url(); ?>AssignUser">Assign</a></li>
              <li><a href="<?php echo base_url(); ?>docs">docs</a></li>
              <li><a href="<?php echo base_url(); ?>UploadFile">Upload File</a></li>
               <li><a href="<?php echo base_url(); ?>Add_Contact">Add Contact</a></li>
              <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
              <li><a href="<?php echo base_url(); ?>CreateCompany">Create Company</a></li>
              <?php if($this->session->userdata("email")!=''){ ?>
              <li><a href="<?php echo base_url(); ?>Adminlogin/user_logout">LogOut</a></li>
              <?php } ?>
            </ul>
          </div>
        </nav> -->
    </header>
  <?php } else { } ?>
</head>
<body>



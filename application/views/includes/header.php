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
    <header>
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" class=responsive-img"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>Add_Contact">Add Contact</a></li>
              <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
               <li><a href="<?php echo base_url(); ?>c">calender</a></li>
              <?php if($this->session->userdata("email")!=''){ ?>
              <li><a href="<?php echo base_url(); ?>UserLogin/user_logout">LogOut</a></li>
              <?php } ?>
            </ul>
          </div>
        </nav>
    </header>
</head>
<body>
<style type="text/css">
.admnin-brand-logo h5 {
    font-family: 'Aclonica', sans-serif;
    text-shadow: 0px 2px 5px #0009;
    color: ghostwhite;
    line-height: 45px;
}
</style>
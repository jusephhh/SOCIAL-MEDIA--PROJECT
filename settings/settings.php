<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Settings</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

 
  <?php include "links.php"; ?>

  <link rel="icon" href="settings.png" type="image/x-icon" />
<link rel="shortcut icon" href="settings.png" type="image/x-icon" />

  <style>
    .navbar .navbar-nav .nav-link:not(.btn) i.fa{
      font-size: 18px;
      position: relative;
      top: 3px;
      text-align: center;
      width: 21px;
    }
  </style>

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <!-- End Navbar -->

<!-- content     -->
<div class="wrapper">
 <div class="page-header clear-filter">
  <div class="container">
   <div class="brand">
    <h1 id="settings">Settings</h1>
     <div class="navigation">   
      <div class="row">
       <div class="col-xs-12 col-md-3 col-lg-3 left_side">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
         <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General</a>
         <a class="nav-link" id="v-pills-privacy-tab" data-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="false">Privacy</a>
        </div>
       </div>
       <div class="col-9 right_side">
        <div class="tab-content" id="v-pills-tabContent">
         <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <h3 id="header_left">General Account Settings</h3>
          <hr><div id="to_left">Name</div><hr>
          <div id="to_left">Username</div><hr>
          <div id="to_left">Password</div><hr>
          <div id="to_left">Contact</div><hr>
          <div id="to_left">Manage Account</div><hr>
         </div>
         <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                <h3 id="header_left">Privacy Settings and Tools</h3>  
                <hr><div id="to_left">Your Activity</div><hr>
                <div id="to_left">How people can find <br> you and contact you</div><hr>
              </div>
        </div>
       </div>
       </div>
    </div>  
   </div>
  </div>
 </div>
<!-- content -->


<div class="main">
    <?php include "footer.php"; ?>
   </div>
</body>

<?php include "javascripts.php"; ?>

</html>

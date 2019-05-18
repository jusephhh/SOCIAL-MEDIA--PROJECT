<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Profile</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

<?php include "links.php"; ?>

<link rel="icon" href="profile.png" type="image/x-icon" />
<link rel="shortcut icon" href="profile.png" type="image/x-icon" />

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
    
    <?php include "navbar.php"; ?>
    

    <div class="wrapper">
        <div class="page-header page-header-small clear-filter">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/cover.jpg');">
            </div>
            <div class="container">
            <div class="row">
               <div class="content-left brand col-md-4">
                <img class="n-logo" src=img/profile.jpg alt="">
                <h2 class="h1-seo">Bill Gates</h2>
                <h3>I'm Just a billionnaire</h3>
               </div>
              </div>
            </div>
        </div>

        <div class="main">

    <div class="section">
      
      <?php include "navtabs.php"; ?>

      </div>
      
            <?php include "footer.php"; ?>

    </div>
</body>


<?php include "javascripts.php"; ?>

</html>

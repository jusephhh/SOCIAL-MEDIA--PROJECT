<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Log In</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <?php include "links.php"; ?>

  <link rel="icon" href="profilepic.png" type="image/x-icon" />
  <link rel="shortcut icon" href="profilepic.png" type="image/x-icon" />

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
    <!-- content -->
    <div class="wrapper">
     <div class="page-header clear-filter">
      <div class="page-header-image" data-parallax="true" style="background-color: rgb(255, 255, 255);"></div>
      <h1 id="sign_in">Sign In</h1>

        <?php include "logincontents.php"; ?>

      </div>
     </div>
    <!-- content -->
    <!-- footer -->
    <div class="main">

      <?php include "footer.php"; ?>

    </div>
</body>


 <?php include "javascripts.php"; ?>

</html>

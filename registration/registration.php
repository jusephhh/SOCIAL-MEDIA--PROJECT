<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Registration</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <?php include "links.php"; ?>


  <!-- logo in title -->
  <link rel="icon" href="create.png" type="image/x-icon" />
  <link rel="shortcut icon" href="create.png" type="image/x-icon" />
  <!-- logo in title -->

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
<!-- REGISTRATION FORM -->
    <div class="wrapper">
     <div class="page-header clear-filter">
      <h1 id="registration">Registration</h1>
        
        <?php include "registrationformcontent.php"; ?>
        
     </div>
    </div>
    
<!-- REGISTRATION FORM -->






<!-- Footer -->

    <div class="main">
     

    <?php include "footer.php"; ?>

    </div>

<!-- Footer     -->
</body>

<!--   Core JS Files   -->

<?php include "javascripts.php"; ?>

</html>

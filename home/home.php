<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Home</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

 <?php include "links.php"; ?>

 <link rel="icon" href="Home.png" type="image/x-icon" />
<link rel="shortcut icon" href="Home.png" type="image/x-icon" />

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
        <div class="main">
            <div class="section section-basic">
              <h1 id="header_home">Home</h1>
                <div class="container">
                    <div class="row">
                        

                        <div class="content-left brand col-md-8">
                            <div class="card w-75">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-primary">Button</a>
                                  <a href="#" class="btn btn-primary">Button</a>
                                  <a href="#" class="btn btn-primary">Button</a>
                                </div>
                              </div>
                              <div class="card mb-3 w-75">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                  <a href="#" class="btn btn-primary">Button</a>
                                  <a href="#" class="btn btn-primary">Button</a>
                                  <a href="#" class="btn btn-primary">Button</a>
                                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                        </div>
                        

                        <div class="content-right brand col-md-3">
                          <img class="n-logo" src=profile.jpg alt="">
                          <h2 class="h1-seo">Bill Gates</h2>
                          <h3>I'm Just a billionnaire</h3>
                        </div> 
                            

                        
                    </div>
                </div>
            </div>

      
    <?php include "footer.php"; ?>


        </div>
    </div> 
</body>

<?php include "javascripts.php"; ?>


</html>

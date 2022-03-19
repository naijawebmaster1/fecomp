<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (isset($_SESSION['loggedin'])) {
	header('Location: ../Dashboard/pages/tables/data.php');
	exit;
}
?>
<?php include 'authController.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <title></title>
<meta name="description" content="Login">
<meta name="author" content="">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i' type='text/css'>

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="https://demo.harnishdesign.net/html/oxyy/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://demo.harnishdesign.net/html/oxyy/vendor/font-awesome/css/all.min.css" />
<link rel="stylesheet" type="text/css" href="https://demo.harnishdesign.net/html/oxyy/css/stylesheet.css" />
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#" />





    <link rel="icon" href="https://demo.harnishdesign.net/html/oxyy/images/favicon.png" sizes="32x32" />
    <link rel="icon" href="https://demo.harnishdesign.net/html/oxyy/images/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/sites/14/2018/03/general-hospital-favicon.png" />
    <meta name="msapplication-TileImage"
        content="https://demo.harnishdesign.net/html/oxyy/images/favicon.png" />



</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register h-100 d-flex flex-column bg-transparent">
  <div class="container my-auto">
    <div class="row no-gutters h-100">
      <div class="col-11 col-sm-9 col-md-7 col-lg-5 col-xl-4 m-auto py-5">
        <div class="logo text-center mb-2"> <a href="" title="Oxyy"></a> </div>
        <p class="lead text-center mb-3">Hello Fecomp Admin nice to see you again!</p>
        <form id="loginForm" method="post" >
        <?php if (count($errors) > 0): ?>
          <div class="alert alert-danger" style="">
              <?php foreach ($errors as $error): ?>
              <li>
                  <?php echo $error; ?>
              </li>
              <?php endforeach;?>
          </div>
          <?php endif;?>
          <div class="vertical-input-group">
            <div class="input-group">
              <input type="email" name="email"class="form-control" id="emailAddress" required placeholder="Email or Username">
            </div>
            <div class="input-group">
              <input type="password" name="password" name="login-btn" class="form-control" id="loginPassword" required placeholder="Password">
            </div>
          </div>
          <button class="btn btn-primary btn-block shadow-none my-4" type="submit" name="login-btn">Login</button>
        </form>
        
      </div>
    </div>
  </div>
  <div class="container-fluid bg-white py-2">
    <p class="text-center text-2 text-muted mb-0">Copyright © 2021 <a href="">Fecomp</a>. All Rights Reserved.</p>
  </div>
</div>

<!-- Styles Switcher -->

<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="https://demo.harnishdesign.net/html/oxyy/vendor/jquery/jquery.min.js"></script> 
<script src="https://demo.harnishdesign.net/html/oxyy/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="https://demo.harnishdesign.net/html/oxyy/js/switcher.min.js"></script> 
<script src="https://demo.harnishdesign.net/html/oxyy/js/theme.js"></script>
</body>

</html>
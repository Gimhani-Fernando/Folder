<?php
session_start();

include('bin/config.php');
if(isset($_POST['login']))

{

$username=$_POST['txtUsername'];
$password=$_POST['txtPasswd'];

$sql ="SELECT * FROM login WHERE username='".$username."' and password='".md5($password)."'";
echo $sql;
$stmt = $conn->prepare($sql);


$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);

if($stmt->rowCount() > 0)
{
  foreach($results as $user){
 //$arole=$user["role"];
var_dump($user);
$_SESSION['loggedusername']=$user->username;
$_SESSION["loggeduserrole"]=$user->role;
}


echo "<script type='text/javascript'> document.location = 'details.php'; </script>";
} else{
  
 echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	 <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>

</style>

</head>

<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="login.php" class="main-form needs-validation" method="post" enctype="multipart/form-data">
         

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="txtUsername" class="form-control form-control-lg"
              placeholder="Enter a valid username"  name="txtUsername"/>
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="txtPasswd" class="form-control form-control-lg"
              placeholder="Enter password"  name="txtPasswd"/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
           

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login">Login</button>
           
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. SETU,Faculty of Science, University of Kelaniya, Sri Lanka, All rights reserved.
    </div>
    <!-- Copyright -->
							
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
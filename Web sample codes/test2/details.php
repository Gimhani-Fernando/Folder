<?php
    session_start();
    if(isset($_SESSION['loggedusername'])){
        $loggeduser=$_SESSION['loggedusername'];
        //echo $loggeduser;
    

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

        <h1>hi, <?php echo $loggeduser ?> Welcome</h1>

        you have loged as: <?php echo $loggeduser ?><br>

        <a href="logout.php">logout</a>

        <form method="POST" action="">
    Select Your Country 
    <select name="country" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
        <option value="india">India</option>
        <option value="us">Us</option>
        <option value="europe">Europe</option>
    </select>
</form>
</body>

</html>
<?php
}else{
    header("Location: login.php");

}


?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  body{
    background-image: url(c2.jpg);
    background-attachment:fixed;
    background-size:cover;
  }
  </style>
</head>
<body>
 
  
<div class="container">
 

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   <center>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <label><a href="add2.php">Home</a> </label>
      <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
</center>
    <?php endif ?>
    
</div>
		
    <div class="container">
      
    </div>
</body>
<style type="text/css">
  body{
    background-image: url(c3.jpg);
    background-attachment:fixed;
    background-size:cover;
   

  }
</html>
<?php 
   

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
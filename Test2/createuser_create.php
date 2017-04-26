<?php
	require_once('config.php');

	include('form_check.php');

	//INSERT HTML + CSS
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Spasserspirer - Spasserer all the way - Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/loginpage.css" rel="stylesheet">

</head>

<body>
<!-- NAVIGATION BAR -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Mynavbar"> 
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="index.html"><img class="navbar-img-logo" src="img/logo.png"></a>
  </div>
  <div class="collapse navbar-collapse" id="#Mynavbar">
    <ul class="nav navbar-nav navbar-right"> 
      <li><a href="index.html">Home</a></li>
      <li><a href="aboutus.html">Om Os</a></li>
      <li><a href="sustainability.html">Bæredygtighed</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="login.html"><span class="glyphicon">&#xe008;</span>    <strong>Login</strong></a></li>
    </ul>
    
  </div>
</div>

</nav>
 
<nav class="navbar navbar-default" id="menu">
  <div class="container-fluid">
  <div class="navbar-header"><a class="navbar-brand" href="index.html"><img class="navbar-img-logo" src="img/logo.png"></a>
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Mynavbar2"> 
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  </div>
  <div class="collapse navbar-collapse" id="#Mynavbar2">
    <ul class="nav navbar-nav navbar-right"> 
      <li><a href="index.html">Home</a></li>
      <li><a href="aboutus.html">Om Os</a></li>
      <li><a href="sustainability.html">Bæredygtighed</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="login.html"><span class="glyphicon">&#xe008;</span>    <strong>Login</strong></a></li>
    </ul>
    
  </div>
</div>
</nav>
<!-- NAVIGATION BAR --> 


<div class="login-page">
  <div class="form">
   <h2>Opret Bruger</h2>
    <form action="" method="post" class="login-form">
      <label class="pull-left"><b>CVR-nummer</b></label>
      	<input type="number" placeholder="CVR-nummer" name="cvr" id="cvr" required>
      <label class="pull-left"><b>Email</b></B></label>
      	<input type="email" placeholder="Enter Email" name="email" id="email" required>
      <label class="pull-left"><b>Gentag email</b></B></label>
      	<input type="email" placeholder="Gentag Email" name="repeat_email" required>
      <label class="pull-left"><b>Password</b></label>
      	<input type="password" placeholder="Enter password" name="psw" id="psw" required>
      <label class="pull-left"><b>Gentag Password</b></label>
      	<input type="password" placeholder="Gentag password" name="repeat_psw" required>
      	<input name="submitted" class="btn-block btn-login" type="submit" value="Submit" id="submitted">

<!--<a class="btn-block btn-login" name="submitted" type="submit" href="createuser_create.php">Opret Bruger </a>-->
    
    </form>
  </div>
</div>
<!-- href="adminindex.html" -->

    <!-- FOOTERFOOT -->
      <div class="footerfoot">
        <center>
        <p class="footerfoot-p">  This website and all of its contents is for educational purposes only. A219B, 2. Semester, Interaktionsdesign, Aalborg Universitet &copy; 2017</p>
        </center>
      </div>
    <!-- FOOTERFOOT -->


    <!-- Loginpage.js -->
    <script type="js/loginpage.js"></script>

	<!-- jQuery (necessary for Bootstraps JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>';


//check fail

  //Print Errors
  if (isset($_REQUEST['submitted'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
   else{
  }
}
//End of errors array


//ADD USER FUNCTION

if( $_POST['cvr'] && $_POST['email'] && $_POST['psw'] )
{
    $mysqli = mysql_connect($hostnamedb, $usernamedb, $passworddb, $databasedb);
 
  if (!$mysqli)
  {
    die('Could not connect: ' . mysql_error());
  }
 
  mysql_select_db("turmz_grimtsager", $mysqli);
 

  $users_name = $_POST['cvr'];
  $users_email = $_POST['email'];
  $users_psw = $_POST['psw'];
 
  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_psw = mysql_real_escape_string($users_psw);
 
  $query = "INSERT INTO users (`cvr`, `email`, `psw`) VALUES('$users_name', '$users_email', '$users_psw');";
 
 $result = mysql_query($query);

 if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}




 // mysql_free_result($result);

 // mysql_query($query);
 
  mysql_close($mysqli);
}
else{
}
?>
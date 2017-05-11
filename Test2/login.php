<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Grimtsager - Vi giver de grimme en chance til :: Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="css/loginpage.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


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
      <li><a href="index.html">Forside</a></li>
      <li><a href="aboutus.html">Om Os</a></li>
      <li><a href="sustainability.html">Bæredygtighed</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="login.php"><span class="glyphicon">&#xe008;</span>    <strong>Login</strong></a></li>
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
      <li><a href="index.html">Forside</a></li>
      <li><a href="aboutus.html">Om Os</a></li>
      <li><a href="sustainability.html">Bæredygtighed</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="login.php"><span class="glyphicon">&#xe008;</span>    <strong>Login</strong></a></li>
    </ul>
    
  </div>
</div>
</nav>
<!-- NAVIGATION BAR --> 


<!--Login Form-->
<div class="login-page">
  <div class="form">

  <a href="index.html"><img src="img/logo.png" height="60%" width="60%"></a>

    <form action="check_login.php" class="login-form" method="POST">
      <br>
      <input id="username" name="username" type="text" placeholder="CVR-nummer"/>
      <input id="password" name="password" type="password" placeholder="Adgangskode"/>
		<button id="submit-login" name="submit-login" class="btn btn-primary btn-lg btn-login">Log ind </button>
          <p class="message">Ikke registeret?</p>
      	<button type="button" class="btn btn-primary btn-lg btn-create" data-toggle="modal" data-target="#myModal">
      		Opret Bruger
      	</button>
          <p class="message"><a href="404.html">Glemt adgangskode?</a></p>        
      
    </form>
  </div>
</div>

<!--Opret bruger Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
             <a class="btn btn-close pull-right" data-dismiss="modal" href="#">
  			 <i class="fa fa-times fa-2x"></i> </a>

      <div class="modal-header">
       <br>
        <h4 class="modal-title" id="myModalLabel">Opret Bruger</h4>
      </div>
      <form class="create-form" action="" method="POST">
      <div class="modal-body">
      			<label class="pull-left"><b>CVR-nummer</b></label>
      				<input id="cvr"type="number" placeholder="CVR-nummer" name="cvr" required>
			  	<label class="pull-left"><b>Email</b></label>
					<input id="email" type="email" placeholder="Enter Email" name="email" required>
			 	<label class="pull-left"><b>Adgangskode</b></label>
					<input type="password" id="psw" placeholder="Enter password" name="psw" required>
			  	<label class="pull-left"><b>Gentag Adgangskode</b></label>
					<input type="password" id="confirm_password" placeholder="Gentag password" name="repeat_psw" required>
					
	  		<div id="psw_info">
	  			<h4>Din adgangskode skal overholde følgende krav:</h4>
	  			<ul>
	  				<li id="letter" class="invalid">Indeholde mindst <strong>et bogstav</strong></li>
	  				<li id="capital" class="invalid">Indeholde <strong>1 stort bogstav</strong></li>
	  				<li id="length" class="invalid">Være mindst <strong>8 tegn</strong></li>
	  				<li id="confirm" class="invalid"> Adgangskoderne skal være <strong>ens</strong></li>
	  			</ul>
	  		</div>
      </div>
      <div class="modal-footer">
      	  <br>
      <input type="submit" id="submitted" name="submitted" class="btn btn-primary btn-login" value="Opret Bruger" value="Opret Bruger">
<!-- 		  <input type="submit" class="btn btn-primary btn-login" value="Opret Bruger"> -->
         <br>
      </div>
      </form>
    </div>
  </div>
</div>

    <!-- FOOTERFOOT -->
      <div class="footerfoot">
        <center>
        <p class="footerfoot-p1">  This website and all of its contents are for educational purposes only. A219B, 2. Semester, Interaktionsdesign, Aalborg Universitet &copy; 2017</p>
        </center>
      </div>
    <!-- FOOTERFOOT -->


    <!-- Loginpage.js -->
    <script src="js/loginpage.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
	
	<!-- Vores egen flotte Javascript side uhhh -->
	<script src="js/custom_script.js"></script>
	
  </body>
</html>

<?php
  require_once('config.php');
  require_once('check_login.php');

///////////// </LOGIN> ///////////// 

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

  $users_psw = crypt($users_psw);
 
  $query = "INSERT INTO users (`cvr`, `email`, `psw`) VALUES('$users_name', '$users_email', '$users_psw');";
 
 $result = mysql_query($query);

 if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
 
  mysql_close($mysqli);
}
else{
}

?>
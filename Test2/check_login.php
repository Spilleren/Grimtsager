<?php
  require_once('config.php');

// include('form_check.php');

///////////// <LOGIN> ///////////// 
if (isset($_POST['submit-login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $mysqli = new mysqli($hostnamedb, $usernamedb, $passworddb, $databasedb);

  if (!$mysqli)
  {
    die('Could not connect: ' . mysqli_error());
  var_dump($mysqli);
  }
  

  //mysql_select_db("turmz_grimtsager", $mysqli1);

// Check if username/password are set and if they are not empty strings
 if((isset($_POST['username']) && $_POST["username"] != "")
  && (isset($_POST['password']) && $_POST["password"] != "")){

  $stmt = $mysqli->prepare('SELECT `cvr`,`psw` FROM `users` WHERE `cvr`= ? LIMIT 1')
                    or die('Could not connect: ' . mysqli_error() . var_dump($mysqli));
  
//Tann fyrsti parameturin er typa. Tvs. s=string, i=integer/tal. Kann setast saman til t.d. "sii"
  $stmt->bind_param('s', $_POST['username']);

//Koyrur sQl'ið.
  $stmt->execute();

//Resultati er í tabell. Goym fyrsta svarið í $username, og næsta svarið í $password
  $stmt->bind_result($username, $password);
  $stmt->store_result();
  $stmt->fetch();

//If $rows has found a user, it will execute. If not then "Angiv brugernavn og password"
  $rows = $stmt->num_rows;

//Tú endar samtaluna við dátabásan, og hevur nú tjans til at seta nýggjan fyrispurning.
  $stmt->close();

//Kannar frá variablinum omanfyri, um hann er settur til 1 ella 0. Harvið kann staðfestast um brúkarin bleiv funnin ella ikki.
  if($rows == 0){
    echo "Brugernavn findes ikke";

//Loyniorðið er goymt í md5. Hetta fyri trygleika. Tað verður scrambled á netinum.
//Taka input frá brúkarinum og scrambla tað, og tjekka dátabasan.
  }elseif(md5($_POST["password"]) == $password){
  //redirect to the 'thank you' page
  header('Location: adminindex.html');

  }else{
    echo "Forkert password";
  }
//Hoyrur til omanfyri.
}else{
  echo "Angiv brugernavn og password";
}
}
?>
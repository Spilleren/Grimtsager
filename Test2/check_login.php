<?php
  require_once('config.php');

// include('form_check.php');

///////////// <LOGIN> ///////////// 
if (isset($_POST['submit-login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $mysqli = mysql_connect($hostnamedb, $usernamedb, $passworddb, $databasedb);
  echo "yolo";
  if (!$mysqli)
  {
    die('Could not connect: ' . mysql_error());
  echo "yolo";
  }
  

  //mysql_select_db("turmz_grimtsager", $mysqli1);

// Check if username/password are set and if they are not empty strings
 if((isset($_POST['username']) && $_POST["username"] != "")
  && (isset($_POST['password']) && $_POST["password"] != "")){
  echo "yolo";

  $stmt = $mysqli->prepare('SELECT `cvr` FROM `users` WHERE `cvr`= ?')
                    or die('Could not connect: ' . mysql_error() . var_dump($mysqli));

  echo "yolo";
  
//Tann fyrsti parameturin er typa. Tvs. s=string, i=integer/tal. Kann setast saman til t.d. "sii"
  $stmt->bind_param('s', $_POST['username']);
  echo "Niggers1";
          var_dump($mysqli);
//Koyrur sQl'ið.
  $stmt->execute();
  echo "Niggers2";
          var_dump($mysqli);
//Resultati er í tabell. Goym fyrsta svarið í $username, og næsta svarið í $password
  $stmt->bind_result($username, $password);
  $stmt->store_result();
  $stmt->fetch();
  echo "Niggers3";
          var_dump($mysqli);
//If $rows has found a user, it will execute. If not then "Angiv brugernavn og password"
  $rows = $stmt->num_rows;
  echo "Niggers4";
          var_dump($mysqli);
//Tú endar samtaluna við dátabásan, og hevur nú tjans til at seta nýggjan fyrispurning.
  $stmt->close();
  echo "Niggers5";
          var_dump($mysqli);
//Kannar frá variablinum omanfyri, um hann er settur til 1 ella 0. Harvið kann staðfestast um brúkarin bleiv funnin ella ikki.
  if($rows == 0){
    echo "Brugernavn findes ikke";
  echo "Niggers6";
          var_dump($mysqli);
//Loyniorðið er goymt í md5. Hetta fyri trygleika. Tað verður scrambled á netinum.
//Taka input frá brúkarinum og scrambla tað, og tjekka dátabasan.
  }elseif(md5($_POST["password"]) == $password){
    echo "Velkommen";
      echo "Niggers7";
        var_dump($mysqli);
  }else{
    echo "Forkert password";
    var_dump($mysqli);
  }
//Hoyrur til omanfyri.
}else{
  echo "Angiv brugernavn og password";
    echo "Niggers9";
      var_dump($mysqli);
}
}
?>
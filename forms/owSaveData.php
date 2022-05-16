<?php
 $con = mysqli_connect("IP", "root", "password", "esportsDB"); //Connecting goes as follows: IP address, username, password, database *IP AND PASSWORD CHANGED
    if (mysqli_connect_errno())
  {
      echo "Failed to connect: " + getMessage(); //If the connection fails, throw an error message
  }

  //Player info
  $mp1 = $_POST["mountPlayer1"]; 
  $mp2 = $_POST["mountPlayer2"]; 
  $mp3 = $_POST["mountPlayer3"]; 
  $mp4 = $_POST["mountPlayer4"]; 
  $mp5 = $_POST["mountPlayer5"];
  $mp6 = $_POST["mountPlayer6"];

  $mountChar1 = $_POST["mountChar1"];
  $mountChar2 = $_POST["mountChar2"];
  $mountChar3 = $_POST["mountChar3"];
  $mountChar4 = $_POST["mountChar4"];
  $mountChar5 = $_POST["mountChar5"];
  $mountChar6 = $_POST["mountChar6"];

  $kills1 = $_POST["kills1"];
  $kills2 = $_POST["kills2"];
  $kills3 = $_POST["kills3"];
  $kills4 = $_POST["kills4"]; //Very important
  $kills5 = $_POST["kills5"];
  $kills6 = $_POST["kills6"];

  $deaths1 = $_POST["deaths1"];
  $deaths2 = $_POST["deaths2"];
  $deaths3 = $_POST["deaths3"];
  $deaths4 = $_POST["deaths4"];
  $deaths5 = $_POST["deaths5"];
  $deaths6 = $_POST["deaths6"];

  $assists1 = $_POST["assists1"];
  $assists2 = $_POST["assists2"];
  $assists3 = $_POST["assists3"];
  $assists4 = $_POST["assists4"];
  $assists5 = $_POST["assists5"]; //Very important
  $assists6 = $_POST["assists6"];

  $damage1 = $_POST["totalDamage1"];
  $damage2 = $_POST["totalDamage2"];
  $damage3 = $_POST["totalDamage3"];
  $damage4 = $_POST["totalDamage4"];
  $damage5 = $_POST["totalDamage5"];
  $damage6 = $_POST["totalDamage6"];

   $win;

  if($_POST['yes1'] == 'Yes' || $_POST['yes1'] == 'yes')
       $win = $_POST['Yes']; //Yes is set if Post returns 'Yes'

  else{
       $win = $_POST['No'];  // Otherwise, win is the 'No' value
  }

  $streamLink = $_POST['streamLink'];

  $sql1 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChar` , `kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp1', '$mountChar1' , '$kills1', '$deaths1', '$assists1', '$totalDamage1' , '$win', '$streamLink');";
  $sql2 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChamp` , `kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp2','$mountChar2' , '$kills2', '$deaths2', '$assists2', '$totalDamage2' , '$win', '$streamLink');";
  $sql3 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChar`,`kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp3','$mountChar3','$kills3', '$deaths3', '$assists3', '$totalDamage3' , '$win', '$streamLink');";
  $sql4 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChar`, `kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp4', '$mountChar4'.'$kills4', '$deaths4', '$assists4', '$totalDamage4' , '$win', '$streamLink');";
  $sql5 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChar`,`kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp5', '$mountChar5','$kills5', '$deaths5', '$assists5', '$totalDamage5' , '$win', '$streamLink');";
  $sql6 = "INSERT INTO `owPlayers`(`mountPlayer`, `mountChar`,`kills`, `deaths` ,`assists`, `totalDamage`, `hasWon`, `streamLink`)
            VALUES ('$mp6', '$mountChar6','$kills6', '$deaths6', '$assists6', '$totalDamage6' , '$win', '$streamLink');";

  $entry1 = mysqli_query($con, $sql1);
  $entry2 = mysqli_query($con, $sql2);
  $entry3 = mysqli_query($con, $sql3);
  $entry4 = mysqli_query($con, $sql4);
  $entry5 = mysqli_query($con, $sql5);
  $entry6 = mysqli_query($con, $sql6);

  if($entry1 & $entry2 & $entry3 & $entry4 & $entry5 &$entry6)
  {
      echo 'Data sent!';
  }

  else
  {
      echo 'There was a problem sending the form to the database. Please entry the information again.';
  }
  mysqli_close($con);
?>

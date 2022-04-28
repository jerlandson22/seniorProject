<?php
  $con = mysqli_connect("10.48.26.10", "root", ",mount1808!Esports2022", "esportsDB"); //Connecting goes as follows: IP address, username, password, database

  if (mysqli_connect_errno())
  {
      echo "Failed to connect: " + getMessage(); //If the connection fails, throw an error message
  }

  $mp1 = $_POST["mPlayer1"]; 
  $mp2 = $_POST["mPlayer2"];
  $mp3 = $_POST["mPlayer3"];

  $goals1 = $_POST["goals1"];
  $goals2 = $_POST["goals2"];
  $goals3 = $_POST["goals3"];
  
  $assists1 = $_POST["assists1"];
  $assists2 = $_POST["assists2"];
  $assists3 = $_POST["assists3"];
  
  $saves1 = $_POST["saves1"];
  $saves2 = $_POST["saves2"];
  $saves3 = $_POST["saves3"];
  
  $shots1 = $_POST["shots1"];
  $shots2 = $_POST["shots2"];
  $shots3 = $_POST["shots3"];
  
  $win;

  if($_POST['Yes'] == 'Yes' || $_POST['yes'] == 'yes')
       $win = $_POST[True]; //Yes is set if Post returns 'Yes'

  else{
       $win = $_POST[False];  // Otherwise, win is the 'No' value
  }

  $streamLink = $_POST['streamLink'];

  $sql1 = "INSERT INTO `rlPlayers`(`mountPlayer`, `goals`, `assists`, `saves`, `shots`, `hasWon`, `streamLink`)
            VALUES ('$mp1', '$goals1', '$assists1', '$saves1', '$shots1' , '$win', '$streamLink');";
  
  $sql2 = "INSERT INTO `rlPlayers`(`mountPlayer`, `goals`, `assists`, `saves`, `shots`, `hasWon`, `streamLink`)
            VALUES ('$mp2', '$goals2', '$assists2', '$saves2', '$shots2' , '$win', '$streamLink');";
  
  $sql3 = "INSERT INTO `rlPlayers`(`mountPlayer`, `goals`, `assists`, `saves`, `shots`, `hasWon`, `streamLink`)
            VALUES ('$mp3', '$goals3', '$assists3', '$saves3', '$shots3' , '$win', '$streamLink');";

  $entry1 = mysqli_query($con, $sql1);
  $entry2 = mysqli_query($con, $sql2);
  $entry3 = mysqli_query($con, $sql3);

  if($entry1 & $entry2 & $entry3)
  {
      echo 'Data sent!';
  }

  else
  {
      echo 'There was a problem sending the form to the database. Please entry the information again';
  }
  mysqli_close($con);
?>

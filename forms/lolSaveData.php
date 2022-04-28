<?php
  $con = mysqli_connect("10.48.26.10", "root", "mount1808!Esports2022", "lolDB"); //Connecting goes as follows: IP address, username, password, database
    if (mysqli_connect_errno())
  {
      echo "Failed to connect: " + getMessage(); //If the connection fails, throw an error message
  }

  //Player info
  $mp1 = $_POST["mountPlayer1"]; //Top Laner
  $mp2 = $_POST["mountPlayer2"]; //Jungle
  $mp3 = $_POST["mountPlayer3"]; //Mid Laner
  $mp4 = $_POST["mountPlayer4"]; //ADC
  $mp5 = $_POST["mountPlayer5"]; //Support

  $mountChamp1 = $_POST["mountChamp1"];
  $mountChamp2 = $_POST["mountChamp2"];
  $mountChamp3 = $_POST["mountChamp3"];
  $mountChamp4 = $_POST["mountChamp4"];
  $mountChamp5 = $_POST["mountChamp5"];

  $kills1 = $_POST["kills1"];
  $kills2 = $_POST["kills2"];
  $kills3 = $_POST["kills3"];
  $kills4 = $_POST["kills4"]; //Very important
  $kills5 = $_POST["kills5"];

  $deaths1 = $_POST["deaths1"];
  $deaths2 = $_POST["deaths2"];
  $deaths3 = $_POST["deaths3"];
  $deaths4 = $_POST["deaths4"];
  $deaths5 = $_POST["deaths5"];

  $assists1 = $_POST["assists1"];
  $assists2 = $_POST["assists2"];
  $assists3 = $_POST["assists3"];
  $assists4 = $_POST["assists4"];
  $assists5 = $_POST["assists5"]; //Very important

  $cs1 = $_POST["minionScore1"];
  $cs2 = $_POST["minionScore2"];
  $cs3 = $_POST["minionScore3"];
  $cs4 = $_POST["minionScore4"]; //Extremely important
  $cs5 = $_POST["minionScore5"]; //Somewhat important

  $damage1 = $_POST["totalDamage1"];
  $damage2 = $_POST["totalDamage2"];
  $damage3 = $_POST["totalDamage3"];
  $damage4 = $_POST["totalDamage4"]; //Extremely important since they are the ones that are supposed to do the most amount of damage
  $damage5 = $_POST["totalDamage5"]; //Not as important for the Support player since they focus on supporting the damage carry

  $win;

  if($_POST['yes1'] == 'Yes' || $_POST['yes1'] == 'yes')
       $win = $_POST[True]; //Yes is set if Post returns 'Yes'

  else{
       $win = $_POST[False];  // Otherwise, win is the 'No' value
  }

  $firstBlood;

  if($_POST['yes2'] == 'Yes' || $_POST['yes2'] == 'yes')
       $firstBlood = $_POST[True]; //Yes is set if Post returns 'Yes'

  else{
       $firstBlood = $_POST[False];  // Otherwise, win is the 'No' value
  }

  $firstDragon;

   if($_POST['yes3'] == 'Yes' || $_POST['yes3'] == 'yes')
       $firstDragon = $_POST[True]; //Yes is set if Post returns 'Yes'

  else{
       $firstDragon = $_POST[False];  // Otherwise, win is the 'No' value
  }

  $streamLink = $_POST['streamLink'];

  //inserts the information into the player database. This will be able to give each individual player their stats. Will make progress on making a database to group players into teams and create a way to get
  //team data.

  $sql1 = "INSERT INTO `lolPlayers`(`mountPlayer`, `mountChamp` , `kills`, `deaths` ,`assists`, `minionScore`, `totalDamage`, `hasWon`, `firstBlood`, `firstDragon`, `streamLink`)
            VALUES ('$mp1', '$mountChamp1' , '$kills1', '$deaths1', '$assists1', '$minionScore1' , '$totalDamage1' , '$win', '$firstBlood', '$firstDragon', '$streamLink');";
  $sql2 = "INSERT INTO `lolPlayers`(`mountPlayer`, `mountChamp` , `kills`, `deaths` ,`assists`, `minionScore`, `totalDamage`, `hasWon`, `firstBlood`, `firstDragon`, `streamLink`)
            VALUES ('$mp2','$mountChamp2' , '$kills2', '$deaths2', '$assists2', '$minionScore2' , '$totalDamage2' , '$win', '$firstBlood', '$firstDragon', '$streamLink');";
  $sql3 = "INSERT INTO `lolPlayers`(`mountPlayer`, `mountChamp`,`kills`, `deaths` ,`assists`, `minionScore`, `totalDamage`, `hasWon`, `firstBlood`, `firstDragon`, `streamLink`)
            VALUES ('$mp3','$mountChamp3','$kills3', '$deaths3', '$assists3', '$minionScore3' , '$totalDamage3' , '$win', '$firstBlood', '$firstDragon', '$streamLink');";
  $sql4 = "INSERT INTO `lolPlayers`(`mountPlayer`, `mountChamp`, `kills`, `deaths` ,`assists`, `minionScore`, `totalDamage`, `hasWon`, `firstBlood`, `firstDragon`, `streamLink`)
            VALUES ('$mp4', '$mountChamp4'.'$kills4', '$deaths4', '$assists4', '$minionScore4' , '$totalDamage4' , '$win', '$firstBlood', '$firstDragon', '$streamLink');";
  $sql5 = "INSERT INTO `lolPlayers`(`mountPlayer`, `mountChamp`,`kills`, `deaths` ,`assists`, `minionScore`, `totalDamage`, `hasWon`, `firstBlood`, `firstDragon`, `streamLink`)
            VALUES ('$mp5', '$mountChamp5','$kills5', '$deaths5', '$assists5', '$minionScore5' , '$totalDamage5' , '$win', '$firstBlood', '$firstDragon', '$streamLink');";

  $entry1 = mysqli_query($con, $sql1);
  $entry2 = mysqli_query($con, $sql2);
  $entry3 = mysqli_query($con, $sql3);
  $entry4 = mysqli_query($con, $sql4);
  $entry5 = mysqli_query($con, $sql5);

  if($entry1 & $entry2 & $entry3 & $entry4 & $entry5)
  {
      echo 'Data sent!';
  }

  else
  {
      echo 'There was a problem sending the form to the database. Please entry the information again';
  }
  mysqli_close($con);
?>

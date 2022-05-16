<?php
        $con = mysqli_connect("IP", "root", "password", "esportsDB"); //Connecting goes as follows: IP address, username, password, database *IP AND PASSWORD CHANGED

        if (mysqli_connect_errno()){
            echo "Failed to connect: " + getMessage(); //If the connection fails, throw an error message
        }

        $mountPlayer = $_POST['mPlayer']; //Mount player's name
        $mountCharacter = $_POST['mCharacter']; //Character of Mount player
        $oopPlayer = $_POST['oPlayer']; //Rival Player's name
        $oopCharacter = $_POST['oCharacter']; //Character of Rival
        $win;
        if($_POST['Yes'] == 'Yes' || $_POST['yes'] == 'yes')
             $win = $_POST[True]; //Yes is set if Post returns 'Yes'

        else{
             $win = $_POST[False];  // Otherwise, win is the 'No' value
        }
        $streamLink = $_POST['streamLink'];
        $stock_dif = $_POST['stockDif'];

        $sql = "INSERT INTO `ssbu`(`mountPlayer`, `mountCharacter`, `oPlayer`, `oCharacter`,`hasWon`, `stock`, `streamLink`)
                VALUES ('$mountPlayer', '$mountCharacter', '$oopPlayer', '$oopCharacter', '$win', '$stockDif', '$streamLink');"; //Inserting values into the matches table 
        $entry = mysqli_query($con, $sql);//Send variables into the SQL query

        if($entry){
            echo 'Data sent!'; // Echo to user that the information was inserted into the database
        }

        else{
            echo 'There was trouble sending data to the database. Please enter the information again'; // If the entry was not posting the values successfully, then an error message will be returned
        }
        mysqli_close($con);
     ?>

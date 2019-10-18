<?php
  include_once('include.php');

  $info = json_decode(file_get_contents("php://input"));

    $voor = mysqli_real_escape_string($conn,$info->voor);
    $achternaam = mysqli_real_escape_string($conn,$info->achternaam);
    $straat = mysqli_real_escape_string($conn,$info->straat);
    $huisnummer = mysqli_real_escape_string($conn,$info->huisnummer);
    $postcode = mysqli_real_escape_string($conn,$info->postcode);
    $woonplaats = mysqli_real_escape_string($conn,$info->woonplaats);
    $telefoonNum = mysqli_real_escape_string($conn,$info->telefoonNum);
    $btnName = mysqli_real_escape_string($conn,$info->btnName);

    $query = "INSERT INTO `persoon` (`voornaam`,`achternaam`,`straat`,`huisnummer`,`postcode`,`woonplaats`,`telefoonnummer`) VALUES ('".$voor."','".$achternaam."','".$straat."','".$huisnummer."','".$postcode."','".$woonplaats."','".$telefoonNum."');";
    if(mysqli_query($conn,$query)){
      echo "Het zit in de database1!";
    }
    else{
      echo "Error";
    }

?>

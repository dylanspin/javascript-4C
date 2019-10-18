<?php
  include_once('include.php');

  $info = json_decode(file_get_contents("php://input"));

  if(count($info) > 0) {

    $voor = mysqli_real_escape_string($conn,$info->voor);
    $achternaam = mysqli_real_escape_string($conn,$info->achternaam);
    $straat = mysqli_real_escape_string($conn,$info->straat);
    $huisnummer = mysqli_real_escape_string($conn,$info->huisnummer);
    $postcode = mysqli_real_escape_string($conn,$info->postcode);
    $woonplaats = mysqli_real_escape_string($conn,$info->woonplaats);
    $telefoonNum = mysqli_real_escape_string($conn,$info->telefoonNum);
    $updateNum = mysqli_real_escape_string($conn,$info->updateNum);

    $query = "UPDATE persoon SET voornaam='$voor', achternaam='$achternaam',straat='$straat' ,huisnummer='$huisnummer',postcode='$postcode',woonplaats='$woonplaats',telefoonnummer='$telefoonNum' WHERE id = '$updateNum';";

    if(mysqli_query($conn,$query)){
      echo "De database is geupdate!";
    }
    else{
      echo "Error";
    }
  }
 ?>

<?php
  include_once('include.php');

  $info = json_decode(file_get_contents("php://input"));
  
  if(count($info) > 0) {
    $id = $info->id;
    $query = "DELETE FROM persoon WHERE id='$id'";
    if(mysqli_query($conn, $query)) {
      echo 'De rij is verwijderd uit de database.';
    } else {
      echo 'Error';
    }
  }
?>

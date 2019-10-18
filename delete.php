<?php
  include_once('include.php');

  $info = json_decode(file_get_contents("php://input"));

    $num = mysqli_real_escape_string($conn,$info->num);

    $query = "DELETE FROM persoon WHERE num=".$num.";";
    if(mysqli_query($conn,$query)){
      echo "Het is gedelete!";
    }
    else{
      echo "Error";
    }
?>

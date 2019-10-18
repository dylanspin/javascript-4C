<?php //dit is nog niet live moet nog aan gepast worden zo dat: als er een nieuwe word toegevoegd dan moet dat direct er komen te staan.
  include_once('include.php');

  $sql = "SELECT voornaam,achternaam,straat,huisnummer,postcode,woonplaats,telefoonnummer,tijdToegevoegd,id FROM `persoon`;";
  $userData = mysqli_query($conn,$sql);

  $data = array();
  $result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($userData)) {
    //$data[] = $row;
    $data[] = array(
      "voornaam" =>$row['voornaam'],
      "achternaam" =>$row['achternaam'],
      "straat" =>$row['straat'],
      "huisnummer" =>$row['huisnummer'],
      "postcode" =>$row['postcode'],
      "woonplaats" =>$row['woonplaats'],
      "telnr" =>$row['telefoonnummer'],
      "tijd" =>$row['tijdToegevoegd'],
      "id" =>$row['id'],
    );
  }
  echo json_encode($data);
}

 ?>

<?php
  include_once('include.php');

  $voor = new SplFixedArray(20);
  $achter = new SplFixedArray(20);
  $straat = new SplFixedArray(20);
  $huis = new SplFixedArray(20);
  $post = new SplFixedArray(20);
  $woon = new SplFixedArray(20);
  $telefoon = new SplFixedArray(20);
  $tijd = new SplFixedArray(20);
  $id = new SplFixedArray(20);

  $Lvoor = $_POST['voor'];
  $lachter = $_POST['achter'];
  $Lstraat = $_POST['straat'];
  $Lhuis = $_POST['huis'];
  $Lpost = $_POST['post'];
  $Lwoon = $_POST['woon'];
  $Ltelefoon = $_POST['telnr'];
  $lid = $_POST['num'];


  function delete(){
    if (isset($delete)) {
      echo $lvoor."<br>".$Lachter."<br>".$Lstraat."<br>".$Lhuis."<br>".$Lpost."<br>".$Lwoon."<br>".$Ltelefoon."<br>".$lid;
        $sql = "DELETE FROM persoon WHERE num=".$num.";";/*delete $numer van de tabel*/

       if ($conn->query($sql) === true) {
         echo"<h4>(". $numer.") is gedelete.</h4><br>";
       }
       else {
         echo "<h4>mislukt". $sql . "</h4><br>" . $conn->error;
       }
    }
  }

  if (isset($_POST['update'])) {
       $sql = "UPDATE `persoon` SET `naam` = '$naam', `achter` = '$achter',`geboortedatum` ='$geboortedatum'
       WHERE `persoon`.`id` = $num;";

      if ($conn->query($sql) === true) {
        echo"<h4>(".$num.") is Geupdate.</h4><br>";
      }
      else {
        echo "<h4>mislukt". $sql . "</h4><br>" . $conn->error;
      }
  }


  $sql = "SELECT voornaam,achternaam,straat,huisnummer,postcode,woonplaats,telefoonnummer,tijdToegevoegd,id FROM `persoon`;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $voor[$row['id']] = $row['voornaam'];
      $achter[$row['id']] = $row['achternaam'];
      $straat[$row['id']] = $row['straat'];
      $huis[$row['id']] = $row['huisnummer'];
      $post[$row['id']] = $row['postcode'];
      $woon[$row['id']] = $row['woonplaats'];
      $telefoon[$row['id']] = $row['telefoonnummer'];
      $tijd[$row['id']] = $row['tijdToegevoegd'];
      $id[$row['id']] = $row['id'];
    }
  }
  else {
    echo "<h4>Error<h4>";
  }
?>
<script>

var app = angular
          .module("myModule",[])
          .controller("myController", function($scope){
            var persoon = [
              <?php for($i=1; $i<=5; $i++){ ?>
                {delete:"<?php echo"";?>",voornaam:"<?php echo $voor[$i];?>",achternaam:"<?php echo $achter[$i];?>",straat:"<?php echo $straat[$i];?>",
                huisnummer:"<?php echo $huis[$i];?>",postcode:"<?php echo $post[$i];?>",woonplaats:"<?php echo $woon[$i];?>",
                telnr:<?php echo $telefoon[$i];?>,num:<?php echo $id[$i];?>},
              <?php } ?>
            ];

            $scope.persoon = persoon; $scope.sortColumn = "num"; $scope.reverseSort = false;

            $scope.sortData = function (colom){
              $scope.reverseSort = ($scope.sortColumn == colom) ? !scope.reverseSort : false;
              $scope.sortColumn = colom;
            }
            $scope.insert = function(){
              document.cookie=("hoog=" + hoog + ";");//doet de hoogte/breedte in de cookies zo dat de php er bij kan
    document.cookie=("breed=" + breed + ";");

              alert(document.getElementById('voor').value);
              <?php
                if (isset($_POST['stuur'])){
                  $hoogte = $_COOKIE["hoog"];
                  $breedte = $_COOKIE["breed"]-20;
                  $sql = "INSERT INTO `persoon` (`voornaam`,`achternaam`,`straat`,`huisnummer`,`postcode`,`woonplaats`,`telefoonnummer`) VALUES ('".$Lvoor."','".$Lachter."','".$Lstraat."','".$Lstraat."','".$Lhuis."','".$Lpost."','".$Lwoon."','".$Ltelefoon."');";

                  if ($conn->query($sql) === true) {
                    echo "<h4>toegevoegd</h4>";
                  }
                  else {
                    echo "<h4>mislukt ". $sql . "</h4><br>" . $conn->error;
                  }

                }
              ?>
            }
          });

</script>

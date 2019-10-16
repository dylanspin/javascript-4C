<?php
  include_once('include.php');

  $bedrijf = new SplFixedArray(5);
  $adres = new SplFixedArray(5);
  $woonplaats = new SplFixedArray(5);
  $telnr = new SplFixedArray(5);
  $num = new SplFixedArray(5);

  $sql = "SELECT bedrijfsnaam,adres,woonplaats,telnr,num FROM `bedrijf_tabel`;";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      //echo $row['bedrijfsnaam']."<br>".$row['adres']."<br>".$row['woonplaats']."<br>".$row['telnr']."<br>".$row['num']."<br>";
      $bedrijf[$row['num']] = $row['bedrijfsnaam'];
      $adres[$row['num']] = $row['adres'];
      $woonplaats[$row['num']] = $row['woonplaats'];
      $telnr[$row['num']] = $row['telnr'];
      $num[$row['num']] = $row['num'];
    }
  }
  else {
    echo "<h4>Error<h4>";
  }

?>
<script>

var app = angular
          .module("myModulee",[])
          .controller("myController", function($scope){
            var bedrijf = [
               {bedrijfsnaam:"<?php echo $bedrijf[1];?>",adress:"<?php echo $adres[1];?>",woonplaats:"<?php echo $woonplaats[1];?>",telnr:<?php echo $telnr[1];?>,num:1},
               {bedrijfsnaam:"<?php echo $bedrijf[2];?>",adress:"<?php echo $adres[2];?>",woonplaats:"<?php echo $woonplaats[2];?>",telnr:<?php echo $telnr[2];?>,num:2},
               {bedrijfsnaam:"<?php echo $bedrijf[3];?>",adress:"<?php echo $adres[3];?>",woonplaats:"<?php echo $woonplaats[3];?>",telnr:<?php echo $telnr[3];?>,num:3},
               {bedrijfsnaam:"<?php echo $bedrijf[4];?>",adress:"<?php echo $adres[4];?>",woonplaats:"<?php echo $woonplaats[4];?>",telnr:<?php echo $telnr[4];?>,num:4},
            ];

            $scope.bedrijf = bedrijf; $scope.sortColumn = "num"; $scope.reverseSort = false;

            $scope.sortData = function (colom){
              $scope.reverseSort = ($scope.sortColumn == colom) ? !scope.reverseSort : false;
              $scope.sortColumn = colom;
            }
          });

</script>

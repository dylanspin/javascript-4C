<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Opdracht-C</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/javascript.js"></script>
    <link rel="icon"type="image/png" href="img/js.png">
  </head>
  <body ng-app="myModulee">
    <div class="mijnheader">
        <hr>
        <div class="center" style="margin-left:-100px;">
          <button type="submit" class="header"><a href="opdrachtA.html">Opdracht-A</a></button>
          <button type="submit" class="header"><a href="opdrachtB.html">Opdracht-B</a></button>
          <button type="submit" class="header"><a href="eindopdracht.php">Eindopdracht</a></button>
        </div>
        <hr>
    </div>
    <div class="content">
      <div class="center">
        <img src="img/vuur2.png" class="opdr_img">
          <div class="kop">Opdracht C</div>
        <img src="img/vuur4.png" class="opdr_img">
      </div>

      <?php
         include_once('bedrijf.php');
      ?>

      <div class="table" style="transform:translate(300px,100px);" ng-controller="myController">
        <div class="center">
          <br><h1>Tabel</h1><br>
        </div>
          <table class="formulier pos" style="transform:translate(-45%,0px);">
            <tr>
              <th ng-click="sortData('bedrijfsnaam')">Bedrijfsnaam</th>
              <th ng-click="sortData('adress')">Adres&emsp;&emsp;</th>
              <th ng-click="sortData('woonplaats')">Woonplaats</th>
              <th ng-click="sortData('telnr')">Telnr</th>
              <th ng-click="sortData('num')">num</th>
            </tr>
            <tr class="info" ng-repeat="bedrijf in bedrijf | orderBy:sortColumn:reverseSort">
              <td>{{bedrijf.bedrijfsnaam}}</td>
              <td>{{bedrijf.adress}}</td>
              <td>{{bedrijf.woonplaats}}</td>
              <td>{{bedrijf.telnr}}</td>
              <td>{{bedrijf.num}}</td>
            </tr>
          </table>
      </div>
    </div>
  </body>
</html>

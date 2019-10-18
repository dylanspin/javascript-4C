<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eindopdracht</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/javascript.js"></script>
    <link rel="icon"type="image/png" href="img/js.png">
  </head>
  <body ng-app="myModule">
    <div class="mijnheader">
        <hr>
        <div class="center" style="margin-left:-100px;">
          <button type="submit" class="header"><a href="opdrachtA.html">Opdracht-A</a></button>
          <button type="submit" class="header"><a href="opdrachtB.html">Opdracht-B</a></button>
          <button type="submit" class="header"><a href="opdrachtC.php">Opdracht-C</a></button>
        </div>
        <hr>
    </div>
    <div class="content">
      <div class="center">
        <img src="img/vuur2.png" class="opdr_img">
          <div class="kop">Eindopdracht</div>
        <img src="img/vuur4.png" class="opdr_img">
      </div>

      <div class="form" ng-controller="myController">
        <div class="center">
          <br><h1>Formulier</h1><br>
        </div>

        <form>
          <label>Voornaam </label>
            <input type="text"name="voor"id="voor"placeholder="voornaam"ng-pattern="/^[a-z]{1}[a-z]/i" ng-model="voor" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.voor.$invalid ">
                 <span class="error">Voornaam is nog niet goed</span>
            </div><br>

          <label>Achternaam </label>
            <input type="text"name="achter"id="achter"placeholder="Achternaam"ng-pattern="/^[a-z]{1}[a-z]/i"ng-model="achternaam" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.achter.$invalid ">
                 <span class="error">Achternaam is nog niet goed</span>
            </div><br>

          <label>Straat </label>
            <input type="text"name="straat"id="straat"placeholder="straat"ng-model="straat"ng-pattern="/^[a-z]{1}[a-z]/i" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.straat.$invalid ">
                 <span class="error">straat is nog niet goed</span>
            </div><br>

          <label>Huisnummer</label>
            <input type="number"name="huis"id="huis"placeholder="huisnum"ng-model="num" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.huis.$invalid ">
                 <span class="error">Huisnummer is nog niet goed</span>
            </div><br>

          <label>Postcode </label>
            <input type="text"name="post"id="post"placeholder="Postcode"ng-model="postcode"ng-pattern="/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.post.$invalid ">
                 <span class="error">Postcode is nog niet goed</span>
            </div><br>

          <label>Woonplaats </label>
            <input type="text"name="woon"id="woon"placeholder="Woonplaats"ng-model="woonplaats"ng-pattern="/^[a-z]{1}[a-z]/i" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.woon.$invalid ">
                 <span class="error">Woonplaats is nog niet goed</span>
            </div><br>

          <label>Telefoonnum </label>
            <input type="text"name="telnr"id="telnr"placeholder="TelefoonNum"ng-model="telefoonNum"ng-pattern="/^(((\\+31|0|0031)6){1}[1-9]{1}[0-9]{7})$/i" required>
            <div class="grijs"></div>
            <div class="error" ng-show="form.$submitted && form.telnr.$invalid ">
                 <span class="error">Telefoon num is nog niet goed</span>
            </div><br>

            <label>Update</label>
              <input type="number"name="num"id="num"placeholder="Update"ng-model="numUpdate">
              <div class="grijs"></div>
              <br><br>

            <div class="center">
              <input type="submit" name="stuur" value="{{btnName}}" ng-click="insertdata() ">&emsp;
              <input type="submit" name="Update" value="Update" ng-click="insertdata()">
            </div>
        </form>
      </div>


      <div class="table" ng-controller="myController">
        <div class="center">
          <br><h1>Tabel</h1><br>
        </div>
          <table class="formulier pos" style="transform:translate(-49%,0px);">
            <tr>
              <th>D</th>
              <th ng-click="sortData('voornaam')">Voor</th>
              <th ng-click="sortData('achternaam')">Achter</th>
              <th ng-click="sortData('straat')">Straatnaam</th>
              <th ng-click="sortData('huisnum')">Huis</th>
              <th ng-click="sortData('postcode')">Postcode</th>
              <th ng-click="sortData('woonplaats')">Woonplaats</th>
              <th ng-click="sortData('telnr')">Telefoonnum</th>
              <th ng-click="sortData('num')">num</th>
            </tr>
            <tr class="info" ng-repeat="persoon in persoon | orderBy:sortColumn:reverseSort">
              <td ng-click="delete()">{{persoon.delete}}-</td>
              <td>{{persoon.voornaam}}</td>
              <td>{{persoon.achternaam}}</td>
              <td>{{persoon.straat}}</td>
              <td>{{persoon.huisnummer}}</td>
              <td>{{persoon.postcode}}</td>
              <td>{{persoon.woonplaats}}</td>
              <td>{{persoon.telnr}}</td>
              <td class="tooltip">{{persoon.num}}<span class="tooltiptext">{{persoon.tijd}}</span></td>
            </tr>
          </table>
      </div>
      <?php
         include_once('persoon2.php');
      ?>
    </div>
  </body>
</html>

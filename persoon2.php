
<script>

  var krijg = angular.module('myModule', []);

  krijg.controller('myController', ['$scope', '$http', function ($scope, $http) {

     $scope.show_data = function(){
       $http.post("ajaxfile.php")
       .then(function (response){
         console.log(response);
         $scope.persoonen = response.data;
       })
     }

      $scope.insertData = function(){
        $http.post("insert.php",{
            'voor':$scope.voor,
            'achternaam':$scope.achternaam,
            'straat':$scope.straat,
            'huisnummer':$scope.num,
            'postcode':$scope.postcode,
            'woonplaats':$scope.woonplaats,
            'telefoonNum':$scope.telefoonNum,
          })
          .then(function() {
              $scope.show_data();
          });
      }

      $scope.updateData = function(){
        if (confirm("Wil je dit zekerweten Updaten?")) {
          $http.post("edit.php",{
              'voor':$scope.voor,
              'achternaam':$scope.achternaam,
              'straat':$scope.straat,
              'huisnummer':$scope.num,
              'postcode':$scope.postcode,
              'woonplaats':$scope.woonplaats,
              'telefoonNum':$scope.telefoonNum,
              'updateNum':$scope.updateNum,
            })
            .then(function() {
                $scope.show_data();
            });
        }
      }

      $scope.delete_data = function(id) {
        if (confirm("Wil je dit zekerweten verwijderen?")) {
          $http.post("delete.php", {
              'id': id,
          })
          .then(function() {
              $scope.show_data();
          });
        }
      }

     $scope.sortData = function (colom){ //sorteerd function
       $scope.reverseSort = ($scope.sortColumn == colom) ? !scope.reverseSort : false;
       $scope.sortColumn = colom;
     }

  }]);

</script>

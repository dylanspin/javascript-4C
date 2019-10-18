
<script>

  var krijg = angular.module('myModule', []);

  krijg.controller('myController', ['$scope', '$http', function ($scope, $http) {

    $http({
      method: 'get',
      url: 'ajaxfile.php'
    })
    .then(function successCallback(response) {
         $scope.persoon = response.data;
     });

      $scope.btnName = "Stuur";
      $scope.insertdata = function(){
        $http.post(
          "insert.php",{
            'voor':$scope.voor,
            'achternaam':$scope.achternaam,
            'straat':$scope.straat,
            'huisnummer':$scope.num,
            'postcode':$scope.postcode,
            'woonplaats':$scope.woonplaats,
            'telefoonNum':$scope.telefoonNum,
            'btnName':$scope.btnName
          }
        );
      }
      // $scope.show_data = function(id,name,email,age){
      //     $http.get("ajaxfile.php").then(function(data){
      //       $scope.names = data;
      //     })
      // }

      $scope.delterData = function(){
        $http.post("delete.php",{
          'num': num
        });
      }

     $scope.sortData = function (colom){ //sorteerd function
       $scope.reverseSort = ($scope.sortColumn == colom) ? !scope.reverseSort : false;
       $scope.sortColumn = colom;
     }

  }]);

</script>

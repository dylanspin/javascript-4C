
var app = angular
          .module("myModule",[])
          .controller("myController", function($scope){
              var auto = [
              { prijs:48.000,merk:"Tesla",auto:"model3",gewicht:1645,num:1,kleur:"wit",brandstof:"elektriciteit"},
              { prijs:90.000,merk:"Tesla",auto:"modelS",gewicht:2241,num:2,kleur:"zwart",brandstof:"elektriciteit"},
              { prijs:100.000,merk:"Tesla",auto:"modelX",gewicht:2459,num:3,kleur:"zwart",brandstof:"elektriciteit"},
              { prijs:71.000,merk:"Audi",auto:"etron",gewicht:2490,num:4,kleur:"wit",brandstof:"elektriciteit"},
              { prijs:33.500,merk:"Audi",auto:"tt",gewicht:1510,num:5,kleur:"grijs",brandstof:"benzine"},
              { prijs:132.300,merk:"Mercedes",auto:"amg gt",gewicht:2025,num:6,kleur:"grijs",brandstof:"benzine"},
              { prijs:99.900,merk:"BMW",auto:"i8",gewicht:1460 ,num:7,kleur:"wit",brandstof:"hybrid"},
              { prijs:123.000,merk:"Jaguar",auto:"Xj",gewicht:1645,num:8,kleur:"groen",brandstof:"benzine"},
              { prijs:260.000,merk:"Lamborghini",auto:"Urus ",gewicht:2154,num:9,kleur:"zwart",brandstof:"benzine"},
              { prijs:45.400,merk:"BMW",auto:"turismo",gewicht:1705,num:10,kleur:"blauw",brandstof:"benzine"},
            ];

            $scope.auto = auto; $scope.sortColumn = "num"; $scope.reverseSort = false;

            $scope.sortData = function (colom){
              $scope.reverseSort = ($scope.sortColumn == colom) ? !scope.reverseSort : false;
              $scope.sortColumn = colom;
            }
          });

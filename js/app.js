angular.module('calculadoraPhp', [])

	.service('CalculadoraService', ['$http',
        function($http) {
          	var sumar = function sumar(primerValor, segundoValor) {
                var url = 'operaciones.php';
                url += '?primerValor=' + primerValor;
                url += '&segundoValor=' + segundoValor;
                url += '&operacion=suma';

                return $http({url: url});
            };

            return {
                sumar: sumar
            }
        }])
    /**
     * Definimos un controlador que consume el servicio.
     */
    .controller('calculadoraCtrl',
        ['$scope', 'CalculadoraService',

        	$scope.operacion = 0;

            function ($scope, CalculadoraService) {
                $scope.init = function() {
                    $scope.operacion = null;
                };

                $scope.sumar = function sumar() {
                    if ($scope.formularioSuma.$valid) {
                        CalculadoraService
                            .sumar($scope.primerValor, $scope.segundoValor)
                            .then(function(response) {
                                if (response.data) {
                                    $scope.resultado = response.data;
                                }
                            }, function(response) {
                                $scope.resultado = response;
                            });
                    }
                };

                $scope.borrar = function borrar(){
                	CalculadoraService
                		.borrar($scope.operacion,$scope.resultado)
                		.then(function(response) {
                                if (response.data) {
                                    $scope.resultado = response.data;
                                }
                            }, function(response) {
                                $scope.resultado = response;
                            });
                };

                $scope.init();
            }])
;
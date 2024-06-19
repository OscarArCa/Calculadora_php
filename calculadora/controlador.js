var app=angular.module('calculadoraApp',[]);
app.controller("calculadoracontroller", function($scope){
    $scope.operacion="suma";
    $scope.calcularResultado=function(){
        var num1=parseFloat($scope.numero1);
        var num2=parcefloat($scope.numero2);
        if(!isNaN(num1)&& !isNaN(num2)){//isNaN identifica si es numero o no
            if($scope.operacion=='Suma'){
                $scope.resultado=num1+num2;
            }else if($scope.operacion=='resta'){
                $scope.resultado=num1-num2;
            }else if($scope.operacion=='multiplicacion'){
                $scope.resultado=num1*num2;
            }else if($scope.operacion=='division'){
                
                if(num2!==0){
                    $scope.resultado=num1/num2;
                }else{
                    alert("La division por cero no esta permitido");
                    $scope.resultado='';
                }
            }
        }else{
            alert("Por favor ingrese numeros validos");
            $scope.resultado='';
        }
        
    }
});



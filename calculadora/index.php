<!DOCTYPE html>
<html ng-app="calculadoraApp">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
        <script src="controlador.js"></script>
    </head>
    <body >
        <div ng-controller="calculadoracontroller">
            <h1>Calculadora basica</h1>
            <div>
                <label for="operacion">
                    Operación:
                </label>
                <select ng-model="operacion">
                    <option value="suma">Suma:</option>
                    <option value="resta">Resta:</option>
                    <option value="multiplicacion">Multiplicacion:</option>
                    <option value="division">Divicion:</option>
                </select>
            </div>
            <div>
                <label for="numero1">Numero1</label>
                <input type="number" ng-model="numero1" step="0.01">
            </div>
            <div>
                <label for="numero2">Numero2</label>
                <input type="number" ng-model="numero2" step="0.01">
            </div>
            <div>
                <button ng-click="calcularResultado()">Calcular</button>
            </div>
            <div>
                Resultado:{{resultado}}
            </div>
        </div>
        
    </body>
</html>

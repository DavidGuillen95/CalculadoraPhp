<?php

  $styles = ["css/util/bootstrap.min.css","css/style.css"];
  $scripts = ["js/util/angular.min.js", "js/app.js"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Calculadora - PHP</title>

<?php foreach ($styles as $style) { ?>
      <link href="<?php echo($style); ?>" rel="stylesheet">
<?php } ?>

  </head>
  <body ng-app="calculadoraPhp">
    <div class="container margin" action="index.php" method="post">
      <h1 class="text-center">Calculadora con PHP</h1>
      <div class="col-lg-12" ng-controller="ProyectoUnoController" > 
        <div class="col-lg-4 cuadro color-dos col-sm-offset-4">
        <p class="text-right" id="operacionResultado">echo{resultado}</p>
        </div>
      </div>
      <div class="col-lg-12">
        <button class="btn col-lg-1 cuadro color-uno col-sm-offset-4" name="operarioBorrar" ng-submit="borrar()">AC</button>
        <button class="btn col-lg-1 cuadro color-uno" name="operador" ng-submit="numeroNegativo">+/-</button>
        <button class="btn col-lg-1 cuadro color-uno" name="operador" ng-submit="porcentaje">%</button>
        <button class="btn col-lg-1 cuadro color-tres" name="operador" ng-submit="dividir">÷</button>
      </div>
      <div class="col-lg-12">
        <button class="btn col-lg-1 cuadro color-uno col-sm-offset-4">7</button>
        <button class="btn col-lg-1 cuadro color-uno">8</button>
        <button class="btn col-lg-1 cuadro color-uno">9</button>
        <button class="btn col-lg-1 cuadro color-tres" name="operador" ng-submit="multiplicar">x</button>
      </div>
      <div class="col-lg-12">
        <button class="btn col-lg-1 cuadro color-uno col-sm-offset-4">4</button>
        <button class="btn col-lg-1 cuadro color-uno">5</button>
        <button class="btn col-lg-1 cuadro color-uno">6</button>
        <button class="btn col-lg-1 cuadro color-tres" name="operador" ng-submit="restar">-</button>
      </div>
      <div class="col-lg-12">
        <button class="btn col-lg-1 cuadro color-uno col-sm-offset-4">1</button>
        <button class="btn col-lg-1 cuadro color-uno">2</button>
        <button class="btn col-lg-1 cuadro color-uno">3</button>
        <button class="btn col-lg-1 cuadro color-tres" name="operador" ng-submit="sumar">+</button>
      </div>
      <div class="col-lg-12">
        <button class="btn col-lg-2 cuadro color-uno col-sm-offset-4">0</button>
        <button class="btn col-lg-1 cuadro color-uno">.</button>
        <button class="btn col-lg-1 cuadro color-tres" name="operador" ng-submit="igual">=</button>
      </div>
    </div>

<?php foreach ($scripts as $script) { ?>
    <script src="<?php echo($script); ?>"></script>
<?php } ?>

  </body>
</html>

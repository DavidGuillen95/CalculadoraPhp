<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Calculadora - PHP</title>
        <link href="css/util/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container margin">
          <h1 class="text-center">Calculadora con PHP</h1>
          <div class="col-lg-12"> 
            <div class="col-lg-4 cuadro color-dos col-sm-offset-4">
              <p class="text-right" name="operacionResultado">0</p>
            </div>
          </div>
           <div class="col-lg-12">
            <a class="btn col-lg-1 cuadro color-uno col-sm-offset-4" name="ac">AC</a>
            <a class="btn col-lg-1 cuadro color-uno">+/-</a>
            <a class="btn col-lg-1 cuadro color-uno" name="porcentaje">%</a>
            <a class="btn col-lg-1 cuadro color-tres" name="division">÷</a>
          </div>
          <div class="col-lg-12">
            <a class="btn col-lg-1 cuadro color-uno col-sm-offset-4" name="siete">7</a>
            <a class="btn col-lg-1 cuadro color-uno" name="ocho">8</a>
            <a class="btn col-lg-1 cuadro color-uno" name="nueve">9</a>
            <a class="btn col-lg-1 cuadro color-tres" name="multiplicacion">x</a>
          </div>
           <div class="col-lg-12">
            <a class="btn col-lg-1 cuadro color-uno col-sm-offset-4" name="cuatro">4</a>
            <a class="btn col-lg-1 cuadro color-uno" name="cinco">5</a>
            <a class="btn col-lg-1 cuadro color-uno" name="seis">6</a>
            <a class="btn col-lg-1 cuadro color-tres" name="menos">-</a>
          </div>
           <div class="col-lg-12">
            <a class="btn col-lg-1 cuadro color-uno col-sm-offset-4" name="uno">1</a>
            <a class="btn col-lg-1 cuadro color-uno" name="dos">2</a>
            <a class="btn col-lg-1 cuadro color-uno" name="tres">3</a>
            <a class="btn col-lg-1 cuadro color-tres" name="mas">+</a>
          </div>
           <div class="col-lg-12">
            <a class="btn col-lg-2 cuadro color-uno col-sm-offset-4" name="cero">0</a>
            <a class="btn col-lg-1 cuadro color-uno" name="punto">.</a>
            <a class="btn col-lg-1 cuadro color-tres" name="igual">=</a>
          </div>
        </div>

        <script src="js/util/jquery.min.js"></script>
        <script src="js/util/bootstrap.min.js"></script>
    </body>
</html>

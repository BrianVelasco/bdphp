<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/milligram.css" rel="stylesheet" type="text/css"/>
        <title>venta de carros usados</title>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <h3>eliminar vehiculo</h3>
        <form action="eliminar2.php" method="post">
            <?php
             include './conexion.php';
             $bd= conectar();
             $sql="select placa , marca from autos;";
             $datos = mysqli_query($bd, $sql);
             while ($arr= mysqli_fetch_array($datos)){
                 echo "<input type='radio' name='rd1' value='$arr[0]'required>";
                 echo "$arr[0] - $arr[1] <br>";
             }
             mysqli_close($bd)
        
             ?>
            <input type="submit" value="eliminar">
        </form>
        
    </body>
</html>

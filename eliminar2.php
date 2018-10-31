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
        <title>venta de vehiculos</title>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <h3>resultado</h3>
        
        <?php
        $x = $_POST["rd1"];
         include './conexion.php';
         $bd= conectar();
         $sql= "delete from autos where placa ='$x';";
         $res= mysqli_query($bd, $sql);
         if ($res) echo "registro eliminado";
         else echo "<b>error</b>". mysqli_error($bd);
mysqli_close($bd);
         
        ?>
    </body>
</html>

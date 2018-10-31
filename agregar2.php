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
        <title></title>
    </head>
    <body>
        
        <h3>Resultado</h3>
        <?php 
         include './conexion.php';
         $bd= conectar();
         $placa=$_GET["placa"];
         $marca=$_GET["lstmarca"];
         $modelo=$_GET["modelo"];
         $color=$_GET["color"];
         $costo=$_GET["costo"];
         $estado=$_GET["estado"];
         
         $sql="INSERT INTO AUTOS  VALUES ('$placa', '$marca', '$modelo', '$color', '$costo', '$estado');";
         $res = mysqli_query($bd , $sql); 
         if ($res) echo "registro exitoso";
         else echo"<b>error:</b>". mysqli_error($bd);
         mysqli_close($bd);        
        ?>
    </body>
</html>
 
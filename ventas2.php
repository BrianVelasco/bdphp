<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/milligram.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <h3>resultado</h3>
        <?php 
        include './conexion.php';
        $bd= conectar();
        $vendedor = $_GET["lstVe"];
        $cliente = $_GET["lstcli"];
        $auto = $_GET["lstaut"];
        $fecha = date("Y-m-d");
        $precio = $_GET["precio"];

        $sql = "INSERT INTO ventas VALUES ('','$vendedor', '$cliente','$auto','$fecha','$precio');";
        $update = "update autos set estado = 'N' where placa = '$auto'";
        $res = mysqli_query($bd , $sql); 
        $res2 = mysqli_query($bd , $update); 

         if ($res) echo "Venta Exitosa<br>";
         else echo"<b>error:</b>". mysqli_error($bd);
         mysqli_close($bd);        
         echo"<a href='vender.php'>Regresar</a>"
        ?>
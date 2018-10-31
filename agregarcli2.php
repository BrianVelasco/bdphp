<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/milligram.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <h3>Resultado</h3>
        <?php 
        include './conexion.php';
        $bd= conectar();
        $cedula = $_GET["cedula"];
        $nombre = $_GET["nombre"];
        $tel = $_GET["telefono"];
        $dir = $_GET["direccion"];

        $sql = "INSERT INTO clientes VALUES ('$cedula', '$nombre','$tel','$dir');";
        $res = mysqli_query($bd , $sql); 
         if ($res) echo "registro exitoso<br>";
         else echo"<b>error:</b>". mysqli_error($bd);
         mysqli_close($bd);        
         echo"<a href='agregarcli.php'>Regresar</a>"
        ?>
    </body>
</html>
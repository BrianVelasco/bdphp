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
        <h3>LISTA DE VEHICULOS</h3>
        <table>
            <thead>
                <tr>
                    <th>Placa</th><th>Marca</th><th>Modelo</th><th>Color</th><th>Costo</th><th>Estado</th>
                </tr>       
            </thead>
            <tbody>
            <?php
             include './conexion.php';
             $bd= conectar();
             $sql="select placa , marca, modelo,color,costo,estado from autos;";
             $datos = mysqli_query($bd, $sql);
             while ($arr= mysqli_fetch_array($datos)){
                 #echo "<input type='radio' name='rd1' value='$arr[0]'required>";
                 
                 echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td><td>$arr[5]</td></tr>";
             }
             mysqli_close($bd)
        
             ?>
             </tbody> 
            
        </table>    
        
        
    </body>
</html>

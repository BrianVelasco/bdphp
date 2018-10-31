<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>venta de vehiculos</title>
        <link href="css/milligram.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './menu.php'; ?>
        
        <h3>nuestros vendedores</h3>
        <table>
            <thead>
                <tr>
                    <td>foto</td>
                    <td>nombre</td>
                    <td>telefono</td>
                    <td>dir</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include './conexion.php';
                $bd= conectar();
                $sql="select nombrev,telv,dirv,idv from vendedor order by nombrev ;";
                $datos = mysqli_query($bd, $sql);
                while (($reg = mysqli_fetch_array($datos))!=NULL){
                    echo "<tr>";
                    echo "<td><img src='fotos/$reg[3].jpg' alt='foto'></td>";
                    echo "<td>$reg[0]</td>";
                    echo "<td>$reg[1]</td>";
                    echo "<td>$reg[2]</td>";
                    echo "</tr>";
                    
                }
                mysqli_close($bd);
                ?>
            </tbody>
        </table>
        
        
    </body>
</html>
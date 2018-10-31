<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>venta de vehiculos usados </title>
        <link href="css/milligram.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './menu.php'; ?>
        <h3>Formulario de Ventas</h3>
        
        <div class="container">
            <div class="row">
                <div class="column-70">
           
                    <form id="frmve" action="ventas2.php">
            <label>Vendedor</label>
            <?php
             include './conexion.php';
             $bd= conectar();
             $sql = "select idv, nombrev from vendedor";
             $datos = mysqli_query($bd, $sql);
             echo"<select name='lstVe'>";
             while ($arr= mysqli_fetch_array($datos)){
                 #echo "<input type='radio' name='rd1' value='$arr[0]'required>";
                 echo"<option value=$arr[0]>$arr[1]</option>";               
        
             }
             echo "</select>";
             #mysqli_close($bd);
             
             echo "<label>Cliente</label>"  ;
             $sql = "select idc, nombrec from clientes";
             $datos = mysqli_query($bd, $sql);
             echo"<select name='lstcli'>";
             while ($arr= mysqli_fetch_array($datos)){
                 #echo "<input type='radio' name='rd1' value='$arr[0]'required>";
                 echo"<option value=$arr[0]>$arr[1]</option>";               
        
             }
             echo "</select>";

             echo "<label>Autos Disponibles</label>"  ;
             $sql = "select placa, marca , estado from autos";
             $datos = mysqli_query($bd, $sql);
             echo"<select name='lstaut'>";
             while ($arr= mysqli_fetch_array($datos)){
                 #echo "<input type='radio' name='rd1' value='$arr[0]'required>";
                 if($arr[2] == "D"){
                    echo"<option value=$arr[0]>$arr[0]-$arr[1]</option>";               
                 }        
             }
             echo "</select>";
             mysqli_close($bd);
             ?>
             <label>Precio</label>
             <input type="number" min="0" require name="precio" />
             <input type="submit" value="Vender">

    
            
            
        </form>
        
        </div>
                </div>
            
            </div>
      
    </body>
</html>

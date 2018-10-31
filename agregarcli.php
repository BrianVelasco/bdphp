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
        <h3>Agregar Cliente</h3>
        
        <div class="container">
            <div class="row">
                <div class="column-70">
           
                    <form id="frmc" action="agregarcli2.php">
            <label>Cedula</label>
            <input type="text" name="cedula" required >          
            <label>Nombre</label>
            <input type="text" name="nombre" required="">
            <label>Telefono</label>
            <input type="text" name="telefono" required="">
            <label>Direccion</label>
            <input type="text" name="direccion" required="" >
            
            
            <input type="submit" value="guardar">
            
            
        </form>
        
        </div>
                </div>
            
            </div>
      
    </body>
</html>

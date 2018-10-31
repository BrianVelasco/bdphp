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
        <h3>registro de vehiculos</h3>
        
        <div class="container">
            <div class="row">
                <div class="column-70">
           
            <form id="frmv" action="agregar2.php">
            <label>placa</label>
            <input type="text" name="placa" required pattern="[A-Z]{3}-[0-9]{3}">
            <label>marca</label>
            <select name="lstmarca">
                <option>ford</option>
                <option>chevrolet</option>
                <option>mazda</option>
                <option>renault</option> 
            </select>
            
            <label>modelo</label>
            <input type="number" name="modelo" required="">
            <label>color</label>
            <input type="text" name="color" required="">
            <label>costo</label>
            <input type="number" name="costo" required="" min="1000" >
            <label>estado</label>
            <input type="text" name="estado" required="">
            
            <input type="submit" value="guardar">
            
            
        </form>


        
        </div >
                </div>
            
            </div>

            <div id="resp"></div>
      
    </body>
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/principal.js" type="text/javascript"></script>
</html>

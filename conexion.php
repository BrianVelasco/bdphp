<?php
    function conectar(){
        $bd= mysqli_connect("localhost", "root", "", "conce");
        if(!$bd){
            echo "<h2>error al conectar con la base de datos</h2>";
            echo "<hr>".mysqli_error($bd);
            return null;
        }
        return ($bd);
        
}?>



<?php
    $banco = new mysqli("localhost","root","","advocacia","3306");
    if($banco->connect_errno){
        echo "erro ao conectar!";
    }else{
        //echo "sucesso";
    };
?>
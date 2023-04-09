<?php
    if(!$bd  = mysqli_connect('localhost','ROOT','123','escalaweb16')){
        echo "Erro ao se conectar com o banco de dados";
    }
    mysqli_query($bd,"SET NAMES utf8");
?>

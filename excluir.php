<?php

    require_once('requires/connect.php');
    $id = $_GET['id'];
    if(mysqli_query($bd, "Delete from `contatos` where `id` = '$id'")){
        $msg = "<div class='popup'>
                    <div class='container-popup'>
                        <div class='window-popup'>
                            <div class='close-popup' onclick='closePopup()'>X</div>
                        </div>
                        <div class='msg-popup'>
                            <h1>Sucesso!</h1>
                            <p>Cadastro excluído com sucesso.</p>
                        </div>
                    </div>
                </div>";
    } else{
        $msg = "<div class='popup'>
                    <div class='container-popup'>
                        <div class='window-popup'>
                            <div class='close-popup' onclick='closePopup()'>X</div>
                        </div>
                        <div class='msg-popup'>
                            <h1 id='error-h1'>Erro!</h1>
                            <p>Erro ao excluir o cadastro.</p>
                        </div>
                    </div>
                </div>";
    }
    @session_start();
    $_SESSION['msg'] = $msg;
    header("location:listar.php");

?>
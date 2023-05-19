<?php
    extract($_POST);
    extract($_FILES);
    require('requires/connect.php');

    if(mysqli_query($bd,"INSERT INTO `contatos`(`id`, `name`, `email`, `tel`, `message`) VALUES
    (NULL, '$name', '$email', '$tel', '$message');")){
        $msg = "<div class='popup'>
                    <div class='container-popup'>
                        <div class='window-popup'>
                            <div class='close-popup' onclick='closePopup()'>X</div>
                        </div>
                        <div class='msg-popup'>
                            <h1>Sucesso!</h1>
                            <p>Contato enviado com sucesso.</p>
                        </div>
                    </div>
                </div>";
    }else{
        $msg = "<div class='popup'>
                    <div class='container-popup'>
                        <div class='window-popup'>
                            <div class='close-popup' onclick='closePopup()'>X</div>
                        </div>
                        <div class='msg-popup'>
                            <h1 id='error-h1'>Erro!</h1>
                            <p>Erro ao incluir o contato.</p>
                        </div>
                    </div>
                </div>";
    }

    header("location:index.php");
    @session_start();
    $_SESSION['msg'] = $msg;

    header("location:index.php");
?>
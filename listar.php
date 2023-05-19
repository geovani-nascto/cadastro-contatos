<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="assets/css/listar.css">
    <link rel="stylesheet" href="assets/css/popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include('menu.php'); ?>
    <!-- <?php include('sec.php'); ?> -->


    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        require('requires/connect.php');
        $contatos = mysqli_query($bd, "Select * from `contatos`");
    echo "<div class=contacts>";
        while($contato = mysqli_fetch_array($contatos)){
            echo "<div class=container-contacts>";
                echo "<div>";
                    echo "<p><i class='fa-solid fa-id-badge'></i> <span>Código:</span> $contato[id]</p>";
                    echo "<p><i class='fa-solid fa-file-signature'></i> <span>Nome:</span> $contato[name]</p>";
                    echo "<p><i class='fa-solid fa-envelope'></i> <span>E-mail:</span> $contato[email]</p>";
                    echo "<p><i class='fa-solid fa-phone'></i> <span>Telefone:</span> $contato[tel]</p>";
                    echo "<p><i class='fa-solid fa-message'></i> <span>Mensagem:</span> $contato[message]</p>";
                echo "</div>";
                echo "<div class=container-btn>
                        <a class=btn href=javascript:conf_del($contato[id])>Excluir</a>
                    </div>";
            echo "</div>";
        }
    ?>

    <script>
        function conf_del(id){
            const confDelete = confirm(`Deseja excluir o cadastro ${id}?`)
            if(confDelete === true){
                window.location = `excluir.php?id=${id}`;
            }
        }
    </script>
    <script src="assets/js/close-button-popup.js"></script>
</body>
</html>
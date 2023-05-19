<!DOCTYPE html>
<?php
    require_once "requires/connect.php"
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/popup.css">
</head>
<body>
    <?php include('menu.php'); ?>
    <section>
        <?php
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <main>
            <form action="index.act.php" method="post" enctype="multipart/form-data" id="form-contact">
                <h1>Contato</h1>
                <label for="name" class="labels">Nome <span>*</span></label>
                <input type="text" name="name" id="name" class="inputs" placeholder="Digite seu nome" oninput="nameValidate()" required>
                <p class="error">Nome inválido</p>
                <label for="email" class="labels">E-mail <span>*</span></label>
                <input type="email" name="email" id="email" class="inputs" placeholder="Digite seu e-mail" oninput="emailValidate()" required>
                <p class="error">E-mail inválido</p>
                <label for="telefone" class="labels">Telefone <span>*</span></label>
                <input type="tel" name="tel" id="tel" class="inputs" placeholder="Digite seu telefone" oninput="telValidate()" required>
                <p class="error">Telefone inválido</p>
                <label for="message" class="labels">Mensagem</label>
                <textarea name="message" id="message" class="inputs txt-area" placeholder="Digite sua mensagem" required></textarea>
                <input type="submit" value="Enviar" class="btn-input">
                <p><a href="listar.php">Clique aqui</a> para ver os contatos cadastrados.</p>
            </form>
        </main>
        </section>

    <script src="assets/js/validate-infos.js"></script>
    <script src="assets/js/close-button-popup.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
</head>
<?php
$render('header')
?>
<body>
<h2>Editar</h2>

    <form action="<?=$base;?>/editar_action/<?=$user['id'];?>" method="post">

    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" id="nome" value="<?=$user['nome'];?>" required><br><br>

    <label for="tel">Telefone:</label><br>
    <input type="number" name="tel" id="tel" value="<?=$user['numero'];?>" required><br><br>

    <label for="idade"> Idade:</label><br>
    <input type="number" name="idade" id="idade" value="<?=$user['idade'];?>"><br><br>
    
    <input type="submit" value="salvar">
    </form>

    <?php $render('footer');?>
</body>
</html>
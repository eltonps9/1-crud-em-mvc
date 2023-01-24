<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar pessoas</title>
</head>

<body>

<?php $render('header');?>
    <form action="<?=$base;?>/add_action" method="post">

    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="tel">Telefone:</label><br>
    <input type="number" name="tel" id="tel" required><br><br>

    <label for="idade"> Idade:</label><br>
    <input type="number" name="idade" id="idade"><br><br>
    
    <input type="submit" value="adicionar">
    </form>

<?php $render('footer');?>

</body>
</html>
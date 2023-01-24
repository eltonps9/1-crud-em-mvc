
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro crud em MVC</title>
</head>
<body>
    <?php $render('header');?>

    

    <h2>Meus contatos</h2>
    <a href="<?=$base;?>/new">Adicionar</a>
    <hr><br><br>
    <table border="1px" width="350px">
        
        <tr >
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
            <th>idade</td>
            <th>acoes</td>
        </tr>
        <?php foreach($usu as $usua): ?>
            <tr>
                <td><?=$usua['id'];?></td>
                <td><?=$usua['nome'];?></td>
                <td><?=$usua['numero'];?></td>
                <td><?=$usua['idade'];?></td>
                <td>
                    <a href="<?=$base;?>/editar/<?=$usua['id'];?>">[editar]</a>
                    <a href="<?=$base;?>/excluir/<?=$usua['id'];?>" onclick="return confirm('deseja mesmo excluir?')">[excluir]</a>
                </td>
            </tr>
        <?php endforeach;?>

    </table>



    <?php $render('footer');?>



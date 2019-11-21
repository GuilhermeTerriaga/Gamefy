<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
        <?php include 'header.php'; ?>
        <title> Gamefy</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="corpo">
        <?php
            if($usuario['perfil']!="adm")
            {
                echo 'Você não tem permissão de acesso!';
            }else
            {
        ?>
        <h3>Seja bem-vindo, <?php print($usuario['login'])?></h3>
        <p>Você tem perfil de acesso! <?php print($usuario['perfil'])?></p>
            
        <?php
            }
        ?>
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
        </div>
    </body>
</html>
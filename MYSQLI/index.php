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
                include("./Class/conexao.php");
                $Conexao = new Classconexao();
                var_dump($Conexao->conectaDB());
        ?>
     
       
      
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
        <?php include("includes/header.php"); ?>
        <title> Gamefy</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
        <?php
            include("Class/ClassConexao.php");
            include("Class/ClassCrud.php");
        $Crud=new ClassCrud();
        
        
        
        ?>
        
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Cadastro</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form enctype="multipart/form-data" class="text-center" id="FormCadastro" method="post" style="color: #757575;" action="Controllers/ControllerCadastro.php">

      <!-- Email -->
      <div class="md-form">
        <input type="text" Name = "Nome"id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">Nome</label>
        <br>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="text" Name = "Cpf" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Cpf</label>
        <br>
      </div>

      <div class="md-form">
        <input type="text" Name = "Celular"id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Celular</label>
        <br>
      </div>

      <div class="md-form">
        <input type="file" Name = "Imagem" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Foto</label>
        <br>  
    </div>


      

     
      <input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" value="GG!" data-loading-text="Salvando!"/>

    
    

    </form>
    <!-- Form -->

  </div>

</div>
        <footer>
        <?php include("includes/footer.php"); ?>
        </footer>
        </div>
    </body>
</html>
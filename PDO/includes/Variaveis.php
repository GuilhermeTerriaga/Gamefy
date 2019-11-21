<?php
    if(isset($_POST['ID']))
    {
        $ID=filter_input(INPUT_POST,'ID', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['ID']))
    {
        $ID=filter_input(INPUT_GET,'ID', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $ID=0;
    }

    if(isset($_POST['Nome']))
    {
        $Nome=filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['Nome']))
    {
        $Nome=filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $Nome="";
    }

    if(isset($_POST['Cpf']))
    {
        $Cpf=filter_input(INPUT_POST,'Cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['Cpf']))
    {
        $Cpf=filter_input(INPUT_GET,'Cpf', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $Cpf="";
    }

    if(isset($_POST['Celular']))
    {
        $Celular=filter_input(INPUT_POST,'Celular', FILTER_SANITIZE_SPECIAL_CHARS);
    }elseif(isset($_GET['Celular']))
    {
        $Celular=filter_input(INPUT_GET,'Celular', FILTER_SANITIZE_SPECIAL_CHARS);
    }else{
        $Celular="";
    }

    if(isset($_FILES['Imagem']['name']))
    {
        $Imagem=filter_input(INPUT_FILES,'Imagem');
    }elseif(isset($_GET['Imagem']))
    {
        $Imagem=filter_input(INPUT_GET,'Imagem');
    }else{
        $Imagem="";
    }
    
?>
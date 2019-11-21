<?php
 class ClassConexao{

    #faz a conexao com o banco
    private function conectaDB()
{
    try{
        $Con=new PDO("mysql:host=localhost;dbname=gamefy","root","");
        return $Con;

    }catch (PDOException $Erro){        
        return $Erro->getMessage();
    }
}



    }
?>


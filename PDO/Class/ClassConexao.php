<?php
 class ClassConexao{

    #faz a conexao com o banco
    public function conectaDB()
{
    try{
        $Con=new PDO("mysql:host=localhost;dbname=banco","root","");
        return $Con;

    }catch (PDOException $Erro){        
        return $Erro->getMessage();
    }
}

}
?>


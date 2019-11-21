<?php
 class ClassConexao{

    #faz a conexao com o banco
    public function conectaDB()
{
    try{
        $Con=new mysqli("localhost","root","","gamefy");
        return $Con;

    }catch (Exception $Erro){        
        $Erro->gtMessage();
    }
}



    }
?>


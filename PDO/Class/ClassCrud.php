<?php
include("Class/ClassConexao.php");

class ClassCrud extends ClassConexao{
    #Atributos
    private $Crud;
    private $Contador;

    #prepared Statements
    private function preparedStatements($Query, $Parametros)
    {
        $this->countParametros($Parametros);
        $this->Crud=$this->conectaDB()->prepare($Query);

        if($this->Contador > 0){
        for($I=1; $I<=$this->Contador; $I++)
        {
            $this->Crud->bindValue($I, $Parametros[$I-1]);
        }
    }
        $this->Crud->execute();


    }


    #Contador de Parametros
    private function countParametros($Parametros)
    {
        $this->Contador=count($Parametros);
    }

    #Insere no banco de dados
    public function insertDB($Tabela, $Condicao, $Parametros){
        $this->preparedStatements("insert into")
    }
}
<?php
    include'conexao.php';
    session_start();
    
    $login = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    
    if(empty($login))
    {
        $_SESSION['mensagem']="preencha o campo Login";
        header("location: login_usuario.php");
        
    }else if(empty($senha)){
            $_SESSION['mensagem']="Preencha o campo Senha";
            header("location: login_usuario.php");
        }
        else{
            $sql ="SELECT * FROM usuario WHERE login = '$login' AND senha='$senha'";
            
            $resutado = pg_query($sql);
            
            $dados = pg_fetch_assoc($resultado);
            
            if($dados['login'] = $login and $dados ['senha'] == $senha){
                $usuario = array ("login"=>$dados['login'], "senha"=>$dados['senha'],"perfil" => $dados['perfil']);
                
                $_SESSION['usuario']=$usuario;
                
                header("Location: index.php");
                
            }else{
                $_SESSION['mensagem']="Login ou Senha Inválido";
                header ("location: login_usuario.php");
            }
        }
        
    
?>
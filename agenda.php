<?php
include 'header.php';
include 'ClassConexao.php';
$sql ="SELECT * FROM agenda";

$resultado= mysqli_query($conexao,$sql);


?>

<H1> AGENDA PESSOAL </H1>
<BR>
<TABLE class ="table table-hover">
    <tr>
        <TD>NOME:</TD>
    
        <TD>CELULAR:</TD>
        
        <TD>ATUALIZAR</TD>
        
        <TD>DELETAR</TD>
    </tr>
    
    <?php 
    while ($pessoas = mysqli_fetch_assoc($resultado))
    {
        
        echo "<td>".$pessoas['nome']."</td>";
        echo "<td>".$pessoas['telefone']."</td>";
        echo "<td><a href = '#'><img src='imagens\atualiza.png' height='38' width='38' /></a></td>";
        echo "<td><a href = '#'><img src='imagens\delete-button.png' height='38' width='38' /></a></td>";
        echo "<tr>"."</tr>";
        
    }

    mysqli_close($conexao);
    echo"</table>";
    include 'footer.php';
    ?>

    

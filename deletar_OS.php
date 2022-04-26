<?php
include ("../responsivo/banco/conexao.php");

//recebe o id por meio do get http
$GET_CODIGO = $_GET['ID'];
//realiza o comando de deletar da tabela caso o id seja igual ao parametro
$sql_deletar="DELETE FROM ordemdeservico WHERE ID = '$GET_CODIGO'";

//
$sql_query = $conexao->query($sql_deletar) or die ($mysqli->error);


    if($sql_query){
      
        echo "  <script> location.href='../responsivo/index.php';  </script>";
        
    }
    else{
        echo "  <script> alert('nao foi possivel deletar') location.href='../responsivo/index.php';  </script>";

    }


?>

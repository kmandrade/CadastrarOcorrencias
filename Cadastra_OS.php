<?php
session_start();

include_once("../responsivo/banco/conexao.php");


//recebendo os dados do formulario

$data = filter_input(INPUT_POST, 'Data', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);
$ppoe = filter_input(INPUT_POST, 'PPOE', FILTER_SANITIZE_STRING);
$mb = filter_input(INPUT_POST, 'megas', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'Tipo', FILTER_SANITIZE_STRING);
$horas = filter_input(INPUT_POST, 'Horario', FILTER_SANITIZE_STRING);

$inserirSQL = "INSERT INTO ordemdeservico 
(Data,TelefoneCliente,NomeCliente,EnderecoCliente,PPOE,Megabytes,Tipo_Insta,Horario)
 VALUES ('{$data}' , '{$telefone}' , '{$nome}' , '{$endereco}' , '{$ppoe}' ,
  '{$mb}' , '{$tipo}' , '{$horas}')";

$ResultadoSQL=mysqli_query($conexao,$inserirSQL);

if(!empty($_POST['Data'])){
    $_SESSION['msg'] = " <p style= 'color:green' >Cadastrado realizado com sucesso</p>";
    header("Location: ../responsivo/cadastro.php");
    
}else{
    
    $_SESSION['msg'] = " <p style= 'color:red' >Cadastrado nao realizado<br>
    O campo data é obrigatório.</p>";
    header("Location: ../responsivo/cadastro.php");

}
?>
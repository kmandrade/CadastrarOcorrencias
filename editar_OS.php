<?php
include("../responsivo/banco/conexao.php");

$nova_data = filter_input(INPUT_POST, 'Data', FILTER_SANITIZE_STRING);
$novo_telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$novo_nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$novo_endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);
$novo_ppoe = filter_input(INPUT_POST, 'PPOE', FILTER_SANITIZE_STRING);
$novo_megas = filter_input(INPUT_POST, 'megas', FILTER_SANITIZE_STRING);
$novo_tipo = filter_input(INPUT_POST, 'Tipo', FILTER_SANITIZE_STRING);
$novo_horario = filter_input(INPUT_POST, 'Horario', FILTER_SANITIZE_STRING);

$sql_seleciona = mysqli_query($conexao, "SELECT count(*) as total from ordemdeservico
    where NomeCliente = '$novo_nome'") or die (mysqli_error($conexao));
$rw = mysqli_fetch_array($sql_seleciona);


if($rw['total'] > 0){//VERIFICA SE ENCONTROU OU NAO se existe
    $resultado=("UPDATE ordemdeservico SET 
    Data='".$nova_data."', TelefoneCliente='".$novo_telefone."',
    NomeCliente='".$novo_nome."', EnderecoCliente='".$novo_endereco."',
    PPOE='".$novo_ppoe."' , Megabytes='".$novo_megas."',
    Tipo_Insta='".$novo_tipo."', Horario='".$novo_horario."'
    WHERE NomeCliente = '$novo_nome'");

    $resultado_busca=mysqli_query($conexao,$resultado);
   
   
    echo "  <script> alert('EDITADO COM SUCESSO!')
     location.href='../responsivo/index.php';  </script>";




}
else{
    echo "  <script> alert('nao foi possivel editar')
     location.href='../responsivo/index.php';  </script>";

    // $_SESSION['msg'] = " <script>javascript: alert('Atualizado com sucesso') </script>";
    // header("Location: ../responsivo/index.php");                    
    
}




?>
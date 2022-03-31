<?php
session_start();
include("../../php/conexao.php");

$id_menu = mysqli_real_escape_string($conexao, trim($_POST['id_menu']));
$produto_menu = mysqli_real_escape_string($conexao, trim($_POST['produto_menu']));
$descricao_menu = mysqli_real_escape_string($conexao, trim($_POST['descricao_menu']));
$valor_menu = mysqli_real_escape_string($conexao, trim($_POST['valor_menu']));
$secao_menu = mysqli_real_escape_string($conexao, trim($_POST['secao_menu']));

$id_empresa = $_SESSION['id_empresa_logada'];


$sql = "INSERT INTO menu (id_menu, id_empresa, produto_menu, descricao_menu, valor_menu, secao_menu) VALUES ('$id_menu', '$id_empresa', '$produto_menu', '$descricao_menu', '$valor_menu', '$secao_menu')";
if($conexao->query($sql) === TRUE) {
    $_SESSION['cad_produto_realizado'] = true;
} 






$conexao->close();

header('Location:../pages/cadProdutos.php');
exit;

?>
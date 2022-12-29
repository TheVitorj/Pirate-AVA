<?php
require_once("../Model/header.php");
require_once("../Model/aluno.php");
require_once("../Model/valida_formulario.php");

$valor=trim($_POST['cadAluno']);

if (!caracteresInvalidos($_POST['cadAluno']) && trim($_POST['cadAluno']) != "") {
    $valor = trim($_POST['cadAluno']);
    if (existeAluno($valor)) {
        die("Já existe um cadastro com esse nome.");
    } else {
        $valor = trim($_POST['cadAluno']);
        cadastrarAluno($valor);
        header('Location: form_aluno.php');
    }}


if (!caracteresInvalidos($_POST['dslogin']) && trim($_POST['dslogin']) != "") {
        $valor2 = trim($_POST['dslogin']);
        if (existeLogin($valor2)) {
            header('Location: ../View/form_acesso.php?erro=vader');
        } else {
            $login = trim($_POST['dslogin']);
            $senha = trim($_POST['dssenha']);
            $idAluno = getID($valor);
    
            cadastrarLogin($login, $senha, $idAluno);
            header('Location: ../View/form_login.php');
        }
}
?>
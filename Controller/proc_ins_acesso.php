<?php
require_once("../Model/login.php");
require_once("../Model/valida_formulario.php");

if (!caracteresInvalidos($_POST['dslogin']) && trim($_POST['dslogin']) != "") {
    $valor = trim($_POST['dslogin']);
    if (existeLogin($valor)) {
        header('Location: ../View/form_acesso.php?erro=vader');
    } else {
        $login = trim($_POST['dslogin']);
        $senha = trim($_POST['dssenha']);
        $idAluno = trim($_POST['idaluno']);

        cadastrarLogin($login, $senha, $idAluno);
        header('Location: ../View/form_acesso.php');
    }
}
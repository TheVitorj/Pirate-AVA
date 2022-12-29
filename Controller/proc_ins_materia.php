<?php

require_once("../Model/header.php");
require_once("../Model/materia.php");
require_once("../Model/valida_formulario.php");

if (!caracteresInvalidos($_POST['cadMateria']) && trim($_POST['cadMateria']) != "") {
    $valor = trim($_POST['cadMateria']);
    if (existeMateria($valor)) {
        die("Já existe um cadastro com esse nome.");
    } else {
        $valor = trim($_POST['cadMateria']);
        cadastrarMateria($valor);
        header('Location: ../View/form_materia.php');
    }
}


?>
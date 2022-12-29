<?php 
    require_once("../model/header.php");
    require_once("../model/aluno.php");
    require_once("../model/valida_formulario.php");

    if (isset($_POST['idalunoUPD']))
    {
        if (caracteresInvalidos($_POST['idalunoUPD']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idalunoUPD']);
            $nome = trim($_POST['nmaluno']);
            setName($id, $nome);
            header("Location: ../view/form_aluno.php?upd=1");
        }
    }
?>



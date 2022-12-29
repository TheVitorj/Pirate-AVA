<?php 
    require_once("../model/header.php");
    require_once("../model/materia.php");
    require_once("../model/valida_formulario.php");

    if (isset($_POST['idmateriaUPD']))
    {
        if (caracteresInvalidos($_POST['idmateriaUPD']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idmateriaUPD']);
            $nome = trim($_POST['dsmateria']);
            setNameMateria($id, $nome);
            header("Location: ../view/form_materia.php?upd=1");
        }
    }
?>



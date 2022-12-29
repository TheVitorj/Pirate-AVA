<?php 
    require_once("../model/header.php");
    require_once("../model/avaliacao.php");
    require_once("../model/valida_formulario.php");




 
    if (isset($_POST['idavaliacao']))
    {
        if (caracteresInvalidos($_POST['idavaliacao']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idavaliacao']);
            $aluno = trim($_POST['dsavaliacao']);            
            $materia = trim($_POST['idmateria']);
            alteraAvaliacao($id, $aluno,$materia);
            header("Location: ../view/form_avaliacao.php?upd=1");
        }
    }

?>



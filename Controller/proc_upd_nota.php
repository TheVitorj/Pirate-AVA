<?php 
    require_once("../model/header.php");
    require_once("../model/nota.php");
    require_once("../model/valida_formulario.php");




 
    if (isset($_POST['idavaliacaoaluno']))
    {
        if (caracteresInvalidos($_POST['idavaliacaoaluno']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idavaliacaoaluno']);        
            $av = trim($_POST['idavaliacao']);
            $aluno = trim($_POST['idaluno']);   
            $nota = trim($_POST['nota']);    
            alteraNotas($id, $av,$aluno,$nota);
            header("Location: ../view/form_notas.php?upd=1");
        }
    }

?>



<?php 
    require_once("../Model/header.php");
    require_once("../Model/nota.php");
    require_once("../Model/valida_formulario.php");

    if (isset($_POST['idavaliacao'],$_POST['idaluno'],$_POST['nota']))
    {
        if (caracteresInvalidos($_POST['idavaliacao']))
        {
            die("Caracteres inválidos detectados!");
        }if (caracteresInvalidos($_POST['idaluno']))
        {
            die("Caracteres inválidos detectados!");
        }if (caracteresInvalidos($_POST['nota']))
        {
            die("Caracteres inválidos detectados!");
        }

        if (existeNotas($_POST['idavaliacao'],$_POST['idaluno'])){
            die("Essa Nota já Foi Lançada!");
        }else
        {        
            $av = trim($_POST['idavaliacao']);  
            $aluno = trim($_POST['idaluno']);      
            $nota = trim($_POST['nota']);
            cadastrarNotas($av, $aluno, $nota);
            header("Location: ../View/form_notas.php");
        }
    }
?>



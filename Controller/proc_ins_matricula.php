<?php 
    require_once("../Model/header.php");
    require_once("../Model/matricula.php");
    require_once("../Model/valida_formulario.php");

    if (isset($_POST['idaluno'],$_POST['idmateria']))
    {
        if (caracteresInvalidos($_POST['idaluno']))
        {
            die("Caracteres inválidos detectados!");
        }if (caracteresInvalidos($_POST['idmateria']))
        {
            die("Caracteres inválidos detectados!");
        }

        if (existeMatricula($_POST['idaluno'],$_POST['idmateria'])){
            die("Essa Matrícula já Existe!");
        }else
        {
            $aluno = trim($_POST['idaluno']);            
            $materia = trim($_POST['idmateria']);
            cadastrarMatricula($aluno, $materia);
            header("Location: ../View/form_matricula.php");
        }
    }
?>



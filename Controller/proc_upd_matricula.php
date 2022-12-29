<?php 
    require_once("../model/header.php");
    require_once("../model/matricula.php");
    require_once("../model/valida_formulario.php");




 
    if (isset($_POST['idalunomatriculado']))
    {
        if (caracteresInvalidos($_POST['idalunomatriculado']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idalunomatriculado']);
            $aluno = trim($_POST['idaluno']);            
            $materia = trim($_POST['idmateria']);
            alteraMatricula($id, $aluno,$materia);
            header("Location: ../view/form_matricula.php?upd=1");
        }
    }

?>



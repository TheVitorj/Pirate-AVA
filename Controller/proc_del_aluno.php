<?php 
    require_once("../Model/header.php");
    require_once("../Model/aluno.php");
    require_once("../Model/valida_formulario.php");
    require_once("../Model/login.php");

    if (isset($_POST['idalunoDEL']))
    {
        if (caracteresInvalidos($_POST['idalunoDEL']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idalunoDEL']);
            
                
                    delIDAluno($id);
                    header("Location: ../View/form_aluno.php?del=1");
        }
    }
?>



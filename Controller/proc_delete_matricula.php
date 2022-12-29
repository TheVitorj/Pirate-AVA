<?php 
    require_once("../Model/header.php");
    require_once("../Model/matricula.php");
    require_once("../Model/valida_formulario.php");
    require_once("../Model/login.php"); //verificação da exclusão

    if (isset($_POST['idalunomatriculado']))
    {
        if (caracteresInvalidos($_POST['idalunomatriculado']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idalunomatriculado']);
           
                
                    delIDMatricula($id);
                    header("Location: ../View/form_matricula.php?del=1");
            {
                header("Location: ../View/form_matricula.php?del=0");
            }


            
            
        }
    }
?>


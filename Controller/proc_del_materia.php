<?php 
    require_once("../Model/header.php");
    require_once("../Model/materia.php");
    require_once("../Model/valida_formulario.php");

    if (isset($_POST['idmateriaDEL']))
    {
        if (caracteresInvalidos($_POST['idmateriaDEL']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idmateriaDEL']);
            {
               
                    delIDMateria($id);
                    header("Location: ../View/form_materia.php?del=1");              
            }

            
            
        }
    }
?>



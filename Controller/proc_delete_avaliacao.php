<?php 
    require_once("../Model/header.php");
    require_once("../Model/avaliacao.php");
    require_once("../Model/valida_formulario.php");
    require_once("../Model/login.php");

    if (isset($_POST['idavaliacao']))
    {
        if (caracteresInvalidos($_POST['idavaliacao']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idavaliacao']);
           
                
                    delIDAvaliacao($id);
                    header("Location: ../View/form_avaliacao.php?del=1");            
                {
                    header("Location: ../View/form_avaliacao.php?del=0");
                }
            
            
        }
    }
?>


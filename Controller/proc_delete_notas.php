<?php 
    require_once("../Model/header.php");
    require_once("../Model/nota.php");
    require_once("../Model/valida_formulario.php");
    require_once("../Model/login.php"); //verificação da exclusão

    if (isset($_POST['idavaliacaoaluno']))
    {
        if (caracteresInvalidos($_POST['idavaliacaoaluno']))
        {
            die("Caracteres inválidos detectados!");
        }
        else
        {
            $id = trim($_POST['idavaliacaoaluno']);
           
                
                    delIDNotas($id);
                    header("Location: ../View/form_notas.php?del=1");
            
                }
           
            {
                header("Location: ../View/form_notas.php?del=0");
            }


            
            
        }
    
?>


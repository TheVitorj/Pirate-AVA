<?php 
    require_once("../Model/header.php");
    require_once("../Model/avaliacao.php");        
    require_once("../Model/valida_formulario.php");

    //var_dump($_POST['dsavaliacao'],$_POST['idmateria']);


    if (isset($_POST['dsavaliacao'],$_POST['idmateria']))
    {


        if (caracteresInvalidos($_POST['dsavaliacao']))
        {
            die("Caracteres inválidos detectados!");
        }if(existeAvaliacao($_POST['dsavaliacao'],$_POST['idmateria'])){
            die("Já existe essa avaliação!");
        }
        else
        {
            $av = trim($_POST['dsavaliacao']);            
            $materia = trim($_POST['idmateria']);
            cadastrarAvaliacao($av,$materia);
            header("Location: ../View/form_avaliacao.php?upd=1");
        }
    }




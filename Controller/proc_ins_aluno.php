<?php

require_once("../Model/header.php");
require_once("../Model/aluno.php");
require_once("../Model/valida_formulario.php");

if (!caracteresInvalidos($_POST['cadAluno'])) 
    $valor = trim($_POST['cadAluno']);
    if (existeAluno($valor)) {        
        header('Location: ../View/form_aluno.php');
        ?> 
      <div id="alerta" class="alert alert-danger" role="alert">
            Esse aluno já possui cadastro!
        </div>
        <?php
        
    } else{
        $valor = trim($_POST['cadAluno']);
        cadastrarAluno($valor);
        header('Location: ../View/form_aluno.php');
}


?>
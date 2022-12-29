<?php
require_once("../Model/login.php");
require_once("../Model/valida_formulario.php");

if(existeLogin($_POST['dslogin']) == true)
{
    AtualizarLogin($_POST['dslogin'],$_POST['idaluno']);
    header("Location: ../view/form_acesso.php");
}
else
{
    header("Location: ../View/form_acesso.php?erro=usue");
}

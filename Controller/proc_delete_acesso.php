<?php

include("../Model/login.php");

if(isset($_POST['dslogin']))
{
    $deletar = $_POST['dslogin'];
    
    if ($delete != 'admin')
    {
        ExcluirAluno($deletar);
    }
    else header("Location:../View/form_acesso.php?del=admin");

    header("Location:../View/form_acesso.php?del=ok");
}
else
{
    die("falhou");
}

?>
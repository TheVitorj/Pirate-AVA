<?php
require_once("mysql.php");

$sqlSelect = "select * from materia where lower(dsmateria) like '%";
$novoMateria = "insert into materia(dsmateria) values ('@')";

function selecionaMateria($nome)
{
    global $sqlSelect;

    $sql = $sqlSelect . strtolower($nome) . "%'";

    return selectRegistros($sql);
}

function listaMaterias()
{
    return selectRegistros("select * from materia");
}

function existeMateria($nome)
{
    //$sql = "select * from aluno where lower(nmaluno)='" . strtolower(utf8_encode($nome)) . "'";

    //die($sql);

    $retorno = selectRegistros("select * from materia where lower(dsmateria)='" . strtolower($nome) . "'");

    if (count($retorno) > 0) return true;
    else return false;
}
function cadastrarMateria($nome)
{
    //die($nome);
    global $novoMateria;

    $sql = str_replace("@",$nome,$novoMateria);

    return insereRegistro($sql);
}

function getNameMateria($id)
{
    $retorno = selectRegistros("select * from materia where idmateria='" . $id . "'");

    return $retorno[0]['dsmateria'];
}

function setNameMateria($id, $nome)
{
    $sql = "UPDATE MATERIA SET DSmateria='" . $nome . "' WHERE idmateria=" . $id;

    return updateRegistro($sql);
}
//var_dump(listaAluno("teste"));
//var_dump(listaAlunos());
function delIDMateria($id)
{
    $sql = "DELETE FROM MATERIA  WHERE idmateria=" . $id;   

    return deleteRegistro($sql);
}

?>
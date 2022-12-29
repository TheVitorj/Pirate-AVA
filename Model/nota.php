<?php
require_once("mysql.php");

$sqlSelect = "select * from avaliacaoaluno where idavaliacao like '%";
$novoNota = "insert into avaliacaoaluno (idavaliacao,idaluno,nota) values ('@av',@a,@n)";

function selecionaNota($id)
{
    global $sqlSelect;

    $sql = $sqlSelect . strtolower($id) . "%'";

    return selectRegistros($sql);
}

function listaNotas()
{  
    return selectRegistros("

    SELECT 
    avaliacao.dsavaliacao,
    aluno.nmaluno,
    avaliacaoaluno.idavaliacaoaluno,
    avaliacaoaluno.nota
    FROM avaliacaoaluno
    INNER JOIN avaliacao
    ON avaliacao.idavaliacao = avaliacaoaluno.idavaliacao
    INNER JOIN aluno
    ON aluno.idaluno = avaliacaoaluno.idaluno
    ");     
}



function existeNotas($av,$ida)
{
    $retorno = selectRegistros("select * from avaliacaoaluno where idavaliacao = $av and idaluno = $ida");
    
    if (count($retorno) > 0) return true;
    else return false;
}

function cadastrarNotas($av,$ida,$idn)
{
    global $novoNota;    

    $sql = str_replace(['@av','@a','@n'],[$av,$ida,$idn],$novoNota);

    return insereRegistro($sql);
}


function alteraNotas($id,$av,$ida,$idn)
{
    $retorno = updateRegistro("update avaliacaoaluno set  idavaliacao = $av , idaluno = $ida , nota = $idn    
    where idavaliacaoaluno = $id"
);
    
}


function delIDNotas($id)
{
    $sql = "DELETE FROM avaliacaoaluno  WHERE idavaliacaoaluno= ".$id;   

    return deleteRegistro($sql);
}

?>
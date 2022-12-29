<?php
require_once("mysql.php");

$sqlSelect = "select * from avaliacao where lower(dsavaliacao) like '%";
$novoAvaliacao = "insert into avaliacao (dsavaliacao,idmateria) values ('@a',@m) ";

function selecionaAvaliacao($nome)
{
    global $sqlSelect;

    $sql = $sqlSelect . strtolower($nome) . "%'";

    return selectRegistros($sql);
}

function listaAvaliacao()
{  
    return selectRegistros("
    SELECT   
    avaliacao.dsavaliacao,
    materia.dsmateria,
    avaliacao.idavaliacao
    FROM avaliacao
    INNER JOIN      
    materia ON materia.idmateria = avaliacao.idmateria    
    ");
}



function existeAvaliacao($av,$idm)
{
    $retorno = selectRegistros("select * from avaliacao where dsavaliacao = '".$av."' and idmateria = ".$idm);
    
    if (count($retorno) > 0) return true;
    else return false;
}

function cadastrarAvaliacao($avaliacao,$materia)
{
    global $novoAvaliacao;    

    $sql = str_replace(['@a','@m'],[$avaliacao,$materia],$novoAvaliacao);

    return insereRegistro($sql);
}

function alteraAvaliacao($id,$ida,$idm)
{
    $retorno = updateRegistro("update avaliacao set dsavaliacao = '".$ida."' , idmateria = $idm     
    where idavaliacao = ".$id);
    
}

function getNameAvaliacao($id)
{
    $retorno = selectRegistros("select * from avaliacao where idavaliacao='" . $id . "'");

    return $retorno[0]['dsavaliacao'];
}

function setNameAvaliacao($id, $nome)
{
    $sql = "UPDATE AVALIACAO SET DSAVALIACAO='" . $nome . "' WHERE idavaliacao=" . $id;

    return updateRegistro($sql);
}

function delIDAvaliacao($id)
{
    $sql = "DELETE FROM AVALIACAO  WHERE idavaliacao= $id";

    return deleteRegistro($sql);
}

?>
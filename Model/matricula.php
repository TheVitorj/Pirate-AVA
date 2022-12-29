<?php
require_once("mysql.php");

$sqlSelect = "select * from alunomatriculado where idalunomatriculado = ";
$novoMatricula = "insert into alunomatriculado (idaluno,idmateria) values (@a,@m)";




function SelecionarMatricula($id)
{
    global $sqlSelect;

    $sql = $sqlSelect . strtolower($id) . "%'";

    return selectRegistros($sql);
}


function listaMatricula()
{
    return selectRegistros("
    select   
    aluno.nmaluno,
    materia.dsmateria,
    alunomatriculado.idalunomatriculado
    FROM alunomatriculado
    INNER JOIN    
    aluno ON aluno.idaluno = alunomatriculado.idaluno      
    INNER JOIN      
    materia ON materia.idmateria = alunomatriculado.idmateria    
    ");

    #     idalunomatriculado|idaluno|idmateria
}

function existeMatricula($id,$idm)
{
    $retorno = selectRegistros("select * from alunomatriculado where idaluno = ".$id." and idmateria = ".$idm);
    
    if (count($retorno) > 0) return true;
    else return false;
}
function cadastrarMatricula($aluno,$materia)
{
    global $novoMatricula;    

    $sql = str_replace(['@a','@m'],[$aluno,$materia],$novoMatricula);

    return insereRegistro($sql);
}

function alteraMatricula($id,$ida,$idm)
{
    $retorno = updateRegistro("update alunomatriculado set idaluno = $ida , idmateria = $idm     
    where idalunomatriculado = ".$id);
    
}

//var_dump(listaAluno("teste"));
//var_dump(listaAlunos());
function delIDMatricula($id)
{
    $sql = "DELETE FROM alunomatriculado  WHERE idalunomatriculado= ".$id;   

    return deleteRegistro($sql);
}

?>
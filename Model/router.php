<?php

require_once('/xampp/htdocs/aluno/Model/404.php');

//$projeto = ["/form_notas.php", "/aluno/view/form_acesso.php"];

$router = new Router();


$url = $_SERVER['REQUEST_URI'];
$router->match($url);


$view = $url;
// var_dump($projeto);
// var_dump($url);


 if (in_array($url, $projeto)) {
    
} else {
    header("location: form_404.php");
} 

if (!isset($_GET['pagina'])) {
    header("HTTP/1.0 404 Not Found");
    header("location: form_404.php");
}   

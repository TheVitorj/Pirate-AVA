<?php
    require_once("login.php");
    
    if(!revalidarLogin())
    {
      header("Location: form_login.php?erro=usui");
      //var_dump($_SESSION);
      exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>    
    <script src="https://kit.fontawesome.com/534febef1b.js" crossorigin="anonymous"></script>
    </head>
<header>
<nav id="header" class="navbar bg-light fixed-top" >
  <div class="container-fluid">
    
    <a id="syss" class="navbar-brand" ><img src="../css/img/logopretop.png" href="../View/form_inicial.php"  alt="Instituto Feira Livre">Pirate AVA</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../View/form_inicial.php">Página Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../View/form_acesso.php">Gestão de Acessos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Gestão de Alunos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"  href="../View/form_aluno.php">Administração de Alunos</a></li>
              <li> <a class="dropdown-item"  href="../View/form_materia.php">Administração de Matérias</a></li>
              <li><a class="dropdown-item"  href="../View/form_Matricula.php">Administração de Matriculas</a></li>
              <li><a class="dropdown-item"  href="../View/form_avaliacao.php">Administração de Avaliações</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../View/form_notas.php">Administração de notas</a></li>             
            </ul>
            <li class="nav-item">
              <a class="nav-link" href="../View/form_login.php">Sair</a>
            </li>
          </li>
        </ul>     
      </div>
    </div>
  </div>
</nav>


</header>

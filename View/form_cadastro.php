<!DOCTYPE html>
<html lang="pt-BR">

<header id="header"></header>
<head>
    <title>Pirate AVA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/534febef1b.js" crossorigin="anonymous"></script>
</head>
</style>
</header>




<body>
<form id="formlogin" action="../controller/proc_cadastro.php" method="POST">  
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5" >

              <h2 class="fw-bold mb-2 text-uppercase">Faça seu Cadastro</h2>
              <p class="text-white-50 mb-5">Preencha os campos abaixo com seus dados</p>

              <div class="form-outline form-white mb-4" >
                <input type="text" name="cadAluno" id="typeEmailX" class="form-control form-control-lg"  required/>
                <label class="form-label" for="typeEmailX">Nome</label>
              </div>

              <div class="form-outline form-white mb-4" >
                <input type="text" name="dslogin" id="typeEmailX" class="form-control form-control-lg"  required/>
                <label class="form-label" for="typeEmailX">Usuário</label>
              </div>              
              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="dssenha" class="form-control form-control-lg"  required/>
                <label class="form-label" for="typePasswordX">Senha</label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" type="submit">Cadastrar</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>





</form>
</body>
<?php
        if (isset($_GET['erro']))
        {
            if (array_key_exists($_GET['erro'], $tabela_de_erro))
            {
                echo '<br /><span style="color:red">' . $tabela_de_erro[$_GET['erro']] . '</span><br />';
            }
        }
            ?>
<?php require("../model/footer.php") ?>

</html>
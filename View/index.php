<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>       
    <script src="https://kit.fontawesome.com/534febef1b.js" crossorigin="anonymous"></script>      
</head>

<header class="header">
    <div class="container">   

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" >Home</a></li>
          <li><a href="#" >Features</a></li>
          <li><a href="#" >Pricing</a></li>
          <li><a href="#" >FAQs</a></li>
          <li><a href="#" >About</a></li>
        </ul>


        </div>
      </div>
    </div>
  </header>
<body>
    
    <main class="container">
    
    <h2>Login<img id="imglogin" src="../css/img/logopretop.png" href="../View/index.php"></h2>
            <form action="../Controller/proc_login.php" method="POST"> 
                <div class="input-field">
                    <input type="text" name="dslogin" id="username"
                        placeholder="Enter your username">
                <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="password" name="dssenha" id="password"
                        placeholder="Enter your password">
                <div class="underline"></div>
                </div>
                <input type="submit" value="Continue">                   
            </form>
            <div class="footer">
            <span>Or Connect With Social Media</span>
            <div class="social-fields">
                    <a href="../View/form_cadastro.php">
                <div class="social-field twitter">
                        <i class="fab fa-twitter"></i>
                        Sign in with Twitter
                    
                </div></a>
                    <a href="../View/form_cadastro.php">
                <div class="social-field facebook">
                        <i class="fab fa-facebook-f"></i>
                        Sign in with Facebook
                                       
                </div></a> 
                <div class="cadastro">
                    <p >Não possui uma conta? <a href="form_cadastro.php" >Cadastre-se</a>
                    </p>
            </div>
        </div>
    </main>    
</body>
 </html>

 <?php require("../model/footer.php") ?>
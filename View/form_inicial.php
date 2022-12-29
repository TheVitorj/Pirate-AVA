<?php require("../Model/header.php") ?>
<span class="navbar-toggler-icon"></span>
<?php
              $_SESSION['dslogin'];
              $nome = $_SESSION['dslogin'];
?>


<title id="title">Sistema Gestão de Faculdade</title>


<body id="inicial">    
    <div class="content">
        <h1 >Olá <?php 
        echo $nome;
        ?>,<h1>
        <h2>Bem vindo a Página inicial!</h2>
        <h3>Escolha uma opção no menu no canto superior a direita.</h3>
        <br>
        <br>
        <div>
        <h4> Sistema desenvolvido em PHP integrado com Banco de Dados SQL, onde através dele conseguimos:</h4>
        <h4> Gerir Acessos, Cadastrar Usuários, Definir Login e Senha.</h4>
        <h4>   Cadastrar, Atualizar e Excluir Alunos, Matérias, Avaliações e Notas.</h4>
        <h4>    O sistema contém também uma relacões de tabelas, entre Alunos,Matérias,Avaliações e Notas.</h4>
        <h4>    Contém também uma API de Login com criptografia em hashs para cada senha de usuário cadastrado.</p>
        
        <br>
        <br></div>
    <div>
          
    </div>



</body>
</html>
<?php require_once("../Model/footer.php") ?>
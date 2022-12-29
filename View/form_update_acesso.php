<?php require("../Model/header.php");
      require_once("../Model/login.php");?>

<body>
<div class="content">
    <h1 id="title">Atualizar Acessos </h1>

<div class="content">    
    <br>
    <hr />

    <h2 id="nuser">User <?php 
        echo $_POST['dslogin'];
        ?><h2>

   
<form action="../Controller/proc_update_senha.php" method="POST">
<input type="hidden" name="dslogin" value="<?php echo $_POST['dslogin']; ?>">
    <div class="row g-3">
    <div class="col-sm">
        <input type="password" name="nova_senha" class="form-control" placeholder="Nova Senha" aria-label="Senha" required>
    </div>
    <div class="col-sm">
        <input type="password" name="repita_senha" class="form-control" placeholder="Repita a Senha" aria-label="Senha" required>
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-light" type="submit">Alterar Senha</button>
    </div>      
    </form>
</div>
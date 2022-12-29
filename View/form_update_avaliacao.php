<?php   require_once("../model/header.php") 
        require_once("../model/menu.php") ;
        require_once("../model/login.php");
        require_once("../model/materia.php");
        require_once("../model/aluno.php");
        require_once("../model/avaliacao.php")?>

<body>
<div class="content">

       <h1 id="title">Atualização de Avaliações </h1>
       
<div class="content">        

    <br>

    <hr />

    <h2 id="nuser">Avaliação de <?php echo $_POST['dsavaliacao'];?><h2>
   
<form action="../controller/proc_upd_avaliacao.php" method="POST">
    <div class="row g-3">
    <div class="col-sm">
        <input type="hidden" name="idavaliacao" class="form-control" placeholder="Avaliação" aria-label="Senha" value="<?php echo $_POST['idavaliacao'];?>">
        <input type="text" name="dsavaliacao" class="form-control" placeholder="Avaliação" aria-label="Senha">
    </div>
    <div class="col-sm">
                    <select name="idmateria" class="form-control" placeholder="Matéria a cadastrar:" aria-label="text">
                    <option selected>Selecione a Matéria</option>
                <?php                       
                $ma = listaMaterias();

                foreach ($ma as $m) {
                    echo '<option value="' . $m['idmateria'] . '">' . $m['dsmateria'] . "</option>";
                }
                ?>
                </select>  
                </div>         
                <div class="d-grid gap-2">
                <button class="btn btn-light" type="submit">Alterar Avaliação</button>
                </div>
            </form>
    </form>    
</div>
<?php   require("header.php")
        require_once("menu.php") ;
        require_once("login.php");
        require_once("avaliacao.php");
        require_once("aluno.php");
    ?>


<body>
<div class="content">
    
    <h2>Atualizar Nota:</h2>
    <hr />
    <form action="../controller/proc_upd_nota.php" method="POST">
    <div class="row g-3">
        <input type="hidden" name="idavaliacaoaluno" value="<?php echo $_POST['idavaliacaoaluno']; ?>">
        
        
    <div class="col-sm-4">

   
        
    <select name="idavaliacao" class="form-control" placeholder="Matéria a cadastrar:" aria-label="text">
       
    <div class="col-sm-4">
        <option selected>Selecione a Avaliação</option>

            <?php
            $avs = ListaAvaliacao();

            foreach ($avs as $av) {
                echo '<option value="' . $av['idavaliacao'] . '">' . $av['dsavaliacao'] . "</option>";
            }
            ?>
        </select>
        </div>  
        
        <div class="col-sm-4">
        <select name="idaluno" class="form-control" placeholder="Aluno" aria-label="text">
            <option selected>Selecione o Aluno</option>

            <?php
            $alunos = ListaAlunos();

            foreach ($alunos as $aluno) {
                echo '<option value="' . $aluno['idaluno'] . '">' . $aluno['nmaluno'] . "</option>";
            }
            ?>
        </select> 
        
        </div>  
        <div class="col-sm-4">
        <input type="text" name="nota" class="form-control" placeholder="Digite a Nota" aria-label="Nota" />
        
    </div>      
    <div>
        <button class="btn btn-light" type="submit" >Alterar Nota</button>
                </div>
                
        </div>  
    </form>
    <hr />
    

</div>
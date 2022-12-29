<?php   require_once("../Model/header.php");
        require_once("../Model/login.php");
        

            if (isset($_GET['erro'])) {
            if (array_key_exists($_GET['erro'], $tabela_de_erro)) {
                echo '<br /><span style="color:red">' . $tabela_de_erro[$_GET['erro']] . '</span><br />';
            }
        }


    ?>

<title>Gestão de Acessos</title>
<body id="bacessos">
<div class="content">      
<h1 id="title">Gestão de Acessos </h1>  
    <br>
   
<br>

<form action="../Controller/proc_ins_acesso.php" method="POST">
    <div class="row g-3">
    <div class="col-sm-7">
        <input type="text" name=dslogin class="form-control" placeholder="Usuário" aria-label="Senha" required>
    </div>
    <div class="col-sm">
        <input type="password" name=dssenha class="form-control" placeholder="Senha" aria-label="Senha" required>
    </div>
    <div class="col-sm">    

    <select name="idaluno" class="form-select" aria-label="Default select example" required>
    <option selected>Selecione o Aluno</option>
    <?php
            $alunos = ListarAlunosValidos();

            foreach ($alunos as $aluno) {
                echo '<option value="' . $aluno['idaluno'] . '">' . $aluno['nmaluno'] . "</option>";
            }
            ?>                
        </select> 
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-light" type="submit">Cadastrar</button>
    </div>        
    </form>

        
        <table class="table table-dark table-hover" id="acessos"> 
        <thead>
            <th >Usuário</th>
            <th >Senha</th>
            <th >Aluno</th>
            <th >Atualizar </th>
            <th > Excluir </th>
        </thead>
            
            
            <?php
            $listagem = ListarTodosLogin();
            foreach ($listagem as $login) {
                echo "<tr>" .
                    "<td>" . $login['dslogin'] . "</td>" .
                    "<td>" . $login['dssenha'] . "</td>" .
                    "<td>" . $login['nmaluno'] . "</td>" .
                    "<td>" .
                    '<form action="../View/form_update_acesso.php" method="POST">' .
                    '<input type="hidden" value="' . $login['dslogin'] .  '" name="dslogin" />' .
                    '<input type="submit" value="Atualizar">' .
                    "</form>" .
                    "</td>" .
                    "<td>" .
                    '<form action="../Controller/proc_delete_acesso.php" method="POST">' .
                    '<input type="hidden" value="' . $login['dslogin'] .  '" name="dslogin" />' .
                    '<input type="submit" value="Excluir">' .
                    "</form>" .
                    "</td>" .
                    "</tr>";
            }
            ?>
        <tfoot>
        </tfoot>
        </table>
      

</div>
</body>

<?php require("../Model/footer.php") ?>

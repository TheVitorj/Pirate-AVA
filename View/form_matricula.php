<?php   require_once("../model/header.php");
        require_once("../model/login.php");
        require_once("../model/materia.php");
        require_once("../model/aluno.php");
        require_once("../model/matricula.php");

        if (isset($_GET['erro'])) {
            if (array_key_exists($_GET['erro'], $tabela_de_erro)) {
                echo '<br /><span style="color:red">' . $tabela_de_erro[$_GET['erro']] . '</span><br />';
            }
        }
    ?>

<title>Gestão de Matriculas</title>
<body id="bmatricula">
<div class="content">
    <h1>Manutenção de Matriculas </h1>
    <hr />

    <form action="../Controller/proc_ins_matricula.php" method="POST">
    <div class="row g-3">
    <div class="col-sm">    

    <select name="idaluno" class="form-select" aria-label="Default select example">
    <option selected>Selecione o Aluno</option>
    <?php
            $alunos = ListarAlunosValidos();

            foreach ($alunos as $aluno) {
                echo '<option value="' . $aluno['idaluno'] . '">' . $aluno['nmaluno'] . "</option>";
            }
            ?>                
        </select> 
    </div> <div class="col-sm">    

        <select name="idmateria" class="form-select" aria-label="Default select example">
        <option selected>Selecione a Matéria</option>
         <?php
            $avs = listaMaterias();

            foreach ($avs as $av) {
                echo '<option value="' . $av['idmateria'] . '">' . $av['dsmateria'] . "</option>";
            }
            ?>             
            </select> 
    </div>
    <div class="d-grid gap-2">
    <button class="btn btn-light" type="submit">Cadastrar</button>
    </div>        
    </form>
        <hr />

    <table class="table table-dark table-hover" id="acessos">
        <thead>
            <th>Matrícula</th>
            <th>Aluno</th>
            <th>Matéria</th>
            <th>Atualizar </th>
            <th> Excluir </th>
        </thead>
        <tbody>
            
            <?php
            $listagem = listaMatricula();
            foreach ($listagem as $login) {
                echo "<tr>" .
                    "<td>" . $login['idalunomatriculado'] . "</td>" .
                    "<td>" . $login['nmaluno'] . "</td>" .
                    "<td>" . $login['dsmateria'] . "</td>" .
                    "<td>" .
                    '<form action="../view/form_update_matricula.php" method="POST">' .
                    '<input type="hidden" value="' . $login['idalunomatriculado'] .  '" name="idalunomatriculado" />' .
                    '<input type="submit" value="Atualizar">' .
                    "</form>" .
                    "</td>" .
                    "<td>" .
                    '<form action="../controller/proc_delete_matricula.php" method="POST">' .
                    '<input type="hidden" value="' . $login['idalunomatriculado'] .  '" name="idalunomatriculado" />' .
                    '<input type="submit" value="Excluir">' .
                    "</form>" .
                    "</td>" .
                    "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"></td>
            </tr>
        </tfoot>
    </table>
</div>
</body>
        
<?php require("../model/footer.php") ?>
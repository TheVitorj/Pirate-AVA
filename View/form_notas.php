<?php require_once("../model/header.php");
require_once("../model/login.php");
require_once("../model/avaliacao.php");
require_once("../model/aluno.php");
require_once("../model/nota.php");

if (isset($_GET['erro'])) {
    if (array_key_exists($_GET['erro'], $tabela_de_erro)) {
        echo '<br /><span style="color:red">' . $tabela_de_erro[$_GET['erro']] . '</span><br />';
    }
}
?>


<title>Lançamento de Notas</title>
<body id="bnotas">

<h1 id="title">Manutenção de Notas </h1>


<div class="content">
    <br>
    <br>
   
    <form action="../controller/proc_ins_notas.php" method="POST">
        
    <div class="row g-3">
    <div class="col-sm">
    <select name="idavaliacao" class="form-select" aria-label="Selecione a Avaliação">
    <option selected>Selecione a Avaliação</option>
            <option selected></option>

            <?php
            $avs = ListaAvaliacao();

            foreach ($avs as $av) {
                echo '<option value="' . $av['idavaliacao'] . '">' . $av['dsavaliacao'] . "</option>";
            }
            ?>
        </select>
        </div>
        <div class="col-sm">
        <select name="idaluno" class="form-select" aria-label="Selecione o Aluno">
        <option selected>Selecione o Aluno</option>

            <?php
            $alunos = ListaAlunos();

            foreach ($alunos as $aluno) {
                echo '<option value="' . $aluno['idaluno'] . '">' . $aluno['nmaluno'] . "</option>";
            }
            ?>
        </select>
        </div>
        <div class="col-sm">
        <input type="text" name=nota class="form-control" placeholder="Nota" aria-label="Nota">
        </div>  
        <div class="d-grid gap-2">
        <button class="btn btn-light" type="submit">Lançar Nota</button>
        </div>  
        
        </div>   
    </form>
    <hr>

    <table class="table table-dark table-hover" id="notas">
        <thead>
            <th>ID Notas</th>
            <th>Avaliação</th>
            <th>Aluno</th>
            <th>Notas</th>
            <th>Atualizar </th>
            <th> Excluir </th>
        </thead>
        <tbody>
        

            <?php            
            $listagem = listaNotas();
            foreach ($listagem as $nota) {
                echo "<tr>" .
                    "<td>" . $nota['idavaliacaoaluno'] . "</td>" .
                    "<td>" . $nota['dsavaliacao'] . "</td>" .
                    "<td>" . $nota['nmaluno']   . "</td>" .
                    "<td>" . $nota['nota']   . "</td>" .
                    "<td>" .
                    '<form action="../view/form_update_notas.php" method="POST">' .
                    '<input type="hidden" value="' . $nota['idavaliacaoaluno'] .  '" name="idavaliacaoaluno" />' .
                    '<input type="submit" value="Atualizar">' .
                    "</form>" .
                    "</td>" .
                    "<td>" .
                    '<form action="../controller/proc_delete_notas.php" method="POST">' .
                    '<input type="hidden" value="' . $nota['idavaliacaoaluno'] .  '" name="idavaliacaoaluno" />' .
                    '<input type="submit" value="Excluir">' .
                    "</form>" .
                    "</td>" .
                    "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
        </body>
        
<?php require("../model/footer.php") ?>
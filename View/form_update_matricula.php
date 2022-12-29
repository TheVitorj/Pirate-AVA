<?php   require_once("header.php") 
        require_once("menu.php") ;
        require_once("login.php");
        require_once("materia.php");    
        require_once("aluno.php");
?>

<body>
<div class="content">
    
    <h2>Atualize sua senha:</h2>
    <hr />
    <form action="../controller/proc_upd_matricula.php" method="POST">
        <input type="hidden" name="idalunomatriculado" value="<?php echo $_POST['idalunomatriculado']; ?>">
        <label>Aluno:</label><select name="idaluno">
            <option selected></option>

            <?php
            $alunos = ListaAlunos();

            foreach ($alunos as $aluno) {
                echo '<option value="' . $aluno['idaluno'] . '">' . $aluno['nmaluno'] . "</option>";
            }
            ?>
        </select>
        <label>Id da Matéria:<select name="idmateria">
            <option selected></option>

            <?php
            $avs = listaMaterias();

            foreach ($avs as $av) {
                echo '<option value="' . $av['idmateria'] . '">' . $av['dsmateria'] . "</option>";
            }
            ?>
        </select> </label><br />
        <input type="submit" value="Alterar Matricula">
    </form>
    <hr />
    

</div>
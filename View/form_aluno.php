<?php 
    require("../model/header.php");
    require_once("../model/aluno.php");
?>

<title>Manutenção de Alunos</title>

<body id="balunos">
    <br>
    <h1 id="title" >Manutenção de Alunos</h1>
    <div class="content">
       
         <form  class="row g-3" id="fcad" action="../controller/proc_ins_aluno.php" method="POST" >
             <div class="col-sm-7">
                <input type="text" name="cadAluno" class="form-control" placeholder="Nome do Aluno" aria-label="text" required>
            </div>            
            <div class="col-auto">
                <button type="submit" class="btn btn-light">Cadastrar</button>
            </div>
        </form>
        
        <table class="table table-dark table-hover" id="alunos"> 
        <thead>
        <?php
            $alunos = listaAlunos();
        echo"<tr>" .
            "<th>Identificação</th>" .
            "<th>Nome:</th>" .
            "<th>Exclusão:</th>" .
            "</tr>" .
            "</thead>" .
            "<tbody> ";
        ?>   
        </thead>
        <?php
        foreach ($alunos as $registro) {
            echo'    <tr>' .
                '        <td><a href=../view/form_aluno.php?alterarid=' . $registro['idaluno'] . '>' . $registro['idaluno'] . '</a></td>' .
                '        <td>' . $registro['nmaluno'] . '</td>' .
                ' <td>' .
                '<form action="../controller/proc_del_aluno.php" method="POST">' .
                '    <input type="hidden" name="idalunoDEL" value="' . $registro['idaluno'] . '" />' .
                '    <input type="submit" value="Excluir" />' .
                '</form>' .
                '    </tr>';
        }?>
        </table> 
        </table>
        <hr />
        <?php
            if (isset($_GET['alterarid']))
            {
                echo '<form action="../controller/proc_upd_aluno.php" method="POST">';
                echo '    <input type="text" name="nmaluno" value=" '. getName($_GET['alterarid']) .' " />';
                echo '    <input type="hidden" name="idalunoUPD" value="' . $_GET['alterarid'] . '" />';
                echo '    <input type="submit" value="alterar" />';
                echo '</form>';
            }
        ?>
         <tfoot>
            <tr>
                <td colspan="3">
                <?php 
                    if(isset($_GET['upd'])) echo "Registro alterado"; 
                    if(isset($_GET['del']))
                    {
                        switch ($_GET['del'])
                        {
                            case "0":
                                echo "o registro não pode ser excluído";
                                break;
                            case "1":
                                echo "registro excluído";
                                break;
                            case "2":
                                 echo "O administrador não pode ser excluído";
                                 break;
                            default:
                                echo "comando inválido";
                        }
                    }
                
                ?></td>
            </tr>
        </tfoot>
            <br>
        <br>
    <br>
</div>
</body>
</html>

<?php require("../model/footer.php") ?>
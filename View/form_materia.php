    <?php   require("../model/header.php") ;
            require_once("../model/materia.php");
    ?>
    
<title>Manutenção de Materias</title>

    <body id="bmaterias">
        <h1 id="title">Manutenção de Materias</h1>
    <div class="content">
                <form class="row g-3" id="fcad" action="../controller/proc_ins_materia.php" method="POST">
                <div class="col-sm-7">
                    <input type="text" name="cadMateria" class="form-control" placeholder="Materia a cadastrar:" aria-label="text">
                </div>            
                <div class="col-auto">
                    <button type="submit" class="btn btn-light mb-3">Cadastrar</button>
                </div>
            </form>
            <table class="table table-dark table-hover" id="materias"> 
            <thead>
            <?php
                $materias = listaMaterias();

            
            echo "<tr>" .
                "<th>Identificação</th>" .
                "<th>Matéria:</th>" .
                "<th>Exclusão:</th>" .
                "</tr>" .
                "</thead>" .
                "<tbody> ";
                ?>   
                </thead>
                <?php
            foreach ($materias as $registro) {
                echo'    <tr>' .
                    '        <td><a href=../view/form_materia.php?alterarid=' . $registro['idmateria'] . '>' . $registro['idmateria'] . '</a></td>' .
                    '        <td>' . $registro['dsmateria'] . '</td>' .
                    ' <td>' .
                    '<form action="../controller/proc_del_materia.php" method="POST">' .
                    '    <input type="hidden" name="idmateriaDEL" value="' . $registro['idmateria'] . '" />' .
                    '    <input type="submit" value="Excluir" />' .
                    '</form>' .
                    '    </tr>';
            }
            ?>
            
            </table>
            
            
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
                    
                    ?>
            <hr />
            <?php
                if (isset($_GET['alterarid']))
                {
                    echo '<form action="../controller/proc_upd_materia.php" method="POST">';
                    echo '    <input type="text" name="dsmateria" value=" '. getNameMateria($_GET['alterarid']) .' " />';
                    echo '    <input type="hidden" name="idmateriaUPD" value="' . $_GET['alterarid'] . '" />';
                    echo '    <input type="submit" value="alterar" />';
                    echo '</form>';
                }
            ?>
        </div>
                <br>

    </body>

    <?php require("../model/footer.php") ?>
    </html>
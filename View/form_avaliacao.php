    <?php   require_once("../model/header.php");
            require_once("../model/login.php");
            require_once("../model/avaliacao.php");
            require_once("../model/materia.php");
    ?>
    <?php
            if (isset($_GET['erro'])) {
                if (array_key_exists($_GET['erro'], $tabela_de_erro)) {
                    echo '<br /><span style="color:red">' . $tabela_de_erro[$_GET['erro']] . '</span><br />';
                }
            }
        ?>

    <title>Manutenção de Avaliações</title>
    <body id="bavaliacao">

        <h1 id="title">Manutenção de Avaliações </h1>
    <div class="content">   
               <form class="row g-3" id="fcad" action="../controller/proc_ins_avaliacao.php" method="POST">
                <div class="col-sm-7">
                    <input type="text" name="dsavaliacao" class="form-control" placeholder="Avaliação a cadastrar:" aria-label="text">
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
                <button class="btn btn-light" type="submit">Cadastrar Avaliação</button>
                </div>
            </form>
            <br>
        
        <table class="table table-dark table-hover" id="avaliacoes"> 
            <thead>
                <th>ID AV</th>
                <th>Avaliação</th>
                <th>Matéria</th>
                <th>Atualizar </th>
                <th> Excluir </th>
            </thead>   
            
            
                <?php            
                $listagem = listaAvaliacao();
                foreach ($listagem as $avaliacao) {
                    echo "<tr>" .
                        "<td>" . $avaliacao['idavaliacao'] . "</td>" .
                        "<td>" . $avaliacao['dsavaliacao'] . "</td>" .
                        "<td>" . $avaliacao['dsmateria']   . "</td>" .
                        "<td>" .
                        '<form action="../view/form_update_avaliacao.php" method="POST">' .
                        '<input type="hidden" value="' . $avaliacao['idavaliacao'] .  '" name="idavaliacao" />' .
                        '<input type="hidden" value="' . $avaliacao['dsavaliacao'] .  '" name="dsavaliacao" />' .
                        '<input type="submit" value="Atualizar">' .
                        "</form>" .
                        "</td>" .
                        "<td>" .
                        '<form action="../controller/proc_delete_avaliacao.php" method="POST">' .
                        '<input type="hidden" value="' . $avaliacao['idavaliacao'] .  '" name="idavaliacao" />' .
                        '<input type="submit" value="Excluir">' .
                        "</form>" .
                        "</td>" .
                        "</tr>";
                }
                ?>        
        </table>
    </div>
</body>
            <?php
            require_once("../model/footer.php");
            ?>
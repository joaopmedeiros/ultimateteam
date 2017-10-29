<?php
    require_once 'controllers/queries.php';

    $title = "Ultimate Team";
    include("header.php");
?>
<main>
    <div class="container" style="margin-top:20px;">
        <h3>Ranking</h3>
        <hr />

        <table class="responsible-table striped bordered">
            <thead>
            <tr>
                <th class="center-align" colspan="2" width="28%">Classificação</th>
                <th class="center-align">P</th>
                <th class="center-align">J</th>
                <th class="center-align">V</th>
                <th class="center-align">E</th>
                <th class="center-align">D</th>
                <th class="center-align">GP</th>
                <th class="center-align">GC</th>
                <th class="center-align">SG</th>
                <th class="center-align">%</th>
            </tr>
            </thead>

            <tbody>
                <?php
                    $html = "";
                    foreach(getRankingOrdenado() as $t){
                        $sg = $t['gols_pro'] - $t['gols_contr'];
                        $html = $html . '
                            <tr>
                                <td class="center-align"><strong>' . $t['pos'] . '</strong></td>
                                <td><img class="circle" src="img/users/' . $t['nome'] . '.jpg" width="25px" height="auto" />' . $t['nome'] . '</span></td>
                                <td width="8%" class="center-align">' . $t['pontos_partidas'] . '</td>
                                <td width="8%" class="center-align">' . $t['partidas'] . '</td>
                                <td width="8%" class="center-align">' . $t['vitorias'] . '</td>
                                <td width="8%" class="center-align">' . $t['empates'] . '</td>
                                <td width="8%" class="center-align">' . $t['derrotas'] . '</td>
                                <td width="8%" class="center-align">' . $t['gols_pro'] . '</td>
                                <td width="8%" class="center-align">' . $t['gols_contr'] . '</td>
                                <td width="8%" class="center-align">' . $sg . '</td>
                                <td width="8%" class="center-align">' . number_format($t['aproveitamento'],2) . '</td>
                            </tr>
                        ';
                    }
                    echo $html;
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php    
    include("footer.php");
?>
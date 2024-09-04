<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ranking</title>
</head>

<body>
    <div class="container 2-50 m-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pontuação</th>
                    <th>Nome do Jogador</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "src/RankingDAO.php";
                $rankings = RankingDAO::consultarRanking();
                foreach ($rankings as $ranking) {
                ?>
                    <tr>
                        <td><?= strip_tags($ranking['pontuacao']) ?></td>
                        <td><a href="#" target="_blank"><?= strip_tags($ranking['nomeJogador']) ?></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

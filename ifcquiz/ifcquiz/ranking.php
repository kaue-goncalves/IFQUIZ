<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ranking</title>
    <style>
        body {
            background: url('https://cloud.estacaonerd.com/wp-content/uploads/2019/12/22080915/4avZU-7P4FaXUD6OE2esplNFwYttOa0E-_DCL2CxkdY.png') no-repeat center center fixed;
            /* Certifique-se de colocar a URL correta do seu GIF */
            background-size: cover;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7); 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h4 {
            font-weight: bold;
        }

        .form-check-input:checked {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark {
            background-color: #343a40;
            border: none;
        }

        .btn-dark:hover {
            background-color: #495057;
        }
    </style>
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

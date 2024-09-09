<?php
session_start();
require_once 'src/QuestoesDAO.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFQUIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div class="container w-50 m-auto mt-5 p-5 border rounded-3">
        <h4 class="text-center my-3">Questionário</h4>
        <?php
            // Carrega as questões
            $questoes = QuestoesDAO::consultarQuestoes();
            $pontos = $_SESSION['pontos'] ?? 0;
            $i = $_POST['i'] ?? 0;

            // Verifica se há uma resposta e se está correta
            if (isset($_POST['resposta']) && $i > 0) {
                $questao = $questoes[$i-1];
                $resposta = $_POST['resposta'];

                if ($resposta == $questao['resposta']) {
                    $pontos++;
                    $_SESSION['pontos'] = $pontos;
                }
            }

            // Avança para a próxima questão
            if ($i >= count($questoes)) {
                echo "<h4 class='text-center my-3'>Você fez $pontos pontos</h4>";
                $_SESSION['pontos'] = 0;
                session_destroy();
                die();
            } else {
                $questao = $questoes[$i];
                $i++;
            }
        ?>
        <form class="form-check row" method="POST">
            <div class="col-12 mb-4">
                <label class="form-label h5">
                    <?=$questao['questao']?>
                </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta" value="opcaoA" required>
                    <label class="form-check-label">
                        <?=$questao['opcaoA']?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta" value="opcaoB" required>
                    <label class="form-check-label">
                        <?=$questao['opcaoB']?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta" value="opcaoC" required>
                    <label class="form-check-label">
                        <?=$questao['opcaoC']?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="resposta" value="opcaoD" required>
                    <label class="form-check-label">
                        <?=$questao['opcaoD']?>
                    </label>
                </div>
            </div>
            <div class="col-12 mb-3">
                <button type="submit" class="text-center w-100 btn btn-dark px-3 py-2">Próximo</button>
            </div>
            <input type="hidden" name="i" value="<?=$i?>">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Zk8I5eI2xsRfGM4QU5IlnMwJ9t2rM56zWS9JcYP9wBV+QFKaY9+lP+DhEicFbLga"
        crossorigin="anonymous"></script>
</body>

</html>
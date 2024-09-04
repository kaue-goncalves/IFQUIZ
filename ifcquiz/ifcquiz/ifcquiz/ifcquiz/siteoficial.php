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
</head>

<body>
    <div class="container w-50 m-auto mt-5 p-5 border rounded-3">
        <h4 class="text-center my-3">Questionário</h4>
        <?php
            $questoes = QuestoesDAO::consultarQuestoes();
            $pontos = $_SESSION['pontos'] ?? 0;
            $i = $_POST['i'] ?? 0;

            if (isset($_POST['resposta']) && $i > 0) {
                $questao = $questoes[$i-1];
                $resposta = $_POST['resposta'];

                if ($resposta == $questao['resposta']) {
                    $pontos++;
                    $_SESSION['pontos'] = $pontos;
                }
            } 

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
            <div class="col-12 mb-3">
                <label class="form-label">
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
                <button type="submit" class="text-center w-100 btn btn-dark px-3 py-1 m-2">Próximo</button>
            </div>
            <input type="hidden" name="i" value="<?=$i?>">
        </form>

    </div>
</body>

</html>

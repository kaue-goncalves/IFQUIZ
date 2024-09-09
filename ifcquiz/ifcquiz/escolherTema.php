<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once 'src/TemaDAO.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha do Tema</title>
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
            background-color: rgba(255, 255, 255, 0.7); /* Fundo branco translúcido */
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
    <?php
    $temas = TemaDAO::consultarTema();
    $temaSelecionado = $_SESSION['temaSelecionado'] ?? null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tema'])) {
        $temaSelecionado = $_POST['tema'];
        $_SESSION['temaSelecionado'] = $temaSelecionado;
    }
    ?>

    <body class="<?= $temaSelecionado ?>">
        <div class="container w-50 m-auto mt-5 p-5 border rounded-3">
        <img src="img/IFquiz-logo.png" alt="IFQUIZ Logo" class="img-fluid mx-auto d-block mb-4">    
            <form method="POST" class="mb-3">
                <label for="tema" class="form-label">Escolha um tema:</label>
                <select name="tema" id="tema" class="form-select" onchange="this.form.submit()">
                    <?php foreach ($temas as $tema) : ?>
                        <option value="<?= $tema['idtema'] ?>" <?= $temaSelecionado == $tema['idtema'] ? 'selected' : '' ?>>
                            <?= $tema['tema'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </form>

            <div class="col-12 mb-3 text-end">
                <form action="siteoficial.php" method="post">
                    <button type="submit" class="btn btn-dark px-3 py-1">Iniciar IFQUIZ</button>
                </form>
            </div>
        </div>
    </body>
</html>

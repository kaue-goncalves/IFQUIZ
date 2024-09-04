<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista</title>
</head>


<body class="container w-50 m-auto my-3 ">
    <h2 class="mt-3 text-center text-danger">IfQuiz</h2>

    <div class="border rounded-3 p-3">
        <h4 class="my-2 text-center">Lista</h4>

        <table class="table table-striped">
            <tr>
                <th>Tema</th>
                <th>Questão</th>
                <th>OpçãoA</th>
                <th>OpçãoB</th>
                <th>OpçãoC</th>
                <th>OpçãoD</th>
                <th>Resposta</th>
            </tr>

                <?php
            require_once "src/ResultadoDAO.php";                                    
        ?>
        </table>

        <div class="text-end my-2">
            <a href="form-cadastro.php" class="text-danger">Cadastrar</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
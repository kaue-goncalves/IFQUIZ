<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>


    <h2 class="mt-3 text-center text-danger">IfQuiz</h2>
    <form action="src/cadastrar.php">
        <div class="container w-50 m-auto border rounded-3 p-3 position-absolute top-50 start-50 translate-middle">
            <h4 class="my-2 text-center">Cadastro de questões</h4>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="row">

                        <div class="form-check">
                            <label for="cadastrarQuestao" class="form-label">Questão</label>
                            <input type="text" name="questao" class="form-control" id="cadastarQuestao">
                        </div>

                        <div class="form-check">
                            <label for="cadastrarAlternativa" class="form-label">Alternativa</label>
                            <input type="text" name="opcaoA" class="form-control" id="cadastrarAlternativa">
                        </div>

                        <div class="form-check">
                            <label for="cadastrarAlternativa" class="form-label">Alternativa</label>
                            <input type="text" name="opcaoB" class="form-control" id="cadastrarAlternativa">
                        </div>

                        <div class="form-check">
                            <label for="cadastrarAlternativa" class="form-label">Alternativa</label>
                            <input type="text" name="opcaoC" class="form-control" id="cadastrarAlternativa">
                        </div>

                        <div class="form-check">
                            <label for="cadastrarAlternativa" class="form-label">Alternativa</label>
                            <input type="text" name="opcaoD" class="form-control" id="cadastrarAlternativa">
                        </div>

                        <div class="form-check">
                            <label for="cadastrarAlternativa" class="form-label">Resposta</label>
                            <input type="text" name="resposta" class="form-control" id="resposta">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 mb-3 text-end">
                <button class="btn btn-dark px-5" type="submit">Cadastrar</button>
            </div>
        </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </form>
</body>

</html>
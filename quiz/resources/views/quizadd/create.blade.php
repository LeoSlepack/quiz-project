<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Quiz</title>
    <!-- Arquivo CSS do DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <!-- Arquivo JavaScript do DataTables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <!-- Arquivo CSS do AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/css/adminlte.min.css">
    <!-- Arquivo JavaScript do jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Arquivo JavaScript do AdminLTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.0.5/dist/js/adminlte.min.js"></script>
    <!--Css -->
</head>
<body>

    <div class="container">
        <h1>Crie o seu Quiz</h1>
        <form action="/quizadd" id="form-quiz" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Título do Quiz:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do seu Quiz" required>
            </div>
            <div class="form-group">
                <label for="category">Categoria:</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="0">Conhecimentos Gerais</option>
                    <option value="1">Animais</option>
                    <option value="2">Futebol</option>
                    <option value="3">Geografia</option>
                    <option value="4">Filmes e Series</option>
                    <option value="5">Historia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mult">Terá mais de uma resposta correta nas perguntas do seu Quiz</label>
                <select name="mult" id="mult" class="form-control" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question">Pergunta:</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Digite sua pergunta" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar quiz">
            <a href="'/home" class="btn btn-secondary">Voltar a página principal</a>
        </form>
    </div>

</body>
</html>




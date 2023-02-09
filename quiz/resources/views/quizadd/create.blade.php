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
    <h1>Novo Quiz</h1>

    <form id="form-quiz" action="{{ route('quizzes.store') }}" method="post">
        @csrf
        <input class="form-control" type="text" name="title-quiz" id="title-quiz" placeholder="Qual o nome do seu quiz">
        <input class="form-control" type="text" name="question" id="question" placeholder="Digite sua pergunta">
        <button class="btn btn-primary" type="submit">Criar quiz</button>
    </form>

</body>
</html>




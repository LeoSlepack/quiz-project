<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
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
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    @yield('content')
    
    <!--Botões do projeto-->
    <div class="actions d-flex justify-content-center">
        <a href="/users" class="btn btn-primary">Editar Usuário</a>
        <a href="/quiz/create" class="btn btn-success">Criar Quiz</a>
    </div>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="pesquise aqui por um quiz">
    </form>

    <!--Tabela de armazenamento de quiz-->
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Número</th>
            <th>Título do Quiz</th>
            <th>Data de lançamento</th>
            <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Geografia do Brasil</td>
            <td>15 de janeiro de 2022</td>
            <td>Geografia</td>
            <td>
                <a href="/playquiz"><button type="button" class="btn btn-primary btn-sm">Jogar</button></a>
                <a href="/editquiz"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                <button type="button" class="btn btn-danger btn-sm">Excluir</button>
            </td>
            </tr>
            <tr>
            <td>2</td>
            <td>Literatura Brasileira</td>
            <td>10 de março de 2022</td>
            <td>Literatura</td>
            <td>
                <a href="/playquiz"><button type="button" class="btn btn-primary btn-sm">Jogar</button></a>
                <a href="/editquiz"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                <button type="button" class="btn btn-danger btn-sm">Excluir</button>
            </td>
            </tr>
            <tr>
            <td>3</td>
            <td>História da América</td>
            <td>20 de maio de 2022</td>
            <td>História</td>
            <td>
                <a href="/playquiz"><button type="button" class="btn btn-primary btn-sm">Jogar</button></a>
                <a href="/editquiz"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                <button type="button" class="btn btn-danger btn-sm">Excluir</button>
            </td>
            </tr>
            <tr>
            <td>4</td>
            <td>Astronomia</td>
            <td>1 de julho de 2022</td>
            <td>Ciência</td>
            <td>
                <a href="/playquiz"><button type="button" class="btn btn-primary btn-sm">Jogar</button></a>
                <a href="/editquiz"><button type="button" class="btn btn-success btn-sm">Editar</button></a>
                <button type="button" class="btn btn-danger btn-sm">Excluir</button>
            </td>
            </tr>
        </tbody>
    </table>

    <!--Footer armazenando código datatables-->
    <footer>
        <script>
            $(document).ready(function() {
                $('#table-quiz').DataTable();
            });
        </script>
    </footer>
</body>
</html>

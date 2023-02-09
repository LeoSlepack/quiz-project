<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Usuários</title>
</head>
<body>
    <div class="container">
    <h1>Atualize seus dados</h1>
        <form id="form-users" action="" method="post">
            @csrf
            <input class="form-control" type="text" name="name" id="name" placeholder="Digite seu nome" required><br>
            <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email" required><br>
            <input class="form-control" type="number" name="number_phone" id="number_phone" placeholder="Digite o número do seu celular" required><br>
            <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua nova senha" required><br>
            <input class="form-control" type="password" name="newpassword" id="newpassword" placeholder="Repita sua nova senha" required><br>
            <button class="btn btn-primary" type="submit">Atualize seus dados</button><br><br> 
            <a class="btn btn-secondary" href="/home">Voltar para página principal</a>
        </form>
    </div>

     <!--Footer armazenando código datatables-->
     <footer>
        <script>
            $(document).ready(function() {
                $('#table-users').DataTable();
            });
        </script>
    </footer>
</body>
</html>
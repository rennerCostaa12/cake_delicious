<?php include 'config/database.php'; ?>

<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Usuários</title>
</head>

<body>
    <h1>Usuários</h1>
    <a href="/trabalho-web/add.php"> Add Usuário</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Primeiro Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Email</th>
                <th scope="col">Admin</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pdo->query($sqlGetAllUser) as $data) : ?>
                <tr>
                    <th scope="row"><?php echo $data['id_user'] ?></th>
                    <td><?php echo $data['first_name'] ?></td>
                    <td><?php echo $data['last_name'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['isadmin'] ? "Sim" : "Não" ?></td>
                    <td>
                        <Button class="btn btn-primary">Atualizar</Button>
                        <Button class="btn btn-danger">Deletar</Button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
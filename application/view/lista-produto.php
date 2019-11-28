<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
</head>
<body>
    <h1>Listagem de Produtos</h1>
    <hr>
    <a href="/index.php/Pessoa/forminsere">Cadastrar</a>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= $u->nome ?></td>
                    <td><?= $u->descricao ?></td>
                    <td><?= $u->quantidade ?></td>
                    <td><a href="/index.php/Produto/formaltera?id=<?= $u->id ?>">Editar</a></td>
                    <td><a href="/index.php/Produto/deleteDb?id=<?= $u->id ?>">Excluir</a></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>
</html>

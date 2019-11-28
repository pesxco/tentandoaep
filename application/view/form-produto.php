<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <hr>
    <form action="/index.php/pessoa/<?= $acao ?>" method="POST">
        <?php if ($edita) : ?>
            ID:     <input type="text" name="id" value="<?= $usuarios[0]->id ?>" readonly> <br>
            Nome:   <input type="text" name="nome" value="<?= $usuarios[0]->nome ?>"> <br>
            Descricao:  <input type="text" name="descricao" value="<?= $usuarios[0]->descricao ?>"> <br>
            Quantidade:  <input type="text" name="quantidade" value="<?= $usuarios[0]->quantidade ?>"> <br>
        <?php else: ?>
            Nome: <input type="text" name="nome"> <br>
            Descricao: <input type="text" name="nome"> <br>
            Quantidade: <input type="text" name="idade"> <br>
        <?php endif ?>

        <input type="submit" value="Salvar">

    </form>
</body>
</html>

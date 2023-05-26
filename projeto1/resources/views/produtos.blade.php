<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>

    <hr>

    <form method="post">
    @csrf

    <p>
        <strong>Produto</strong>
        <input type="text" name="produto">
    </p>

    <p>
        <strong>Preço</strong>
        <input type="text" name="preco">
    </p>
    
    <p>
        <strong>Categoria</strong>
        <input type="text" name="categoria">
    </p>

    <p><input type="submit" value="Salvar"></p>

    </form>

    <hr>

    <label>Produto: {{$produto}}</label><br>
    <label>Preco: {{$preco}}</label><br>
    <label>Categoria: {{$categoria}}</label><br>
</body>
</html>
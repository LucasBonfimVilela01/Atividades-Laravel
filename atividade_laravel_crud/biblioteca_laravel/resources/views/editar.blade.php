<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
<h1>Produtos</h1>

    <div class="navbar">
        <a href="/">Cadastrar Item</a>
        <br>
        <a href="/listar-produto">Listar Item</a>
    </div>
    <br>
    @if (session('feedback'))
            <div>
                {{ session('feedback') }}
            </div>
    @endif
    <br>
<form action="/editar-produto/{{ $produto->id }}" method="POST">
    @csrf
    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="{{ $produto->nome }}">
    <br><br>
    <label for="lblValor">Valor:</label>
    <input type="text" name="valor" value="{{ $produto->valor }}">
    <br><br>
    <label for="lblQuantidade">Quantidade:</label>
    <input type="text" name="estoque" value="{{ $produto->estoque }}">
    <br><br>
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
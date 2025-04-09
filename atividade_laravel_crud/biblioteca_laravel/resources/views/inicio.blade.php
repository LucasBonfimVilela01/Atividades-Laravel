<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    
    <div class="navbar">
        <a href="listar-produto">Listar Item</a>
    </div>
    <br>
    @if (session('feedback'))
            <div>
                {{ session('feedback') }}
            </div>
    @endif
    <br>
    <form action="/cadastrar-produto" method="POST">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" id="valor">
        <br><br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" id="estoque">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
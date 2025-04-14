<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar produtos</title>
    <link rel="stylesheet" href="{{ URL::asset('css/cadastro.css'); }} ">
</head>
<body>
<div class="caixa0">
    <div class="caixa1">
        <h1>Produtos </h1>
        <div class="navbar">
            <a href="listar-produto">Listar Itens</a>
        </div>
    </div>
    <div class="caixa2">
        @if (session('feedback'))
            <div class="feedback"> 
                <span class="feedback-text">{{ session('feedback') }}</span>
                <button class="close-btn" onclick="this.parentElement.style.display='none';">×</button>
            </div>
        @endif
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" id="nome" required> 
            <br><br>
            <label for="lblValor">Valor:</label>
            <input type="text" name="valor" id="valor" required>
            <br><br>
            <label for="lblQuantidade">Quantidade:</label>
            <input type="text" name="estoque" id="estoque" required>
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</div>
</body>
</html>
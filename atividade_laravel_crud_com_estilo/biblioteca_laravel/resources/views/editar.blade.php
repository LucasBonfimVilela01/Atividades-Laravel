<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
    <link rel="stylesheet" href="{{ URL::asset('css/editar.css'); }} ">
</head>
<body>
<div class="caixa0">
        <div class="caixa1">
            <h1>Produtos</h1>
            <div class="navbar">
                <a href="/">Cadastrar Item</a>
                <br>
                <a href="/listar-produto">Listar Itens</a>
            </div>
        </div>
        <div class="caixa2">
            @if (session('feedback'))
                <div class="feedback"> 
                    <span class="feedback-text">{{ session('feedback') }}</span>
                    <button class="close-btn" onclick="this.parentElement.style.display='none';">×</button>
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
                <button type="submit">Editar</button>
            </form>
        </div>
</div>
</body>
</html>
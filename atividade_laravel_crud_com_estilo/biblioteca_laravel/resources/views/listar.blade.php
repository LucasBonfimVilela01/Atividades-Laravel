<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <title>Listar produtos</title>
    <link rel="stylesheet" href="{{ URL::asset('css/listar.css'); }} ">
</head>
<body>
    <div class="caixa0">
        <div class="caixa1">
            <h1>Produtos</h1>
            <div class="navbar">
                <a href="/">Cadastrar Item</a>
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
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Nome</b></td>
                    <td><b>Valor</b></td>
                    <td><b>Estoque</b></td>
                    <td><b>Editar Registro</b></td>
                    <td><b>Deletar Registro</b></td>
                </tr>
                @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->estoque }}</td>
                    <td>
                        <a href="/editar-produto/{{ $produto->id }}">EDITAR</a>
                    </td>
                    <td>
                        <a href="/excluir-produto/{{ $produto->id }}">EXCLUIR</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
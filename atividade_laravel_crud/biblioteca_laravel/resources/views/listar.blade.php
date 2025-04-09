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
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <div class="navbar">
        <a href="/">Cadastrar Item</a>
    </div>
    <br>
    @if (session('feedback'))
            <div>
                {{ session('feedback') }}
            </div>
    @endif
    <br>
    <table>
    <tr>
        <td><b>ID</b></td>
        <td><b>Nome</b></td>
        <td><b>Valor</b></td>
        <td><b>Estoque</b></td>
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
</body>
</html>
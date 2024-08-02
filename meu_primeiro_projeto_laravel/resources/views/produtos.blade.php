<!-- resources/views/produtos.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')

    <div class="container">
        <h1>Lista de Produtos</h1>
        <ul>
            @foreach ($produtos as $produto)
                <li>{{ $produto['nome'] }} - R$ {{ number_format($produto['preco'], 2, ',', '.') }}</li>
            @endforeach
        </ul>
    </div>

    @include('components.footer')
</body>
</html>

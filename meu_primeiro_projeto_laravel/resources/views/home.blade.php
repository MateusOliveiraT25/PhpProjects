<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    
    <!-- Incluindo Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Seu CSS Personalizado -->
    
</head>
<body>
    <!-- Header -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Conteúdo Principal -->
    <div class="container mt-5">
        <h1>Bem-vindo à Página Inicial</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Produtos</h2>
                <ul class="list-group">
                    @foreach ($produtos as $produto)
                        <li class="list-group-item">{{ $produto['nome'] }} - R$ {{ number_format($produto['preco'], 2, ',', '.') }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Informações de Contato</h2>
                <ul class="list-group">
                    <li class="list-group-item">Telefone: {{ $contato['telefone'] }}</li>
                    <li class="list-group-item">Email: {{ $contato['email'] }}</li>
                    <li class="list-group-item">Endereço: {{ $contato['endereco'] }}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
        @include('components.footer')
    </footer>

    <!-- Incluindo Bootstrap JavaScript (opcional, dependendo do uso) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

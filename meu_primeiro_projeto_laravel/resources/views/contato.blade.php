<!-- resources/views/contato.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('components.header')

    <div class="container">
        <h1>Contato</h1>
        <p>Telefone: {{ $contato['telefone'] }}</p>
        <p>Email: {{ $contato['email'] }}</p>
        <p>Endereço: {{ $contato['endereco'] }}</p>
    </div>

    @include('components.footer')
</body>
</html>

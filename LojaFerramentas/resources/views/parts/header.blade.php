@if (Auth::check())
    <div class="container">
        
        <p>Bem-vindo, {{ Auth::user()->name }}! Você está autenticado.</p>
        <h4>Tipo usuario: {{ Auth::user()->tipo_usuario }}</h4>

        <div class="mt-4">
            <a href="{{ route('user.logout') }}" class="btn btn-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
@else
    <!-- Código para exibir quando o usuário não estiver autenticado -->
@endif

@extends('layouts.app')


@section('content')
<br><br><br>
<div class='container'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="/login"><h2>Login</h2></a>
<br>
<a href="/registro"><h2>Registro</h2></a>
</div>

@endsection
@extends('landing')
@section('nav')
<h1>Home</h1>
@auth
{{ auth()->user()->name }}
@endauth
@guest
<button>Iniciar sesión</button>
<button>Registro</button>
@endguest
<button>Editar perfil</button>
@endsection











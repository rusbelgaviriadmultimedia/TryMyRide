@extends('landing')
@section('nav')
<h1>Home</h1>
<p>Bienvenid@ {{ $nombre ?? "Invitado"}}  </p>

<button>Iniciar sesión</button>
<button>Registro</button>
<button>Editar perfil</button>
@endsection











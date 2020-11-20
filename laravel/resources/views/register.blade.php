@extends('landing')
@section('title', 'registro')
@section('nav')
<div class="register">
			<fieldset>
					<legend>Realiza tu registro ingresando los siguientes datos:</legend>
						<form method="POST" action="{{ route('register') }}">
							@csrf
								<input type="text" name="nombre" placeholder="Usuario.." value="{{ old('nombre') }}" >
								{!! $errors->first('nombre', '<small>:message</small>')!!}
								<input type="email" name="correo" placeholder="Correo electronico.." value="{{ old('correo') }}" >
								{!! $errors->first('correo', '<small>:message</small>')!!}
								<input type="password" name="password" placeholder="Contraseña.." value="{{ old('password') }}">
								{!! $errors->first('password', '<small>:message</small>')!!}
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." value="{{ old('conf_pass') }}" >
								{!! $errors->first('conf_pass', '<small>:message</small>')!!}
							<p>Sus datos personales se usaran para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descriptos en nuestra <a href="" class="polipriv">politica de privacidad!</a></p>
								<input type="submit" name="btn-register" value="Registrar usuario">
						</form>
			</fieldset>
			<p><a href="/laravel/server.php/login" class="registrado">Ya estoy registrado!</a></p>
	</div>
	{{-- <ul>
		@forelse($register as $registerItem)
			<li>{{ $registerItem['title']}}</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	<ul> --}}
	@endsection
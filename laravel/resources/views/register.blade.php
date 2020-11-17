@extends('/template/nav')
@section('title', 'registro')
@section('nav')
<div class="register">
			<fieldset>
					<legend>Realiza tu registro ingresando los siguientes datos:</legend>
						<form name="register" method="post" action="">
								<input type="text" name="nombre" placeholder="Usuario.." required>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
								<input type="password" name="password" placeholder="Contraseña.." >
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
							<p>Sus datos personales se usaran para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta y para otros fines descriptos en nuestra <a href="" class="polipriv">politica de privacidad!</a></p>
								<input type="submit" name="btn-register" value="Registrar usuario">
						</form>
			</fieldset>
			<p><a href="/laravel/server.php/login" class="registrado">Ya estoy registrado!</a></p>
	</div>
	<ul>
		@forelse($register as $registerItem)
			<li>{{ $registerItem['title']}}</li>
		@empty
			<li>No hay proyectos para mostrar</li>
		@endforelse
	<ul>
	@endsection
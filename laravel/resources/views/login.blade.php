@extends('landing')
@section('title','Iniciar sesión')
@section('nav')
<div class="register">

				<fieldset>
					<legend>Formulario de Ingreso</legend>
						<form name="login" method="post" action="../../app/Http/Controllers/Controller.php">
								<input type="email" name="correo_log" placeholder="Correo electronico.." required>
								<input type="password" name="pass_log" placeholder="Contraseña.." required>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="nombre" value=" {$nombre ?? 'Jorge'}">
								<input type="hidden" name="correo" value="{ $correo ?? 'md@x.com'}">
								<input type="hidden" name="password" value=" {$password ?? '1234'}">

								<input type="submit" name="btn-login" value="Ingresar">
								<input type="reset" value="Cancelar">
						</form>
					</fieldset>
					<p><a href="/home" class="registrado">No estoy registrado!</a></p>
			</div>
@endsection
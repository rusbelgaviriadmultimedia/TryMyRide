
<nav  id="nav">

	<input type="submit" name="toggle" value="x" class="buttonOff" onclick="toggle()"/>
	<ul>
    <li class="{{ setActive('home') ? 'active' : '' }}"><a  href="/laravel/server.php">Home</a>
    </li>
	<li class="{{ setActive('login') ? 'active' : '' }}"><a href="/laravel/server.php/login">Ingresar</a>
		</li>
		<li class="{{ setActive('register') ? 'active' : '' }}"><a href="/laravel/server.php/register">Registrarse</a>
		</li>
		<li class="{{ setActive('perfil') ? 'active' : '' }}"><a href="/laravel/server.php/perfil">Editar perfil</a>
		</li>
	</ul>
</nav>

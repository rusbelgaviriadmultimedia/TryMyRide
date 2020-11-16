<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Rusbel</title>
</head>
<body>
	<div class="container">
		<header>
	    	<h1>Home</h1>
	    	<p>Bienvenid@ <?php echo $nombre ?? "Invitado"?> </p>
		    <figure>
		      <img class="logo1" src="" alt="Try My Ride">
		    </figure>
	  		<input type="submit" value="≡" class="buttonOn" onclick="toggle()" id="toggle"/>
	  		<nav  id="nav">
	       		<input type="submit" name="toggle" value="x" class="buttonOff" onclick="toggle()"/>
	      		<ul>
			        <li><a href="/">Home</a>
			        </li>
	        		<li><a href="/login">Ingresar</a>
	          		</li>
	          		<li><a href="/register">Registrarse</a>
	          		</li>
	          		<li><a href="/perfil">Editar perfil</a>
	          		</li>
	      		</ul>
	    	</nav>
	  </header>
	</div>
</body>
</html>
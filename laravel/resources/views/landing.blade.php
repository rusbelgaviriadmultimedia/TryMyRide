<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Prueba Rusbel')</title>
    <style>
    	*{color:#3C4858;
    	}
    	.active a {
    		color:#3fae2a;
    		text-decoration:none;
    	}
    </style>
</head>
<body>

	<div class="container">
		<header>
		    <figure>
		      <img class="logo1" src="" alt="Try My Ride">
		    </figure>
	  		<input type="submit" value="≡" class="buttonOn" onclick="toggle()" id="toggle"/>
	  		@include('template.nav')
	 	 </header>
	  @yield('nav')
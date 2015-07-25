<!Doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parallax y anchor</title>
</head>
<body>
	
	<nav>
		<a href="#section-1">Sección 1</a>
		<a href="#section-2">Sección 2</a>
		<a href="#section-3">Sección 3</a>
		<a href="#section-4">Sección 4</a>
		<a href="#section-5">Sección 5</a>
		<a href="#section-6">Sección 6</a>
	</nav>
	
	<section id="section-1" data-type="parallax" data-speed="4">
		<h1>Sección 1</h1>
	</section>
	
	<section id="section-2" data-type="parallax" data-speed="10">
		<h1>Sección 2</h1>
	</section>
	
	<section id="section-3"  data-type="parallax" data-speed="6">
		<h1>Sección 3</h1>
	</section>
	
	<section id="section-4" data-type="parallax" data-speed="6">
		<h1>Sección 4</h1>
	</section>
	
	<section id="section-5" data-type="parallax" data-speed="6">
		<h1>Sección 5</h1>
	</section>
	
	<section id="section-6" data-type="parallax" data-speed="6">
		<h1>Sección 6</h1>
	</section>
	
<style>
	body { margin:0; text-align: center; }
	section { 
		border: 1px solid red; 
		min-height: 100vh;
	}
	nav {
		position: fixed; right: 0; left: 0; top: 0; 
		padding: 0;
		background: rgba(0,0,0,0.5);
		height: 30px;
	}
	nav a {
		color: #fff; text-decoration: none;
	}
	h1 {
		margin-top: 3em;
	}
	section {
		background-size: cover;
	}
	#section-1 {
		background-image: url(img/auricular1.jpg);
	}
	#section-2 {
		background-image: url(img/camara2.jpg);
	}
	#section-3 {
		background-image: url(img/camara3.jpg);
	}
	#section-4 {
		background-image: url(img/lente.jpg);
	}
	#section-5 {
		background-image: url(img/nudo.jpg);
	}
	#section-6 {
		background-image: url(img/soga.jpg);
	}
</style>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/jquery.simpleparallax.js"></script>
<script src="js/jquery.smoothscrolling.js"></script>

<script>
	
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="carrito.css">
  <link rel="stylesheet" href="cart.css">
<!--   <link rel="stylesheet" href="css/index.css">
 -->
	<script src="JS/articulos.js"></script>
   <script src="js/cart.js" defer></script>
	<script src="js/cartService.js" defer></script>
	<title>articulos puntoJson-carrito></puntoJson-carrito></title>
</head>
<body>
  <header>
		<nav>
			<a href="cart.html"><img src="img/logo.png" alt="logo" id="LOGO"></a>
			<div>
				<a href="#"></a>
				<a href="#"></a>
				<a href="carrito.html" id="cart"><img src="img/shopping-cart.png" alt=""><span id="cuenta-carrito">0</span></a>
			</div>
		</nav>
	</header>
	
	<main>
		<p id="carrito-vacio">Ups! El carrito está vacío, <a href="cart.html">elige algunos productos</a></p>
		<section id="cart-container">
		</section>

  <section id="totales">
    <p>Total unidades: <span id="cantidad">0</span></p>
    <p>Total precio: $<span id="precio">0</span></p>
    <button disabled>Comprar</button>
    <button id="reiniciar">Reiniciar</button>
  </section>
</main>
	
</body>
</html>
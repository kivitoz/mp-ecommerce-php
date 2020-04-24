<?php
    // SDK de Mercado Pago
    require  'vendor/autoload.php';

    // Agrega credenciales
	MercadoPago\SDK::setAccessToken('APP_USR-7455310476774640-042418-208e377607b9c1e908f72d0c17be8715-469485398');
    

    $payment = MercadoPago\SDK::get(
        "/v1/payments/search",
        array(
            "external_reference" => "ABCD1234"
        )
    );

    $status = $payment['code'];

    

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Jekyll v3.8.6">
		<title>Checkout example · Bootstrap</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/checkout/">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
		<!--<link href="../css/style.css" rel="stylesheet">-->
		
		<!-- Favicons -->
		<link rel="apple-touch-icon" href="../images/apple-touch-icon.png" sizes="180x180">
		<link rel="icon" href="../images/favicon-32x32.png" sizes="32x32" type="image/png">
		<link rel="icon" href="../images/favicon-16x16.png" sizes="16x16" type="image/png">		
		<link rel="mask-icon" href="../images/safari-pinned-tab.svg" color="#563d7c">
		<link rel="icon" href="../images/favicon.ico">		
		<meta name="theme-color" content="#563d7c">
		
		<style>
		  .bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		  }

		  @media (min-width: 768px) {
			.bd-placeholder-img-lg {
			  font-size: 3.5rem;
			}
		  }
		</style>

		<title>DPP</title>
	</head>
	<body class="bg-light">
		<div class="container">
		  <div class="py-5 text-center">			 
			 <h2>Tienda e-commerce</h2>
			 <p class="lead">Su compra se completó correctamente.</p>
		  </div>
		  <div class="row">
			 <div class="col-md-4 order-md-2 mb-4">
				
			 </div>
		  </div>
		  <footer class="my-5 pt-5 text-muted text-center text-small">
			 <p class="mb-1">&copy; 2019 Tienda e-commerce</p>
			 <ul class="list-inline">
				<li class="list-inline-item"><a href="#">Contacto</a></li>
				<li class="list-inline-item"><a href="#">Terminos y Condiciones</a></li>
				<li class="list-inline-item"><a href="#">Soporte</a></li>
			 </ul>
		  </footer>
		</div>

	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	
	
  </body>
</html>
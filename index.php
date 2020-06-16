<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>JP serralheria</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Site desenvolvido para serralheria jp.">
		<meta name="keywords" content="JP,Serralheria, JPSerralheria, sbo serralheria, sbo portao, portão, estruturas, corrimão">
		<meta name="author" content="Julio Campos">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
	
		<div class="wrapper">
		
			<!-- header -->
			<?php include_once 'navbar.html';?>
			
			<!-- banner -->
			<div class="banner">
				<div class="container">
					<!-- heading -->
					<h2>Nós temos o melhor serviço</h2>
					<!-- sub heading -->
					<h3>Com o melhor preço</h3>
					<!-- access button -->
					<a href="#" class="btn btn-default">Veja nossos trabalhos</a>
				</div>
			</div>
			<!-- banner end -->
			
			<!-- works -->
			<div class="works" id="portao">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Nossos últimos trabalhos</h2>
					</div>
					<?php include_once 'portoes.html';?>			
				</div>
			</div>
			
			<!-- team -->
			<div class="team" id="sobre">
				<div class="container">
					<div class="title-about">
					<span style="font-size: 2em"class="title-about "> 
						<center>Sobre nós</center>
					</span>
					</div>
					<h2>
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				</h2>
				</div>
			</div>
			
			<?php include_once 'orcamento.php'?>
			
			<?php include_once 'footer.html'?>

		</div>
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	
</html>
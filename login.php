<?php 
	session_start();
	require_once 'session\conexao.php';
	if(isset($_SESSION['user'])){
		header("location: dashboard.php?login=sucesso");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once 'head.html';?>
</head>
<body>

<?php
        if (isset($_GET['login']) && $_GET['login'] == 'invalido'){ 
        echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-danger'>Usuário ou senha inválido.</div>";
           
        }elseif (isset($_GET['login']) && $_GET['login'] == 'unknowuser'){ 
            echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-danger'>Você não está logado!</div>";   
		}

    ?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form action="session\validacao.php" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51"> 
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="usuario" placeholder="Nome de usuário">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Lembrar-me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Esqueceu?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
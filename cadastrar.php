<?php require_once 'session/conexao.php';
    require_once 'session/auth_acess.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir portoões</title>
    <?php include_once 'head.html';?>
    <?php include_once 'session\auth_acess.php';?>
</head>

    <body>
	
    <?php
                            if (isset($_GET['upload']) && $_GET['upload'] == 'sucesso'){ 
                            echo " <div style='font-size:2.5rem; text-align:center;' class='bg-success'>Publicação efetuada com sucesso</div>";
                            }
                        ?>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="login100-form validate-form flex-sb flex-w" action="session/inserir_portao.php" method="post" enctype="multipart/form-data" name="cadastro">
                        <span class="login100-form-title p-b-51">
                            Cadastrar novo portão na galeria
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "title is required">
                            <input maxlength="20" class="input100" type="text"  id="titulo"  name="titulo" placeholder="digíte um nome do título"">
                            <span class="focus-input100"></span>
                        </div>
                        
                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "description is required">
                            <textarea maxlength="200" class="input100" id="descricao" type="text" rows="4" cols="50"" name="descricao" placeholder="digíte uma descrição para o produto" placeholder="descrição" ></textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "description is required">
                            <input value="Procurar" type="file" name="foto" />
                            <span class="focus-input100"></span>
                        </div>

                      

                        <div class="container-login100-form-btn m-t-17">
                        <input type="submit" name="cadastrar"  value="cadastrar" class="login100-form-btn">
                        </div>

                    </form>

                 </div>
		    </div>
	    </div>
	

	<div id="dropDownSelect1"></div>
    </body>
</html>


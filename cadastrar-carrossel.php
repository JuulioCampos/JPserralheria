<!DOCTYPE html>    


<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserir portoões</title>
    <?php include_once 'head.html';?>
    <?php include_once 'session\auth_acess.php';?>
</head>

<div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="login100-form validate-form flex-sb flex-w" action="session/inserir_carrossel.php" method="post" enctype="multipart/form-data" name="cadastro">
                        <span class="login100-form-title p-b-51">
                            Cadastrar nova imagem no carrossel
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate = "title is required">
                            <input maxlength="25" class="input100" type="text" name="titulo" placeholder="digíte um nome do título"">
                            <span class="focus-input100"></span>
                        </div>
                        
                        
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "description is required">
                            <textarea maxlength="50" class="input100" type="text" rows="4" cols="50"" name="descricao" placeholder="digíte uma descrição para o produto" placeholder="descrição" ></textarea>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 m-b-16">
                            <select  class="input100" name="ordem" value="ordem do carrossel">
                                <option>Selecione em  qual ordem</option>
                                <option id='1' value="1">1</option>
                                <option id='2' value="2">2</option>
                                <option id='3' value="3">3</option>
                                <option id='4' value="4">4</option>
                                <option id='5' value="5">5</option>
                            </select>
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

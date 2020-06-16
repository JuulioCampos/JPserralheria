<?php
    require_once 'session/conexao.php';
    require_once 'session/auth_acess.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="fonts\font-awesome-4.7.0\css\font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css\dashboard.css">
    <?php require_once "head.html";?>
</head>
<body>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="dashboard.php?page=cadastrar">Cadastrar nova imagem</a>
        <a href="dashboard.php?page=gerenciar">Gerenciar imagens</a>
        <a href="index.php">Voltar para o site</a>
        <a href="session/logout.php">Sair</a>
    </div>

    <span class="menubar-icon" onclick="openNav()"><img class="img-icon" src="img\icons\menu.svg" alt="menu"></span>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "auto";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <div class="container">
        <?php if(!isset($_GET['page'])) echo "<h1>Bem vindo ao dashboard. Aperte no menu ao lado</h1>"?>
    </div>
        <div class="iframe">
            <?php 
                if(isset($_GET['page']) && $_GET['page'] == 'cadastrar'){
                    echo "
                    <div class='embed-responsive embed-responsive-21by9'>
                        <iframe class='embed-responsive-item' src='cadastrar.php'></iframe>
                    </div>
                ";
                }
                elseif(isset($_GET['page']) && $_GET['page'] == 'gerenciar'){
                    echo "
                    <div class='embed-responsive embed-responsive-21by9'>
                        <iframe class='embed-responsive-item' src='gerenciar.php'></iframe>
                    </div>
                ";
                }else{
                    echo "";
                }
            ?>
        </div>


<body>
    
</body>
</html>
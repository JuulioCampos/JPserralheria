<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lista-portoes.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
 <?php require_once 'navbar.html';?>
<body>
    <div class="form-group input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        <input name="consulta" id="txt_consulta" class="search" placeholder="Consultar" type="text" class="form-control">
    </div>

    <?php 
    require_once 'session/conexao.php';

    $conexao = novaConexao();

    $sql = "SELECT id, titulo, descricao, imagem FROM portao"; 


    $resultado = $conexao->query($sql);

    $portoes = [];

    if($resultado->num_rows > 0 ){
        while($row = $resultado->fetch_assoc()){
            $portoes[] = $row;
        }
    }else if($conexao->error){
        echo 'Falha: '. $conexao->error;
    }
    $conexao->close();
    ?>
    <div class="container galeria">
        <div class="row">
            <?php foreach($portoes as $portao):?>
            <div class="col-md-3">
                <!-- work item -->
                <div id="<?= $portao['id'];?>" class="work-item image">
                    <!-- work details image -->
                   <img  class="img-responsive miniaturas" src="img/portoes/<?= $portao['imagem'];?>" alt="<?= $portao['titulo']?>">
                    <div class="card-footer">
                        <small class=" text-muted">     
                        <span class="id-portao">ID: <?= $portao['id'];?></span></small>
                    </div>
                </div>


            </div>
            <?php endforeach ?>
        </div>
    </div>

        
</body>
    <?php include_once 'footer.html'?>
</html>
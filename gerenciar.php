<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\bootstrap.min.css">
<link rel="stylesheet" href="css\gerenciar.css">
<link rel="stylesheet" href="css\lista-portoes.css>
<?php 
 require_once 'session/conexao.php';
 require_once 'session\auth_acess.php';
 $sql = "SELECT id, titulo, descricao, imagem FROM portao"; 

     $conexao = novaConexao();

     if(!isset($_GET['excluir']) || $_GET['excluir']){
        $excluirSQL = 'DELETE FROM portao WHERE id = ?';
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

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
                <div class="work-item image">
                    <!-- work details image -->
                   <img  class="img-responsive miniaturas" src="img/portoes/<?= $portao['imagem'];?>" alt="<?= $portao['titulo']?>">
                    <div class="card-footer">
                        <small class=" text-muted">     
                        <span class="id-portao">ID: <?= $portao['id'];?></span></small>
                    </div>
                    <div class="bg-danger">
                        <span class="remover-conteudo"><a href="gerenciar.php?excluir=<?= $portao['id']?>" 
                        class="btn btn-danger">Excluir</a></span>
                    </div>
                </div>


            </div>
            <?php endforeach ?>
        </div>
    </div>

        
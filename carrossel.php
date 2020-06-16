
<?php 
require_once 'session/conexao.php';
$conexao = novaConexao();

$sql = "SELECT id, titulo, descricao, imagem FROM carrossel"; 


$resultado = $conexao->query($sql);

$carrossel = [];

if($resultado->num_rows > 0 ){
    while($row = $resultado->fetch_assoc()){
        $carrossel[] = $row;
    }
}else if($conexao->error){
    echo 'Falha'. $conexao->error;
}
$conexao->close();
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php foreach($carrossel as $car):?>
        <div class="item <?php if($car['id']=='1') echo 'active';?>">
            <img src="img\carrossel\carrossel-img<?= $car['id']?>.jpeg" alt="<?= $car['titulo']?>">
        </div>
    <?php endforeach?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

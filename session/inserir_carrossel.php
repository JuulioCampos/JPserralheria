<?php
require_once 'conexao.php';

$conexao = novaConexao();

if(isset($_POST['cadastrar'])){
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $foto = $_FILES["foto"];


    if(!empty($foto['name'])){
        $largura = 1920;
        $altura = 1080;
        $tamanho = 1500000;

        $error = array();

        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "isso não é uma imagem.";
        }
        $dimensoes = getimagesize($foto["tmp_name"]);

        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
         if($foto["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }
        $ordemPost = $_POST["ordem"];
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = 'carrossel-img' ."$ordemPost" . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "../img/carrossel/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
            // Insere os dados no banco
            $sql = "INSERT INTO carrossel(id, titulo, descricao, imagem) VALUES ('$ordemPost','$titulo', '$descricao', '$nome_imagem')";

     
        
            // Se os dados forem inseridos com sucesso
            if ($sql){
                echo "<script> alert('Upload realizado com sucesso')</script>";
            }
        }
         // Se houver mensagens de erro, exibe-as
         if (count($error) != 0) {
            foreach ($error as $erro) {
                echo "<script> alert('$erro')</script>";
            }
        }
               $resultado = $conexao->query($sql);

            if($conexao->error){
                echo 'Falha: '. $conexao->error;
            }
            $conexao->close();
    }
}
?>

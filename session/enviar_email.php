<?php
ini_set('display_errors', 1);

error_reporting(E_ALL);

if(!isset($_REQUEST['contactphone']) || !isset($_REQUEST['contactMessage']) || !isset($_REQUEST['contactEmail']) || !isset($_REQUEST['contactName'])){
    header("Location: ../index.php?orcamento=erro");
    }else{
        header("Location: ../index.php?orcamento=sucesso");
    }
    //   <!-- codigo requisição -->
        
      $from = "jpserralheriasbo@gmail.com";
      $assunto = "Pedido de orçamento";
      $email = $_REQUEST['contactEmail'];
      $nome = $_REQUEST['contactName'];
      $cidade = $_REQUEST['contactcity'];
      $telefone = $_REQUEST['contactphone'];
      $mensagem = $_REQUEST['contactMessage'];

          $corpoEmail = "<strong> Mensagem de Contato  <br> <br></strong>";
          $corpoEmail .= "<strong> Nome: </strong> $nome";
          $corpoEmail .= "<br><strong> E-mail: </strong> $email";
          $corpoEmail .= "<br><strong> Telefone: </strong> $telefone";
          $corpoEmail .= "<br><strong> Cidade: </strong> $cidade";
          $corpoEmail .= "<br><strong> Mensagem: </strong> $mensagem";
          $header = "Content-Type: text/html; charset= utf-8 \n";
          $header .= "From: $email Reply-to: $email \n";


          @mail($from, $assunto, $corpoEmail, $header); ?>

<script>
 </script>



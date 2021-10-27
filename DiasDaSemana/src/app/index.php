<?php session_start();

$mensagem = '';
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <link href="style/style.css" rel="stylesheet" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"crossorigin="anonymous">
    
        <title>Dias da Semana</title>
    </head>    
    <body>
    <div class="ellipse">
    </div>
  
    <section class="glass">
    <h1>Dias da Semana</h1>
        <div class="perfil">
        </div>
         <form  action="php/mensagens.php" method="post" id="func" data-sb-form-api-token="API_TOKEN">  
        <select class="grup4"  id="tipo" name="tipo">
            <option value="0" selected>Domingo</option>
            <option value="1">Segunda</option>
            <option value="2">Terça</option>
            <option value="3">Quarta</option>
            <option value="4">Quinta</option>
            <option value="5">Sexta</option>
            <option value="6">Sábado</option>
        </select>
        <div class="message"> 
          <div class="alert alert-primary" id="conteudo" role="alert">
              <?php 
                  $mensagem = $_SESSION['dia'];
                  echo $mensagem
              ?>
          </div>
    
        </div>
        
        <button class="button" type="submit">Pesquisar</button>  
    </section>

    </form>
    <div class="ellipse2">
    </div>
    </body>
      <script src="js/manipulador.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>
</html>
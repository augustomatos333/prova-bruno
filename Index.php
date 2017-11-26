<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>YouTube</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Master.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    $url = 'http://localhost/YouTube';
     ?>
    <?php if(isset ($_GET['lingua'])=='ingles'){
      require_once 'ingles.php';
    } else {
      require_once 'portugues.php';
    }
    ?>
     <div class="row">
      <?php require_once 'navegacao.php'; ?>
     </div>

     <div class="container-fluid">
       <div class="row"> <!-- começa o row com a barra lateral e o conteudo -->
         <div class="lateral">
           <?php require_once 'menulateral.php'; ?>

         </div>

         <div class="conteudo col-lg-10">

         </div>
       </div> <!-- termina o row com a lateral e o conteudo -->
     </div> <!-- fim do container fluid -->



    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/java.js"></script>
  </body>
</html>

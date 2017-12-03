<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'imagenscategoria.php';
     require_once 'portugues.php';
     require_once 'linksvideos.php';
    $categoria = $_GET['cat'];
    $vid = $_GET['numvid'];
    ?>

    <?php if( isset($_GET['language'])=='ingles'){
      require_once 'ingles.php';
    } else {
      require_once 'portugues.php';
    }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <?php  echo'<title>'.$titulos[$categoria][$vid].'</title>';?>

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
     <div class="container-fluid">
       <div class="row">
        <?php require_once 'navegacao.php'; ?>
       </div>
       <div class="container">
       <div class="row videos-coments-descricao" style = " margin-top: 100px;">
            <?php require_once 'videoconteudo.php'; ?>
       </div>
       </div>
     </div> <!-- fim do container fluid -->

    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/java.js"></script>
  </body>
</html>

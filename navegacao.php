<?php
$url = 'http://localhost/YouTube';
 ?>
<nav class="navbar  navegacao">
  <div class=" col-lg-2 col-md-2 col-sm-4 col-xs-4 logo">
    <?php echo'<a  href="'.$url.'/index.php"><img src="img/logo.png" alt="YouTube"></a>'?>
  </div>
  <div class="col-lg-5 col-lg-offset-1  col-md-4 col-sm-7 col-xs-12 pesquisa">
    <div class="input-group">
          <input type="text" class="form-control" placeholder="  Pesquisar ">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
          </span>
      </div>
  </div>
  <div class=" btn-group col-lg-3 col-lg-offset-1  idioma" role: "group">
    <a href=" <?=$url?>/index.php"><button type="button" class="btn btn-default"><img src="img/br.png" alt="">&nbsp;PT-BR </button></a>
     <a href=" <?=$url?>/Index.php?lingua=ingles"><button type="button" class="btn btn-default"><img src="img/en.png" alt="">&nbsp;US-EN </button></a>
  </div>
</nav>

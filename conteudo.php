<?php
$url = 'http://localhost/YouTubeFinal';
$categoria = $_GET['cat'];
require_once 'imagenscategoria.php';
$lang = $_GET['language'];
if(($_GET['language'])=='ingles'){
  require_once 'ingles.php';
} else {
  require_once 'portugues.php';
}

if ($_GET['cat'] == 'musica') {
  echo '<h3 class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey;"><center>'.$lingua['tMusica'].'</center></h3>';

  for($i = 0; $i < 9; $i++){
  echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-12">';
  echo '<center><a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$musica[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'</h5></a></center>';
  echo '</div>';
    }
}elseif ($_GET['cat'] == 'esporte') {
  echo '<h3 class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey;"><center>'.$lingua['tEsporte'].'</center></h3>';

    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-12">';
    echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$esporte[$i].'" alt="" ><center><h5><center>'.$titulos[$categoria][$i].'</center></h5></a>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'jogo') {
    echo '<h3 class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey;"><center>'.$lingua['tJogo'].'</center></h3>';

    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-12">';
    echo '<center><a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$jogo[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'</h5></a></center>';
    echo '</div>';
      }

    }elseif ($_GET['cat'] == 'filme') {
      echo '<h3 class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey;"><center>'.$lingua['tFilme'].'</center></h3>';

      for($i = 0; $i < 9; $i++){
      echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-12">';
      echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$filme[$i].'" alt=""><center><h5>'.$titulos[$categoria][$i].'</h5></a>';
      echo '</div>';
      echo "";
        }

  }elseif ($_GET['cat'] == 'noticia') {
    echo '<h3 class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey;"><center>'.$lingua['tNoticia'].'</center></h3>';

    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-12">';
    echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$noticia[$i].'" alt=""><center><h5><center>'.$titulos[$categoria][$i].'</center></h5></a>';
    echo '</div>';
      }
  }


?>

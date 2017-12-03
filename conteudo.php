<?php
$url = 'http://localhost/YouTube';
$categoria = $_GET['cat'];
require_once 'imagenscategoria.php';
require_once 'portugues.php';

if ($_GET['cat'] == 'musica') {
  echo "<h3><center>Músicas</center></h3>";
   echo "<hr/>";
  for($i = 0; $i < 9; $i++){
  echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-8">';
  echo '<center><a href="'.$url.'/video.php?cat='.$categoria.'&numvid='.$i.'"><img src="'.$musica[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'</h5></a></center>';
  echo '</div>';
    }
}elseif ($_GET['cat'] == 'esporte') {
  echo "<h3><center>Esportes</center></h3>";
   echo "<hr/>";
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-8">';
    echo '<a href="'.$url.'/video.php?cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$esporte[$i].'" alt=""><center><h5><center>'.$titulos[$categoria][$i].'</center></h5></a>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'jogo') {
    echo "<h3><center>Jogos</center></h3>";
     echo "<hr/>";
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-8">';
    echo '<center><a href="'.$url.'/video.php?cat='.$categoria.'&numvid='.$i.'"><img src="'.$jogo[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'</h5></a></center>';
    echo '</div>';
      }

    }elseif ($_GET['cat'] == 'filme') {
      echo "<h3><center>Filmes</center></h3>";
       echo "<hr/>";
      for($i = 0; $i < 9; $i++){
      echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-8">';
      echo '<a href="'.$url.'/video.php?cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$filme[$i].'" alt=""><center><h5>'.$titulos[$categoria][$i].'</h5></a>';
      echo '</div>';
        }

  }elseif ($_GET['cat'] == 'noticia') {
    echo "<h3><center>Notícias</center></h3>";
     echo "<hr/>";
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4 col-md-4 col-sm-10 col-xs-8">';
    echo '<a href="'.$url.'/video.php?cat='.$categoria.'&numvid='.$i.'"><center><img src="'.$noticia[$i].'" alt=""><center><h5><center>'.$titulos[$categoria][$i].'</center></h5></a>';
    echo '</div>';
      }
  }


?>

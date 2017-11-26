<?php
require_once 'imagenscategoria.php';
require_once 'portugues.php';
  if ($_GET['cat'] == 'musica') {
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4">';
    echo '<a href="#"><center><img src="'.$musica[$i].'" alt=""><center><h4><center>Musica</center></h4></a>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'esporte') {
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4">';
    echo '<a href="#"><center><img src="'.$esporte[$i].'" alt=""><center><h4><center>Esporte</center></h4></a>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'jogo') {
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4">';
    echo '<center><a href="#"><img src="'.$jogo[$i].'" alt=""><h5>'.$titulo[$i].'</h5></a></center>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'filme') {
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4">';
    echo '<a href="#"><center><img src="'.$filme[$i].'" alt=""><center><h5><center>Filme</center></h5></a>';
    echo '</div>';
      }

  }elseif ($_GET['cat'] == 'noticia') {
    for($i = 0; $i < 9; $i++){
    echo '<div class="video1 col-lg-4">';
    echo '<a href="#"><center><img src="'.$noticia[$i].'" alt=""><center><h4><center>Notícia</center></h4></a>';
    echo '</div>';
      }
  }


?>

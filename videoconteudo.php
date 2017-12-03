<div class="col-lg-8 col-md-8">
   <div class="contentvideo col-lg-12">
     <div>
       <?php
      $lang = $_GET['language'];
        ?>
        <iframe width="854" height="480" src="<?=$videos[$categoria][$vid]?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
      </div>
       <h3><?= $titulos[$categoria][$vid]  ?></h3>
       <hr/>
       &nbsp;
       <div class=" descricao col-lg-12" >
         <div class="descricao1">
          <p><?= $lingua ['vDescricao']?></p>
          <button type="button" id="mostracoments" class="btn btn-danger"><?= $lingua ['vComentarios']?></button>
          &nbsp;
         </div>
         <div class="descricaobtn">
           <button type="button" id="mostrardescricao" class="btn btn-danger"><?= $lingua ['bDescricao']?></button>
         </div>
       </div>
   </div>

   <div class="coments  col-lg-7" >
        <div class="col-lg-l2  coments1">
          <hr/ class="">
          <h3><?= $lingua ['vComentarios']?></h3>
          &nbsp;
          <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Miguel</h4>
          <p>Vídeo muito bom!</p>
        </div>
        &nbsp;
        <div class="col-lg-l2 coments1">
          <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Juliano</h4>
          <p>Primeira vez que seus vídeos. Já me tornei fã, bom demais!</p>
        </div>

        &nbsp;
        <div class="col-lg-l2 coments1">
          <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Júlia</h4>
          <p>Saudades de quando você fazia vídeos bons...</p>
        </div>
        &nbsp;
        <div class="col-lg-l2 coments1">
          <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Maísa</h4>
          <p>Horrível!</p>
        </div>
        &nbsp;
        <div class="col-lg-l2 coments1">
          <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Bianca</h4>
          <p>Bom demais! Sempre assisto todos os seus vídeos!</p>
        </div>
</div>
</div>
&nbsp;
<button type="button" id="mostrarelacionado" class="btn btn-danger"><?= $lingua ['vRelacionados']?></button>
<div class=" relacionados  col-lg-3 col-md-3 col-sm-5 col-sm-offset-3 col-xs-6 col-xs-offset-2">
  &nbsp;
<?php
  echo '<h4><center>'. $lingua ['vRelacionados'].'<center><h4>';
  echo "&nbsp;";
  if ($categoria == 'musica') {
    for($i = 0; $i < 9; $i++){
      if ($i != $vid) {
     echo '<div class="col-lg-12">';
     echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$musica[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'<h5></a>';
     echo '</div>';
   }
  }
  }elseif ($categoria == 'esporte') {
    for($i = 0; $i < 9; $i++){
      if ($i != $vid) {
     echo '<div class="col-lg-12">';
     echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$esporte[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'<h5></a>';
     echo '</div>';
   }
  }
  }elseif ($categoria == 'jogo') {
    for($i = 0; $i < 9; $i++){
      if ($i != $vid) {
     echo '<div class="col-lg-12">';
     echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$jogo[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'<h5></a>';
     echo '</div>';
   }
  }
  }elseif ($categoria == 'filme') {
    for($i = 0; $i < 9; $i++){
      if ($i != $vid) {
     echo '<div class="col-lg-12">';
     echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$filme[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'<h5></a>';
     echo '</div>';
   }
  }
  }elseif ($categoria == 'noticia') {
    for($i = 0; $i < 9; $i++){
      if ($i != $vid) {
     echo '<div class="col-lg-12">';
     echo '<a href="'.$url.'/video.php?language='.$lang.'&cat='.$categoria.'&numvid='.$i.'"><img src="'.$noticia[$i].'" alt=""><h5>'.$titulos[$categoria][$i].'<h5></a>';
     echo '</div>';
   }
  }
      }

 ?>
</div>

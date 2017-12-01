<?php require_once 'imagenscategoria.php'; ?>
<?php require_once 'portugues.php'; ?>
<div class="row contentvideo col-lg-9">
    <div>
    <iframe width="854" height="480" src="https://www.youtube.com/embed/H-xlHSCRra0?ecver=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
   <h3>Top 20 Worst Guns and Weapons in Borderlands 2 #PumaCounts</h3>
   <hr style=" border: 1px solid lightgrey; width: 900px;">
   <div class=" descricao col-lg-7" >
     <h3>DESCRIÇÃO</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor felis nec purus eleifend, eu feugiat massa consequat. Etiam hendrerit malesuada massa quis iaculis. In efficitur porttitor varius. In rhoncus placerat porttitor. Etiam porttitor enim a augue lobortis congue. Phasellus id tellus arcu. Praesent feugiat elit nec lorem convallis dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu libero orci. Nullam at diam non turpis vestibulum pretium at ut ligula.</p>
      <hr style=" border: 1px solid lightgrey; width: 900px;">
   </div>
   <div class="coments col-lg-7" >
       <div class="col-lg-l2">
         <h3>COMENTARIOS</h3>
         &nbsp;
         <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Usuario</h4>
         <p>Vídeo muito bom!</p>
       </div>
       &nbsp;
       <div class="col-lg-l2">
         <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Usuario</h4>
         <p>Vídeo muito bom!</p>
       </div>
       &nbsp;
       <div class="col-lg-l2">
         <h4><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Usuario</h4>
         <p>Vídeo muito bom!</p>
       </div>

   </div>
</div>
<div class=" relacionados col-lg-3">
<?php
  echo '<h4><center>Relacionados<center><h4>';
  for($i = 0; $i < 9; $i++){
    if ($i != 0) {
   echo '<div class="col-lg-12">';
   echo '<a href="#"><center><img src="'.$jogo[$i].'" alt=""><center><h5><center>'.$titulo[$i].'</center></h5></a>';
   echo '</div>';
 }
}
 ?>
</div>

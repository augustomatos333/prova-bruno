$(document).ready(function(){
	$("#musica").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=musica')
  });

  $("#esporte").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=esporte')
  });

  $("#jogo").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=jogo')
  });

  $("#filme").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=filme')
  });

  $("#noticia").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=noticia')
  });

 });


function ajax(retorno, urll) {
  $.ajax({
    url : urll,
    success : function(result) {
      $(retorno).html(result);
    }
   });
}

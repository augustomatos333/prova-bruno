$(document).ready(function(){
	$("#musica").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=musica&language=')
  });

  $("#esporte").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=esporte&language=')
  });

  $("#jogo").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=jogo&language=')
  });

  $("#filme").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=filme&language=')
  });

  $("#noticia").click(function(){
    ajax('.conteudo', 'conteudo.php?cat=noticia&language=')
  });

	$('#mostrardescricao').click(function(){
     $('.descricao1').show();
     $('#mostrardescricao').hide();
   });

	 $('#mostracoments').click(function(){
			 $('.coments').show();
			 $('#mostracoments').hide();
		 });

		 $('#mostrarelacionado').click(function(){
				 $('.relacionados').show();
				 $('#mostrarelacionado').hide();
			 });

 });


 function ajax(retorno, urll) {
   var trad;
   trad = $('#urlphp').text();
   $.ajax({
     url : urll + trad,
     success : function(result) {
       $(retorno).html(result);
     }
    });
 }

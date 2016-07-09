$(document).ready(function(){

  $('.excluir').click(function(){
      if(!confirm('Tem certeza que deseja excluir?')){
          return false;
      }
  });

  $(".form_valida").submit(function(){
     if($('.form_valida .field_valida').val() == ""){
     	alert(' Nao pode ficar em branco');
     	return false;
     }
  });	
});


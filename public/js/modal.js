
    $('#modal__boton').click(function(){
      $('#modal').remove();
    });
  
  
  $(document).keyup(function(e){
    if (e.which==27) {
      $('#modal').remove();
    }
  })
  
  
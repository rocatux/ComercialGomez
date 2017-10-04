jQuery(document).on('submit','#formm', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'Tip-Usu/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){
			$('.botonm').val('Validando...');
		}
	})

	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			if(respuesta.tipo == 'Admin'){
				location.href = 'Tip-Usu/Admin/';

			}else if (respuesta.tipo == 'Usuario') {
				location.href = 'Tip-Usu/Usuario/';
			}

		}else{
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			$('.botonm').val('Iniciar Sesion');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	});
});

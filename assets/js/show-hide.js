$(document).ready(function(){
		$("#paciente").on( "click", function() {
			$('.user').show(); //muestro mediante id
			$('.doctor').hide(); //oculto mediante id
			$('.clinic').hide(); //muestro mediante clase
		 });
		$("#doctor").on( "click", function() {
			$('.user').hide(); //oculto mediante id
			$('.doctor').show(); //muestro mediante clase
			$('.clinic').hide(); //muestro mediante clase
		});
		$("#clinic").on( "click", function() {
			$('.user').hide(); //oculto mediante id
			$('.doctor').hide(); //muestro mediante clase
			$('.clinic').show(); //muestro mediante clase
		});
	});
// JavaScript Document


//Password validation kode ligger herunder
$(document).ready(function() {
	
	$('input[type=password]').keyup(function() {
		
		//Kode der bestemmer hvad der sker, når man begynder at skrive i feltet.
			//Tjek for 
		var pswd = $(this).val();
		
		if (pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		
	}).focus(function(){
		//Kode der bestemmer hvad der sker når man klikker i feltet. 
		$('#psw_info').show();
		
	
	}).blur(function(){
		//Kode der bestemmer hvad der sker, når man klikker ud af feltet.
		$('#psw_info').hide();
	});
	
});
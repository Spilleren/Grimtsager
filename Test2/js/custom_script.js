// JavaScript Document


//Password validation kode ligger herunder
$(document).ready(function() {
	
	$('input[type=password]').keyup(function() {
		
		//Kode der bestemmer hvad der sker, når man begynder at skrive i feltet.
			//Tjek for længde
		var pswd = $(this).val();
		
		if (pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
			//Tjek for bogstav
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}
		
			//Tjek for stort bogstav
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}
			
			//Tjek om password er ens
		//var password = document.getElementById("password"),
//		var confirm_password = document.getElementById("confirm_password");
		
		if ($('#password').val() == $('#confirm_password').val()) {
			$('#confirm').removeClass('invalid').addClass('valid');
		} else {
			$('#confirm').removeClass('valid').addClass('invalid');
		}
		
	}).focus(function(){
		//Kode der bestemmer hvad der sker når man klikker i feltet. 
		$('#psw_info').show();
		
	
	}).blur(function(){
		//Kode der bestemmer hvad der sker, når man klikker ud af feltet.
		$('#psw_info').hide();
	});
	
});
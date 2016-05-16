$(function(){
		$("#name").keyup(function(){
				if(!$("#name").val().match(/^[a-zA-Z'][a-zA-Z-' ]+[a-zA-Z']?$/)){
					$("#name").css("border-color","#ff0000");
					$("#name").next(".error").fadeIn().text("*Veuillez entrer Un Nom Valide");
				}else{
					$("#name").next(".error").fadeOut();
					$("#name").css("border-color","green");
				}
		});
		
		
		/*-------------tel----------------*/
		
		$("#tel").keyup(function(){
			if(!$("#tel").val().match(/^\+?(\d[\d\-\+\(\) ]{5,}\d$)/i)){
				$("#tel").css("border-color","#ff0000");
				$("#tel").next(".error").fadeIn().text("*Veuillez entrer Un Tel Valide");
		}
			else{
				$("#tel").next(".error").fadeOut();
				$("#tel").css("border-color","green");
			}
		});
		
		
		
		/*-------------Email----------------*/
		
		$("#email").keyup(function(){
			if(!$("#email").val().match(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i)){
				$("#email").css("border-color","#ff0000");
				$("#email").next(".error").fadeIn().text("*Veuillez entrer Un Email Valide");

		}
			else{
				$("#email").next(".error").fadeOut();
				$("#email").css("border-color","green");
			}
		});
		
		
		/*-------------Adresse----------------*/
		
		$("#adresse").keyup(function(){
			if(!$("#adresse").val().match(/.{15}/)){
				$("#adresse").css("border-color","#ff0000");
				$("#adresse").next(".error").fadeIn().text("*Veuillez entrer Une Adresse Valide");
		}
			else{
				$("#adresse").next(".error").fadeOut();
				$("#adresse").css("border-color","green");
			}
		});
		
		
		/*-------------motPasse----------------*/
		
		
		$("#pass").keyup(function(){
			if(!$("#pass").val().match(/^[A-Z][a-zA-Z0-9?@\.;:!_-]{8,12}$/)){
				$("#pass").css("border-color","#ff0000");
				$("#pass").next(".error").fadeIn().text("*Veuillez entrer Une Adresse Valide");
		}
			else{
				$("#pass").next(".error").fadeOut();
				$("#pass").css("border-color","green");
			}
		});
		
		
		
		
		
		
		
		$("#envoyer").click(function(){
			if(!$("#name").val().match(/^[a-zA-Z'][a-zA-Z-' ]+[a-zA-Z']?$/)){
				return false;
			}else if(!$("#tel").val().match(/^\+?(\d[\d\-\+\(\) ]{5,}\d$)/i)) {
				return false;
			}else if(!$("#email").val().match(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i)) {
				return false;
			}else if(!$("#adresse").val().match(/.{15}/)) {
				return false;
			}else if(!$("#pass").val().match(/^[A-Z][a-zA-Z0-9?@\.;:!_-]{8,12}$/)) {
				return false;
			}
			

			if($("#pass").val() != $("#pass1").val()){
				$("#pass1").css("border-color","#ff0000");
				$("#pass1").next(".error").fadeIn().text("*Mot de passe ne correspond pas au champ Mot de passe");
				return false;
			}
			else{
				$("#pass1").next(".error").fadeOut();
				$("#pass1").css("border-color","green");
				return true;
			}
			
			if($("#name").val() == ""){
				$(".emptyName").show().text("Champ Obligatoire");
			}
			
		});
		
		$("#clear").click(function(){
			$("#name").next(".error").fadeOut();
			$("#name").css("border-color","gray");
			
			$("#tel").next(".error").fadeOut();
			$("#tel").css("border-color","gray");
			
			$("#email").next(".error").fadeOut();
			$("#email").css("border-color","gray");
			
			$("#adresse").next(".error").fadeOut();
			$("#adresse").css("border-color","gray");
			
			$("#pass").next(".error").fadeOut();
			$("#pass").css("border-color","gray");
			
			$("#pass1").next(".error").fadeOut();
			$("#pass1").css("border-color","gray");
			
		});
		
});
function valida_campos() {
	var formulario = document.forms['cadastro'];
	var nome = formulario.nome.value;
	var apelido = formulario.apelido.value;
	var telefone = formulario.telefone.value;
	var email = formulario.email.value;
	var regex = /^\([0-9]{2}\) ?[0-9]{9}$/;
	var result = regex.test(telefone);
	
	if(nome.length < 5 || nome == null || nome.length > 100){
		if (nome.length > 100){
		alert("Nome deve conter no máximo 100 caracteres!");
		return false;	
		
		}else{

		alert("Nome deve conter no mínimo 5 caracteres");
		formulario.nome.focus();
		return false;
		}
	
	 }

	 else if(apelido.length < 4 || apelido == null || apelido.length > 50){
	 	
	 	if(apelido.length > 50){
		alert("Apelido deve conter no máximo 50 caracteres!");
		return false;	
		
		}

		else{

	 	alert("Apelido deve conter no mínimo 4 caracteres");
		formulario.apelido.focus();
		return false;
	 }
	}
	    else if(result != true){  
        	window.alert("O telefone é inválido! O telefone deve conter conter 11 dígitos numéricos sendo os dois primeiros dentro do (), exemplo: (00) 123456789");  
         	formulario.telefone.focus();
			return false;
        }  


	 else if(email.indexOf("@") == -1 || email.indexOf(".") == -1 || email == "" || email == null) {
		alert("Por favor, insira um e-mail válido.");
        formulario.email.focus();
        return false;
    }

}


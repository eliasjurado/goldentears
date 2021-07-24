function(){
	var formulario= document.getElementsByName('formulario')[0];
		elementos=formulario.frameElement,
		boton=document.getElementById('boton');
		
	var validarNombre= function(){
		if(formulario.name.value==0){
			alert("Completa el campo name");
		}
		
	};
		
	var validar=function(){
		validarNombre();	
	};
	formulario.addEventListener('submit',validar);	
}
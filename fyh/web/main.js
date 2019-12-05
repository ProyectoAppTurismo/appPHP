function listadoOpciones(formulario){
	var compania = formulario.company.value;
	var tipo = formulario.tipo.value;
	var precio = formulario.precio.value;
	var afluencia = formulario.afluencia.value;
	var categoria = formulario.categoria.value;

	alert("Esta es tu selección:\nCompañia: "+compania+"\nTipo: "+tipo+"\nPrecio: "
		+precio+"\nAfluencia: "+afluencia+"\nExperiencia: "+categoria);

	var confirmacion = confirm("¿Estas de acuerdo con tu elección?");

	if(confirmacion == false){
		formulario.reset();
	}
}
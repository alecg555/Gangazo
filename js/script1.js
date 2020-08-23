function validar(codigo){
	if(confirm("Esta seguro de eliminar el producto "+ codigo)){
		location.href ="scriptborrar.php?codigo=" + codigo;
	}
}
function validarformcrear(){
	var nombre = document.getElementById("nombre").value;
	var edad = document.getElementById("edad").value;
	if (nombre == "") {
		alert("Debe ingresar un nombre");
		return false;
	}
	if (edad == "") {
		alert("Debe ingresar la edad");
		return false;
	}
	return true;
}
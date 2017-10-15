function agregarLugar() {
	var codigoLugar = document.getElementById('txtCodigoLugar');
	var descripcionLugar = document.getElementById('txtDescripcionLugar');
	var tipoLugar = document.getElementById('txtTipoLugar');
	var formD = new FormData();
	var xhr = new XMLHttpRequest();

	formD.append('', codigoLugar);

	xhr.open('POST', '', true);
	xhr.onreadystatechange = function () {
		if(this.readyState == 4 && this.status == 200){
			lugarAgregado(this.responseText);
		}
	}
	//xhr.addEventListener('load', lugarAgregado(xhr.));
}

function lugarAgregado(){

}
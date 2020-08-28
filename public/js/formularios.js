var formulario = document.getElementById('formulario-suscripcion');
var campoEmail = document.getElementById('email-sus');
var regexEmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
var mensajeCampoEmail = document.querySelector(".respuesta");

formulario.onsubmit = function(event){
    event.preventDefault();
    if (campoEmail.value.trim() == "") {
        mensajeCampoEmail.innerHTML = "El campo email no puede estas vacio!!!";
    } else {
        var datosDelFormulario = new FormData(formulario);
    fetch('/suscribir',{
        method:'POST',
        body: datosDelFormulario
    })
    .then(function(response) {
        // if (!response.ok) throw Error(response.status);
        return response.json();
    })
    .then(function(data) {
        console.log(data);
    })
    .catch(function(error) {
        console.log(error);
    })
    formulario.reset();
}
    }
    
campoEmail.onblur = function () {
    if (this.value.trim() == "") {
        mensajeCampoEmail.innerHTML = "El campo email no puede estas vacio!!!";
    }else if (!regexEmail.test(this.value)) {
            mensajeCampoEmail.innerHTML = "El campo email no tiene el formato adecuado!!!";
    }else{
            mensajeCampoEmail.innerHTML = "" 
        }
}


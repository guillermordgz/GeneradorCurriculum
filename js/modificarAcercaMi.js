var nombre = document.getElementById('nombre');
var email = document.getElementById('email');
var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    let nombreVal = nombre.value;
    let emailVal = email.value;
    if (nombreVal == '' || emailVal =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro modificado con éxito.");
    }
    
}
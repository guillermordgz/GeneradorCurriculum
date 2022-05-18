var escuela = document.getElementById('escuela');
var grado = document.getElementById('grado');
var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    let escuelaVal = escuela.value;
    let gradoVal = grado.value;
    if (escuelaVal == '' || gradoVal =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro modificado con éxito.");
    }
    
}
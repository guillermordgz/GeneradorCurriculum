var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    if ($("#empresa").val() == '' || $("#puesto").val() =='' || $("#fechaInicio").val() == '' || $("#fechaFin").val() =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro creado con éxito.");
    }
    
}
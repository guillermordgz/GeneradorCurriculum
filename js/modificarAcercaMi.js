var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    if ($("#nombre").val() == '' || $("#email").val() =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro modificado con éxito.");
    }
    
}
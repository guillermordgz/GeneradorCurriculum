var nick = document.getElementById('nick');
var redSocial = document.getElementById('redSocial');
var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    let nickVal = nick.value;
    let redVal = redSocial.value;
    if (nickVal == '' || redVal =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro creado con éxito.");
    }
    
}
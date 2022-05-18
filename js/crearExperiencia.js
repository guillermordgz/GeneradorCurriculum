var empresa = document.getElementById('empresa');
var puesto = document.getElementById('puesto');
var fechaInicio = document.getElementById('fechaInicio');
var fechaFin = document.getElementById('fechaFin');
var enviar = document.addEventListener('submit', creado);

function creado(enviar){
    let empresaVal = empresa.value;
    let puestoVal = puesto.value;
    let fechaInicioVal = fechaInicio.value;
    let fechaFinVal = fechaFin.value;
    if (empresaVal == '' || puestoVal =='' || fechaInicioVal == '' || fechaFinVal =='' ) {
        enviar.preventDefault();
        enviar.stopPropagation();
        alert('Por favor rellene los campos');
    } else{
        alert("Registro creado con éxito.");
    }
    
}
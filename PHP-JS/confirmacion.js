function confirmacion(e){
    if (confirm("Contraseña cambiada con exito")){
    return true;
    } else {
    e.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".table_item__link");

for(var i=0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener('click',confirmacion);
}
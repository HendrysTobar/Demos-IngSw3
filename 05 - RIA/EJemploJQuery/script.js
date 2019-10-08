function cambiarColor()
{
    //Cambiar los colores de todos los bloques a un color dado
   /* var bloques = document.getElementsByClassName("caja");
    bloques.class.backgroundcolor = "blue";*/

    //Como yo ya tengo jQuery
    //Puedo usar el selector $
    //En este caso quiero seleccionar todos los que tengan la clase caja
    //el punto (.) significa clase CSS
    $(".caja").css("background-color", "blue");
}
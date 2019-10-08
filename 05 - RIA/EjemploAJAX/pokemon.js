function callback()
{
    //Hacer algo cuando la respuesta se recibe
    //Imprimir la respuesta en el cliente
    if(this.readyState == 4)
    {
        var pok = JSON.parse(this.responseText);

        document.getElementById("fotoPokemon").setAttribute("src", "img/"+pok.imagen);
        document.getElementById("nombrePokemon").innerHTML = pok.nombre;   
    }
}
/*
    Hacer una petición XHR al servidor
    Cambiar el pokemon según el JSON recibido
*/
function cambiarPokemon()

{
    //Paso 2 crear el objeto XHR
    var xhttp = new XMLHttpRequest();

    //Paso 2 crear el callback
    //El callback es una función que se ejecuta
    //cuando el estado de la petición ha 
    //cambiado a respuesta satisfactoria
    xhttp.onreadystatechange = callback;

    //Paso 3: Enviar la petición
    xhttp.open("GET", "pokemon.json");
    xhttp.send();



}
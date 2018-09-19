//
alert("Bienvenido a la página RIA");
//
function CalcularSiPuedoBeberRIA()
{
    //
    var edad = document.getElementById("txtEdad").value;
    //
    $("#canasta").load("calcularbebida.php?edad=" + edad);
}
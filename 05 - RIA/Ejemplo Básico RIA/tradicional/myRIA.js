//
alert("Bienvenido a la página RIA");
//
function getdata()
{
    //
    if (this.readyState == 4 && this.status == 200)
    {
        //
        document.getElementById("canasta").innerHTML = this.responseText;
    }    
}

//
function EnviarSolicitudXML(edad)
{
    //
     var xhttp = new XMLHttpRequest();
     //
     xhttp.onreadystatechange = getdata;
     //
     xhttp.open("GET", "calcularbebida.php?edad=" + edad);
     //
     xhttp.send();
}

//
function CalcularSiPuedoBeberRIA()
{
    //
    var edad = document.getElementById("txtEdad").value;
    //
    EnviarSolicitudXML(edad);

}
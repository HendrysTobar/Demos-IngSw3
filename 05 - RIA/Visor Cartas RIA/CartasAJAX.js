
//Función para hacer que la ejecución tarde unpoco para simular que hay retraso en el servidor
async function stall(stallTime = 3000) {
  await new Promise(resolve => setTimeout(resolve, stallTime));
}
async function loadDoc(v)
{    
  var loading = document.getElementById("loading");  
  var cardImgElem = document.getElementById("cardImg");

  cardImgElem.style.display = "none";
  loading.style.display = "block";
  

  await stall();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

           CargarCarta(this,v);
           loading.style.display = "none";
      }
    };
    xhttp.open("GET", "cartas.xml", true);
    xhttp.send();
    
 }

 function CargarCarta(xml, v) 
 {
  
  var i;

    var xmlDoc = xml.responseXML;
    var cardNameElem = document.getElementById("cardName");
    var cardImgElem = document.getElementById("cardImg");
    var cardTextoElem = document.getElementById("cardTexto");

    cardImgElem.style.display = "block";

    
    
    
    

    var x = xmlDoc.getElementsByTagName("Carta");
    for (i = 0; i <x.length; i++) 
    { 
      var id = x[i].getElementsByTagName("Numero")[0].childNodes[0].nodeValue;
      
      if(id == v)
      {
        cardNameElem.innerHTML = x[i].getElementsByTagName("Nombre")[0].childNodes[0].nodeValue;
        cardImgElem.setAttribute("src",x[i].getElementsByTagName("Imagen")[0].childNodes[0].nodeValue);
        cardTextoElem.innerHTML = x[i].getElementsByTagName("Texto")[0].childNodes[0].nodeValue;
      }        
    }
    
  }

  window.onload = function(){ loadDoc(0);};
function loadDoc(v)
{    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
           CargarCarta(this,v);
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

  loadDoc(0);
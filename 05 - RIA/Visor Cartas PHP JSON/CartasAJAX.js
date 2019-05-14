
//Función para hacer que la ejecución tarde unpoco para simular que hay retraso en el servidor
async function stall(stallTime = 1000) {
  await new Promise(resolve => setTimeout(resolve, stallTime));
}
async function loadDoc(v)
{    
  var loading = document.getElementById("loading");  
  var cardImgElem = document.getElementById("cardImg");
  
  loading.style.display = "block";
  
  await stall();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {

           CargarCarta(this.responseText,v);
           loading.style.display = "none";
      }
    };
    xhttp.open("GET", "getCarta.php?cartas="+v, true);
    xhttp.send();
    
 }

 
 function CargarCarta(cartaJson, v) 
 {
    var cartaSnippet = document.getElementById("cartaSnippet");
    var cartas = document.getElementById("cartas");
    var newCartaSnippet = cartaSnippet.cloneNode(true);
    newCartaSnippet.style.display = "block";

    var carta = JSON.parse(cartaJson);
    
    var cardNameElem = newCartaSnippet.querySelector("#cardName");
    var cardImgElem = newCartaSnippet.querySelector("#cardImg");
    var cardTextoElem = newCartaSnippet.querySelector("#cardTexto");

      

    if(cardImgElem != null)
        cardImgElem.style.display = "block";
    
    cardNameElem.innerHTML = carta.nombre;
    cardImgElem.setAttribute("src","./img/"+carta.img);
    cardTextoElem.innerHTML = carta.texto;   

    cartas.appendChild(newCartaSnippet);
    
  }

  window.onload = function(){ loadDoc(0);};
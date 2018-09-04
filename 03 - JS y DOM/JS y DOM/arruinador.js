



function toggleCachos(hide)
{
    
    var img = document.getElementById('imgCachos');
    var img2 = document.getElementById('imgNormal');
    if(hide == true)
    {
        img.style.display = 'none';  
        img2.style.display = 'block';  
    }
    else
    {
        img2.style.display = 'none';  
        img.style.display = 'block';   
    }
    hidden = hide; 
   
}


window.onload = function load()
{    
    toggleCachos(true);
}


var hidden = true;
function arruinarCara()
{
    hidden = !hidden;
    toggleCachos(hidden);
}
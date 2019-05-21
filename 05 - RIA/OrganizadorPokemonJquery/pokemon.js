var pokemones = ["Charizard","Charmander", "Clefairy", "Golduck", "Mankey", "Pikachu"];

window.onload = function(){
    pokemones.forEach(element => {
        AgregarPokemon(element);
        console.log("añadido "+ element);
        
    });
    
}

function AgregarPokemon(pokemon)
{
    //Clona el snippet
    var newPokemon = $("#snippetPokemon").clone();
    newPokemon.attr("id", pokemon)
    var image = newPokemon.find(".picture");
    image.attr('src', 'img/'+pokemon+'.png');
    var name = newPokemon.find("#nombre");
    name.html(pokemon);
    newPokemon.removeClass("snippet");

    newPokemon.draggable();
    newPokemon.appendTo("#listaPokemones");
    

    
}
var pokemones = ["Charizard","Charmander", "Clefairy", "Golduck", "Mankey", "Pikachu"];

window.onload = function(){
    pokemones.forEach(element => {
        AgregarPokemon(element);
        console.log("añadido "+ element);
        
    });

    //Hace que el contenedor de pokemones sea organizable,
    //Cuando se suelta el pokemon se lanza la función soltarPokemon
    $("#listaPokemones").sortable({update:soltarPokemon});
    $("#listaPokemones").disableSelection();

    
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

    
    newPokemon.appendTo("#listaPokemones");

    
}

function soltarPokemon(event, ui)
{
    new Audio("snd/12.mp3").play();

}


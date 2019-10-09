function comprarPokemon()
{
    var idPokemonAComprar = $("#idPokemon").text();
    $.ajax({
        type: "GET",
        url: "comprarPokemon.php",
        data: {"id":idPokemonAComprar},
        
        success: function (response) {
            alert("Se ha guardado el Pokemon");
        }
    });

}
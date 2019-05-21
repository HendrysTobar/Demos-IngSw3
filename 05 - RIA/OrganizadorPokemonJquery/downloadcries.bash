##Hola persona curiosa!, Qué bien que estés escudriñando este código
##Este script de bash permite descargar los 150 llantos de los pokemones del sitio pokemoncries
##Por 200PX adicionales. ¿Puedes hacer que cuando se organice el pokemon llore con su llanto respectivo?
##Sshh, este huevo de pascua es un secreto...

for i in {1..150}
do
	url="https://pokemoncries.com/cries/$i.mp3" 
	curl $url --output "cries/$i.mp3"
done


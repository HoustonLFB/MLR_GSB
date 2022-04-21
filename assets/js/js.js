//AFFICHAGE MSG ERREUR
function alertMauvaiseDate() {
    alert('La date de visite ne peut pas être ultérieur à la date de saisie.');
}
function alertDoubleProd() {
    alert('Les deux médicaments ne peuvent pas être les mêmes.');
}


//QUAND CHANGE CLICK SUR REMPLACANT
$(document).ready(function(){
    $('#remplaDemande').on('click', function(){
        //SI CHECKED OR NON
       if (document.getElementById("remplaDemande").checked == true) {
        $("#remplaDemande").after("<input type='text' name='remplaNom' id='remplaNom'>");
       }
       else {
        $("#remplaNom").remove();  
       }
    })
        
});

// RANGE COEF RAPPORT FORM
function showMainTstatValue(newValue)
{
 	document.getElementById("rangeShow").innerHTML = newValue;
}
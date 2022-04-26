//AFFICHAGE ERROR
function alertMauvaiseDate() {
    alert('La date de visite ne peut pas être ultérieur à la date de saisie.');
}
function alertDoubleProd() {
    alert('Les deux médicaments ne peuvent pas être les mêmes.');
}
function rapAdded() {
    alert('La rapport a bien été ajouté. ');
}

// RANGE COEF RAPPORT FORM
function showMainTstatValue(newValue)
{
 	document.getElementById("rangeShow").innerHTML = newValue;
}


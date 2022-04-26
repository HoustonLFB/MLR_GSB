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

//========== SIDE BAR =============
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  } 
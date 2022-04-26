// AFFICHAGE REMPLACANT BOX
$(document).ready(function(){
    $('#remplaDemande').on('click', function(){
        //SI CHECKED OR NON
       if (document.getElementById("remplaDemande").checked == true) {
        $("#Form2").append("<input type='text' name='remplaNom' id='remplaNom'>");
       }
       else {
        $("#remplaNom").remove();  
       }
    });
});
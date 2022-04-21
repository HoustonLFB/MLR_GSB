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

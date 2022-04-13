// $(document).ready(function(){
//     $("#remplaDemande").change(function(){
//         $("#remplaDemande").after("<input type='text' name='remplaNom' id='remplaNom'></input><br>");
//         $("#remplaDemande").remove();
//         $("#remplaNom").before("<input type='checkbox' name='remplaDemandeOff' id='remplaDemandeOff'>");
//     });
//     $("#remplaDemandeOff").change(function(){
//         $("#remplaNom").remove();
//     });
// });

$(document).ready(function(){
    $('.remplaON').on('click', function(){
        //ON
        $("#remplaDemande").after("<input type='text' name='remplaNom' id='remplaNom'><br>");
        $("#remplaDemande").removeClass("remplaON");
        $("#remplaDemande").addClass("remplaOff");
    })
    $('.remplaOff').on('click', function(){
        //OFF
        $("#remplaNom").remove();
    });
});
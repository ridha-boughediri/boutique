$(document).ready(function () {

    $(".check-out").click(function () {
                
        
        
        //testde recuperation de d'infos panier 
        let totalachat = $(this).attr("data-id");


        //testde recuperation de d'infos panier 
        let nompreoduit = $(this).attr("data-id");
        let qtecommande = $(this).attr("data-id");



        alert(totalachat);
    });

});


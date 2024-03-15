$(document).ready(function () {

    setInterval(get_rapports_speciaux,1000)

});


function get_rapports_speciaux() 
{

    $.ajax({
        headers: 
        {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/rapport_speciaux/ajax",
        data:{},

        success:function(data)
        {

            fit_commandes(data[0]);
            fit_livraisons(data[1]);
            fit_caisse(data[2]);
            fit_stock(data[3],data[4]) 

            //
        }
        //
    });
    
    //
}


//Commandes :

function fit_commandes(commandes)
{
    $("#commande_en_attente").text(commandes[0][0].nb)
    $("#commande_en_attente_mois").text(commandes[1][0].nb)

    $("#commande_annule").text(commandes[2][0].nb)
    $("#commande_annule_mois").text(commandes[3][0].nb)

    $("#commande_rejete").text(commandes[4][0].nb)
    $("#commande_rejete_mois").text(commandes[5][0].nb)

    $("#commande_valide").text(commandes[6][0].nb)
    $("#commande_valide_mois").text(commandes[7][0].nb)

    //
}

//Livraisons : 

function fit_livraisons(livraisons) 
{
    
    for (var i = 0; i < livraisons.length; i++) 
    {
        
        if (livraisons[i].statut=="en attente") 
        {
            livraisons[i].statut="en_attente"   
        }

        $("#livraison_"+livraisons[i].statut).text(livraisons[i].nb_livraison);

        //
    }

    //
}

//Caisse : 

function fit_caisse(caisse) 
{
    
    console.log(caisse.versements_aujoudhui);

    $("#caisse_aujoudhui").text( formatMoney(parseFloat(caisse.versements_aujoudhui)) +" DA" );
    $("#caisse_total").text( formatMoney(parseFloat(caisse.versement_total)) +" DA" );
    $("#caisse_reste").text( formatMoney(parseFloat(caisse.reste)) +" DA" );

    // body...
}


function fit_stock(stock,all) 
{
    
    for (var i = 0; i < stock.length; i++) 
    {

        $("#machine_"+stock[i].nom).text(stock[i].qte);
        /*$("#progressbar"+stock[i].nom).attr('class', 'progress-bar bg-primary w-'+stock[i].qte);*/

        //
    }


    //
}






function formatMoney(number)
{
    if(number>=0)
    {

        var ret = number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        
        return ret.substr(1);       
    }       
    else
    {
        var ret = number.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        
        return ret.substr(0,1)+ret.substr(2);       

    }
}


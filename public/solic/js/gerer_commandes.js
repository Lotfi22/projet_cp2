





function get_commande(objet) 
{
	var num_commande = $(objet).attr('num_commande');
    console.log(num_commande)

    window.location.href = '/commande/show/'+num_commande;

	

}

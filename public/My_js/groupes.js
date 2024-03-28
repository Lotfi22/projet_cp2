$(".invalid-feedback").hide();

function verif_capacite() 
{

	var capacite = parseInt($("#capacite").val());

	if (capacite<= 0)
	{

		$("#capacite").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		$("#ajout_enregistrer").prop('disabled', true);

		var msg = "entrez une valeur valide";

		$(".invalid-feedback").text(msg);

		$(".invalid-feedback").show(1000);
		//
	}
	else
	{

		$("#capacite").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");		

		$("#ajout_enregistrer").prop('disabled', false);

		$(".invalid-feedback").hide(1000);

		//
	}

	// body...
}

function supprimer_groupe(objet)
{

	var id = $(objet).attr('identifiant');

   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/groupes/delete/ajax",
        data:{id_groupe:id},
        /*fin FrontEnd*/

        success:function(data)
        {
        	
        	console.log(data);

        	var id_ligne = "#ligne"+data.id;

			$(id_ligne).css({ 'color': 'red', 'color': 'red'});
			
			/*<div id="nnotif" class="alert alert-{{ session()->get('notification.type') }}" style="text-align: center;">*/

			setTimeout(function()
			{
			    
				$(id_ligne).hide(1000);

			    //
			}, 1000);			


        	//
		}
		
	});	

	

	// body...
}

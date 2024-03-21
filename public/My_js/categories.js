$(".invalid-feedback").hide();

function verif_ages() 
{

	var age_min = parseInt($("#ajout_age_min").val());

	var age_max = parseInt($("#ajout_age_max").val());

	if (age_min>age_max)
	{

		$("#ajout_age_min").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		$("#ajout_age_max").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		$("#ajout_enregistrer").prop('disabled', true);

		var msg = "L'age minimum doit être inférieur a l'âge maximum";

		$(".invalid-feedback").text(msg);

		$(".invalid-feedback").show(1000);
		//
	}
	else
	{

		$("#ajout_age_min").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");

		$("#ajout_age_max").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");		

		$("#ajout_enregistrer").prop('disabled', false);

		$(".invalid-feedback").hide(1000);

		//
	}

	// body...
}



function supprimer_categorie(objet)
{

	var id = $(objet).attr('identifiant');

   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/categories/delete/ajax",
        data:{id_categorie:id},
        /*fin FrontEnd*/

        success:function(data)
        {
        	
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


 
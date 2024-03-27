$(".invalid-feedback").hide();

function verif_dates() 
{

  var date_debut = new Date($("#ajout_date_debut").val());

  var date_fin = new Date($("#ajout_date_fin").val());

  if (date_debut > date_fin) 
  {
      $("#ajout_date_debut").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

      $("#ajout_date_fin").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

      $("#ajout_enregistrer").prop('disabled', true);

      var msg = "La date de début doit être antérieure à la date de fin";

      $(".invalid-feedback").text(msg);

      $(".invalid-feedback").show(1000);

  } 
  else 
  {
      $("#ajout_date_debut").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");

      $("#ajout_date_fin").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");

      $("#ajout_enregistrer").prop('disabled', false);

      $(".invalid-feedback").hide(1000);
  }

}

function supprimer_evenement(objet)
{
	  var id = $(objet).attr('identifiant');
   	
    $.ajax({
      
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },  

        type:"POST",

        url:"/admin/evenements/delete/ajax",

        data:{id_evenement:id},

        success:function(data)
        {
        	console.log(data);

        	var id_ligne = "#ligne"+data.id;

			    $(id_ligne).css({ 'color': 'red', 'color': 'red'});
			
			    setTimeout(function()
			    {
				      $(id_ligne).hide(1000);
			    }, 1000);	

		    }
		
	        });	

}

function restaurer_evenement(objet){

	  var id = $(objet).attr('identifiant');
	
	  $.ajax({

        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }, 

        type:"POST",

        url:"/admin/evenements/restore/ajax",

        data:{id_evenement:id},


        success:function(data)
        {
        	console.log(data);
 
        	var id_ligne = "#ligne"+data.id;
			

			    $(id_ligne).css({ 'color': 'red', 'color': 'red'});
			
			    setTimeout(function()
			    {
				    $(id_ligne).hide(1000);
			    }, 1000);	

		    }
		
	        });	
          
}
$(".invalid-feedback").hide();





//Fonction pour supprimer une facture
function supprimer_facture(objet)
{

	var id = $(objet).attr('identifiant');

   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/factures/delete/ajax",
        data:{id_facture:id},
        

        success:function(data)
        {
        	
        	console.log(data);

        	var id_ligne = "#ligne"+data.id;

			$(id_ligne).css({ 'color': 'red', 'color': 'red'});
			

			setTimeout(function()
			{
			    
				$(id_ligne).hide(500);

			    
			}, 50);			


        	//
		}
		
	});	

}

function restaurer_facture(objet)
{

	var id = $(objet).attr('identifiant');
	
	$.ajax({
		  headers: 
		  {
			 'X-CSRF-TOKEN': $('input[name="_token"]').val()
		  },                    
		  type:"POST",
		  url:"/admin/factures/restore/ajax",
		  data:{id_facture:id},
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
		}, 1000);     
	  }
	  
	}); 

}

 
function supprimer_seance(objet)
{
	  var id = $(objet).attr('identifiant');
   	
    $.ajax({
      
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },  

        type:"POST",

        url:"/admin/seances/delete/ajax",

        data:{id_seance:id},

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

function restaurer_seance(objet){

	  var id = $(objet).attr('identifiant');
	
	  $.ajax({

        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }, 

        type:"POST",

        url:"/admin/seances/restore/ajax",

        data:{id_seance:id},


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
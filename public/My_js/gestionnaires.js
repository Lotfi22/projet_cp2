function supprimer_gestionnaire(objet)
{
	var id = $(objet).attr('identifiant');
   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/gestionnaires/delete/ajax",
        data:{id_gestionnaire:id},
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


        	//
		}
		
	});	

	

	// body...
}
function restaurer_gestionnaire(objet){

	var id = $(objet).attr('identifiant');
	
	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/gestionnaires/restore/ajax",
        data:{id_gestionnaire:id},
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
$(".invalid-feedback").hide();
$(".valid-feedback").hide();


function validatePassword() {
    var password = document.getElementById("ajout_password").value;
    
    var confirm_password = document.getElementById("ajout_confirm_password").value;
    if(password !== confirm_password) {
        $("#ajout_confirm_password").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		$("#ajout_enregistrer").prop('disabled', true);

		var msg = "Les mots de passe ne correspondent pas! ";

		$(".invalid-feedback").text(msg);
		$(".invalid-feedback").show(1000);
        $(".invalid-feedback").hide(1000);
      
      
    } else {

       $("#ajout_confirm_password").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");	

		$("#ajout_enregistrer").prop('disabled', false);
        var msg = "Mot de passe confirmé!";
        $(".valid-feedback").text(msg);
        $(".valid-feedback").show(1000);
		$(".valid-feedback").hide(1000);
    
    }

}
function supprimer_admin(objet)
{
	var id = $(objet).attr('identifiant');
   	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admins/delete/ajax",
        data:{id_admin:id},
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
function restaurer_admin(objet){

	var id = $(objet).attr('identifiant');
	
	$.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admins/restore/ajax",
        data:{id_admin:id},
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
function validatePassword_edit() {
    var password = document.getElementById("new_password").value;
    var confirm_password = document.getElementById("edit_password_confirmation").value;
    if(password !== confirm_password) {
        $("#edit_password_confirmation").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		$("#edit_enregistrer").prop('disabled', true);

		var msg = "Les mots de passe ne correspondent pas! ";
		$(".invalid-feedback").text(msg);
		$(".invalid-feedback").show(1000);
        $(".invalid-feedback").hide(1000);
      
      
    } else {

       $("#edit_password_confirmation").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");	

	   $("#edit_enregistrer").prop('disabled', false);
	   var msg = "Mot de passe confirmé!";
        $(".valid-feedback").text(msg);
        $(".valid-feedback").show(1000);
		$(".valid-feedback").hide(1000);
    
    }

}

function verifier_password(obj){
	var idn =$(obj).attr('data-id');
	
	var idn2 = "old_password"+idn;

    var old_password1 = $(obj).attr('identifiant');

	var password = document.getElementById(idn2.toString()).value;

$.ajax({
 headers: 
 {
	'X-CSRF-TOKEN': $('input[name="_token"]').val()
 },                    
 type:"POST",
 url:"/admins/check_password/ajax",
 data:{new_password:password,old_password :old_password1},
 /*fin FrontEnd*/

 success:function(data)
 {
	 console.log(data);
	 var sh ="#old_password"+idn;
	 if (data.success) {
		 
	$("#edit_enregistrer").prop('disabled', false);
	$(sh).removeClass("is-invalid state-invalid").addClass("is-valid state-valid");	
	// var msg = "Mot de passe confirmé!";
	//  $(".valid-feedback").text(msg);
	//  $(".valid-feedback").show(2000);
	//  $(".valid-feedback").hide(1000);
		 
	 } else {
		 $(sh).removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

		 $("#edit_enregistrer").prop('disabled', true);
 
		//  var msg = "Les mots de passe ne correspondent pas! ";
		//  $(".invalid-feedback").text(msg);
		//  $(".invalid-feedback").show(2000);
		//  $(".invalid-feedback").hide(1000);
		 // Les mots de passe ne correspondent pas
		 // Affichez un message d'erreuralert("Les mots de passe ne correspondent pas.");
	 }

 }
 
});	
	
}
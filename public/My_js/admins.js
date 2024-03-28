$(".invalid-feedback").hide();
$(".valid-feedback").hide();


function validatePassword() {
    var password = document.getElementById("ajout_password").value;
    var confirm_password = document.getElementById("ajout_confirm_password").value;
    if (!password.trim() || !confirm_password.trim()) {
        // Champs vides, désactivez le bouton et colorer le champ
        $(enregistrer).prop('disabled', true);
        $(obj).removeClass("is-valid").addClass("is-invalid");
		return;
    }
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
function checkValidation(idn) {

	var enregistrer = "#edit_enregistrer"+idn;
    var verifierValue = $(enregistrer).attr('verifier_valeur');
    var validateValue = $(enregistrer).attr('validate_valeur');

    if (verifierValue === 'true' && validateValue === 'true') {
        $(enregistrer).prop('disabled', false);
    } else {
        $(enregistrer).prop('disabled', true);
    }
}

function verifier_password(obj) {
    var idn = $(obj).attr('data-id');
    var idn2 = "old_password" + idn;
    var old_password1 = $(obj).attr('identifiant');
    var password = document.getElementById(idn2.toString()).value;
	
    var enregistrer = "#edit_enregistrer" + idn;
	if (!password.trim()) {
        // Champ vide, désactivez le bouton et colorer le champ
        $(enregistrer).prop('disabled', true);
        $(obj).removeClass("is-valid").addClass("is-invalid");
	

        return;
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        type: "POST",
        url: "/admins/check_password/ajax",
        data: { new_password: password, old_password: old_password1 },
        success: function(data) {
            console.log(data);
            var sh = "#old_password" + idn;
            if (data.success) {
                $(enregistrer).attr('verifier_valeur', 'true');
                $(sh).removeClass("is-invalid state-invalid").addClass("is-valid state-valid");
            } else {
                $(enregistrer).attr('verifier_valeur', 'false');
                $(sh).removeClass("is-valid state-valid").addClass("is-invalid state-invalid");
            }
            checkValidation(idn); 
        }
    });
}

function validatePassword_edit(obj) {
    var idn = $(obj).attr('identifiant');
    var idn2 = "edit_password_confirmation" + idn;
    var idn3 = "new_password" + idn;
    var password = document.getElementById(idn3.toString()).value;
    var confirm_password = document.getElementById(idn2.toString()).value;
    var enregistrer = "#edit_enregistrer" + idn;
	var sh="#edit_password_confirmation"+idn;
	var changementMotDePasse = $("#changement_mot_de_passe" + idn);


	var changementMotDePasse = $("#changement_mot_de_passe" + idn);
	if (!changementMotDePasse.prop('checked')) {
        $(enregistrer).prop('disabled', false);
        return;
    }
	if (!password.trim() || !confirm_password.trim()) {
        // Champs vides, désactivez le bouton et colorer le champ
        $(enregistrer).prop('disabled', true);
        $(obj).removeClass("is-valid").addClass("is-invalid");
		return;
    }

    if (password === confirm_password) {
		$(sh).removeClass("is-invalid state-invalid").addClass("is-valid state-valid");	
        $(enregistrer).attr('validate_valeur', 'true');
        var msg = "Mot de passe confirmé!";
        $(".valid-feedback").text(msg);
        $(".valid-feedback").show(1000);
        $(".valid-feedback").hide(1000);
    } else {
		$(sh).removeClass("is-valid state-valid").addClass("is-invalid state-invalid");
        $(enregistrer).attr('validate_valeur', 'false');
        var msg = "Les mots de passe de confirmation ne correspondent pas!";
        $(".invalid-feedback").text(msg);
        $(".invalid-feedback").show(1000);
        $(".invalid-feedback").hide(1000);
    }
    
    checkValidation(idn); 
}

function togglePasswordFields(adminId) {
	var changementMotDePasse = $("#changement_mot_de_passe" + adminId);
	var newPasswordGroup = $("#new_password_group" + adminId);
	var confirmPasswordGroup = $("#edit_password_confirmation_group" + adminId);
	var enregistrer = $("#edit_enregistrer" + adminId);


	if (changementMotDePasse.prop('checked')) {
		newPasswordGroup.show();
		confirmPasswordGroup.show();
		$("#new_password" + adminId).prop('required', true);
		$("#edit_password_confirmation" + adminId).prop('required', true);
		$('#new_password'+ adminId).prop('disabled', false);
		$('#confirm_password'+ adminId).prop('disabled', false);
	} else {
		newPasswordGroup.hide();

		confirmPasswordGroup.hide();
		$("#new_password" + adminId).prop('required', false);
		$("#edit_password_confirmation" + adminId).prop('required', false);
		$(enregistrer).prop('disabled', false);
		$('#new_password'+ adminId).prop('disabled', true);
		$('#confirm_password'+ adminId).prop('disabled', true);
		


	}
}
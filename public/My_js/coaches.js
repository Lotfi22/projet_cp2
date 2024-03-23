$(".invalid-feedback").hide();

function isEmail(email) 
{
  var email_ref = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  return email_ref.test(email);
}

function verif_email()
{
  var email = $("#ajout_email").val()

  if (isEmail(email) === false)
  {

    $("#ajout_email").removeClass("is-valid state-valid").addClass("is-invalid state-invalid");

    $("#ajout_enregistrer").prop('disabled', true);

    var msg = "Votre email est invalide";

    $(".invalid-feedback").text(msg);

    $(".invalid-feedback").show(1000);

  }
  else
  {

    $("#ajout_email").removeClass("is-invalid state-invalid").addClass("is-valid state-valid");  

    $("#ajout_enregistrer").prop('disabled', false);

    $(".invalid-feedback").hide(1000);

  }
}
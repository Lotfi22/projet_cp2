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


function supprimer_coach(objet)
{
    var id = $(objet).attr('identifiant');
      $.ajax({

        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/coaches/delete/ajax",
        data:{id_coach:id},
        /*fin FrontEnd*/

        success:function(data)
        {
          console.log(data);

          var id_ligne = "#ligne"+data.id;

      $(id_ligne).css({ 'color': 'red', 'color': 'red'});
  
      setTimeout(function()
      {
        $(id_ligne).hide(1000);
      }, 1000);     


          //
    }
    
    
  }); 

  

  // body...
}


function restaurer_coach(objet){

  var id = $(objet).attr('identifiant');
  
  $.ajax({
        headers: 
        {
           'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },                    
        type:"POST",
        url:"/admin/coaches/restore/ajax",
        data:{id_coach:id},
        /*fin FrontEnd*/

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
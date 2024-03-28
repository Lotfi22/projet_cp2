<button type="button" class="btn-sm btn ripple btn-danger" data-target="#suppressionModal{{ $gestionnaire->id }}" data-toggle="modal">

    <i class="fa fa-trash"></i> Supprimer

</button> 

<!-- VERTICALLY CENETERED MODAL START -->
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-hidden="true" id="suppressionModal{{ $gestionnaire->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Souhaitez-vous supprimer "{{ $gestionnaire->nom }} {{ $gestionnaire->prenom }}"</h6>
                <button aria-label="Close" class="btn-close" data-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">

                <div class="btn-group col-md-6" role="group">
                    <button type="submit" class="btn btn-danger col-md-12"  onclick="supprimer_gestionnaire(this);" data-dismiss="modal" identifiant="{{ $gestionnaire->id }}"> Supprimer </button>
                </div>
                
                <div class="btn-group col-md-6" role="group">

                    <button type="button" class=" col-md-12 btn btn-primary"
                        data-dismiss="modal" role="button">Annuler</button>
                </div>

                {{--  --}}
            </div>
        </div>
    </div>
</div>
<!-- VERTICALLY CENETERED MODAL END -->


<button type="button" class="btn-sm btn btn-primary" data-toggle="modal"
    data-target="#exampleModal{{ $gestionnaire->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $gestionnaire->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations du gestionnaire</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/gestionnaire/gestionnaires/update/{{ $gestionnaire->id }}"
                    method="post" enctype="multipart/form-data" class="row col-md-12">
                    @csrf
                    
                    <div class="form-group col-md-6">
                        <label  class="label label-default" for="nom">Nom</label>
                        <input type="text" value="{{ $gestionnaire->nom ?? ''}}"
                            name="nom" required class="form-control"
                            id="nom">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="label label-default" for="prenom">Prenom</label>
                        <input type="text" value="{{ $gestionnaire->prenom ?? '' }}"
                            name="prenom"  required class="form-control"
                            id="prenom">
                    </div>


                    <div class="form-group col-md-6">
                        <label class="label label-default" for="date_naissance">Date naissance </label>
                        <input type="date"
                            value="{{ $gestionnaire->date_naissance?? '' }}"
                            name="date_naissance"  required  class="form-control"
                            id="date_naissance">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="genre">Genre</label><br>
                        <select id="genre" name="genre" required class="form-control"  tabindex="-1" aria-hidden="true">
                            <option  class ="form control" value="Homme"  {{ $gestionnaire->genre == 'Homme' ? 'selected' : '' }}>Homme</option>
                            <option  class ="form control" value="Femme"  {{ $gestionnaire->genre == 'Femme' ? 'selected' : '' }}>Femme</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="email">Email</label>
                        <input type="email" value="{{ $gestionnaire->email ?? ''}}"
                            name="email"  required class="form-control"
                            id="email" >
                    </div>
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="num_tel">Numéro de  téléphone</label>
                        <input type="texte" value="{{ $gestionnaire->num_tel ?? ''}}"
                            name="num_tel"  required class="form-control"
                            id="num_tel" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="old_password{{ $gestionnaire->id }}" class="label label-default">Ancien mot de passe</label>
                        <input type="password" name="old_password"  identifiant={{ $gestionnaire->password ?? '' }} id="old_password{{ $gestionnaire->id }}" data-id="{{ $gestionnaire->id ?? '' }}" class="form-control" onblur="verifier_password(this)" >
                    </div>
                    
                
                    <!-- Champ pour le nouveau mot de passe -->
                    <div class="form-group col-md-6">
                        <label for="changement_mot_de_passe{{$gestionnaire->id}}" class="label label-default">Changer le mot de passe</label><br>
                        <input type="checkbox" classe ="check_box_main" id="changement_mot_de_passe{{$gestionnaire->id}}" onchange="togglePasswordFields({{ $gestionnaire->id }})"> 
                    </div>

                        <!-- Champ de mot de passe -->
                        <div class="form-group col-md-6" id="new_password_group{{$gestionnaire->id}}" style="display: none;">
                            <label for="new_password{{$gestionnaire->id}}" class="label label-default">Nouveau mot de passe</label>
                            <input type="password" name="password" class="form-control" id="new_password{{$gestionnaire->id}}">
                        </div>

                        <!-- Champ pour la confirmation du nouveau mot de passe -->
                        <div class="form-group col-md-6" id="edit_password_confirmation_group{{$gestionnaire->id}}" style="display: none;">
                            <label for="edit_password_confirmation{{$gestionnaire->id}}" class="label label-default">Confirmer le nouveau mot de passe</label>
                            <input type="password" name="password_confirmation" class="form-control" id="edit_password_confirmation{{$gestionnaire->id}}" onblur="validatePassword_edit(this)" identifiant="{{$gestionnaire->id}}">
                            <p class="invalid-feedback"></p>
                            <p class="valid-feedback"></p>
                        </div>

                    
                    
                    <div class="form-group col-md-6">
                        <label class="label label-default"  for="num_tel_urgence">Numéro de téléphone d'urgence </label>
                        <input type="texte" value="{{ $gestionnaire->num_tel_urgence ?? ''}}"
                            name="num_tel_urgence" class="form-control"
                            id="num_tel_urgence" >
                    </div>
                    <div class="form-group col-md-6">
                        <label class="label label-default" for="adresse">Adresse </label>
                        <input type="texte" value="{{ $gestionnaire->adresse ?? ''}}"
                            name="adresse" required class="form-control"
                            id="adresse" >
                    </div>

                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-danger"
                            data-dismiss="modal" role="button">Annuler</button>
                    </div>
                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" id= "edit_enregistrer{{$gestionnaire->id}}" class="btn btn-primary col-md-12" validate_valeur="true" verifier_valeur="true">Enregistrer </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('My_js/gestionnaires.js') }}"></script>

<button type="button" class="btn-sm btn ripple btn-danger" data-target="#suppressionModal{{ $admin->id }}" data-toggle="modal">

    <i class="fa fa-trash"></i> Supprimer

</button> 

<!-- VERTICALLY CENETERED MODAL START -->
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-hidden="true" id="suppressionModal{{ $admin->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Souhaitez-vous supprimer "{{ $admin->nom }} {{ $admin->prenom }}"</h6>
                <button aria-label="Close" class="btn-close" data-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">

                <div class="btn-group col-md-6" role="group">
                    <button type="submit" class="btn btn-danger col-md-12"  onclick="supprimer_admin(this);" data-dismiss="modal" identifiant="{{ $admin->id }}"> Supprimer </button>
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
    data-target="#exampleModal{{ $admin->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $admin->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations d'admin</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admins/update/{{ $admin->id }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label  class="label label-default" for="nom">Nom</label>
                        <input type="text" value="{{ $admin->nom ?? ''}}"
                            name="nom" required class="form-control"
                            id="nom">
                    </div>

                    <div class="form-group">
                        <label class="label label-default" for="prenom">Prenom</label>
                        <input type="text" value="{{ $admin->prenom ?? '' }}"
                            name="prenom"  required class="form-control"
                            id="prenom">
                    </div>


                    <div class="form-group">
                        <label class="label label-default" for="date_naissance">Date naissance </label>
                        <input type="date"
                            value="{{ $admin->date_naissance?? '' }}"
                            name="date_naissance"  required  class="form-control"
                            id="date_naissance">
                    </div>
                    <div class="form-group">
                        <label class="label label-default" for="genre">Genre</label><br>
                        <select id="genre" name="genre" required class="form-control select form-select"  tabindex="-1" aria-hidden="true">
                            <option  class ="form control" value="Homme"  {{ $admin->genre == 'Homme' ? 'selected' : '' }}>Homme</option>
                            <option  class ="form control" value="Femme"  {{ $admin->genre == 'Femme' ? 'selected' : '' }}>Femme</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="label label-default" for="email">Email</label>
                        <input type="email" value="{{ $admin->email ?? ''}}"
                            name="email"  required class="form-control"
                            id="email" >
                    </div>
                    <div class="form-group">
                        <label for="old_password{{ $admin->id }}">Ancien mot de passe</label>
                        <input type="password" name="old_password"  identifiant={{ $admin->password ?? '' }} id="old_password{{ $admin->id }}" data-id="{{ $admin->id ?? '' }}" class="form-control" onblur="verifier_password(this)" required>
                    </div>
                
                    <!-- Champ pour le nouveau mot de passe -->
                    <div class="form-group">
                        <label for="new_password">Nouveau mot de passe</label>
                        <input type="password" name="password" class="form-control" id="new_password" >
                    </div>
                    <div class="form-group">
                        <label for="edit_password_confirmation">Confirmer le nouveau mot de passe</label>
                        <input type="password" name="password_confirmation" class="form-control" id="edit_password_confirmation" onblur="validatePassword_edit()" required>
                        <p class="invalid-feedback"></p>
                         <p class="valid-feedback"></p>
                    </div>
                    

                    <div class="form-group">
                        <label class="label label-default" for="num_tel">Numéro de  téléphone</label>
                        <input type="texte" value="{{ $admin->num_telephone ?? ''}}"
                            name="num_tel"  required class="form-control"
                            id="num_tel" >
                    </div>
                    <div class="form-group">
                        <label class="label label-default"  for="num_tel_urgence">Numéro de téléphone d'urgence </label>
                        <input type="texte" value="{{ $admin->num_urgence ?? ''}}"
                            name="num_tel_urgence" class="form-control"
                            id="num_tel_urgence" >
                    </div>
                    <div class="form-group">
                        <label class="label label-default" for="adresse">Adresse </label>
                        <input type="texte" value="{{ $admin->adresse ?? ''}}"
                            name="adresse" required class="form-control"
                            id="adresse" >
                    </div>

                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-danger"
                            data-dismiss="modal" role="button">Annuler</button>
                    </div>
                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" id= "edit_enregistrer" class="btn btn-primary col-md-12">Enregistrer </button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('My_js/admins.js') }}"></script>

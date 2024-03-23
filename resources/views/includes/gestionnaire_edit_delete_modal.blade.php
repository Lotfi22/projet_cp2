<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $gestionnaire->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $gestionnaire->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">souhaitez-vous supprimer le gestionnaire"{{  $gestionnaire->nom }} {{$gestionnaire->prenom}}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/gestionnaires/delete/{{ $gestionnaire->id }}" type="submit" class="btn btn-danger col-md-12"> Supprimer </a>
                </div>
                <div class="btn-group col-md-6" role="group">

                    <button type="button" class=" col-md-12 btn btn-primary"
                        data-dismiss="modal" role="button">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>



<button type="button" class="btn-sm btn btn-primary" data-toggle="modal"
    data-target="#exampleModal{{ $gestionnaire->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $gestionnaire->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations de gestionnaire</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/gestionnaires/update/{{ $gestionnaire->id }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" value="{{ $gestionnaire->nom ?? ''}}"
                            name="nom" required class="form-control"
                            id="nom">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" value="{{ $gestionnaire->prenom ?? '' }}"
                            name="prenom"  required class="form-control"
                            id="prenom">
                    </div>


                    <div class="form-group">
                        <label for="date_naissance">Date naissance </label>
                        <input type="date"
                            value="{{ $gestionnaire->date_naissance?? '' }}"
                            name="date_naissance"  required  class="form-control"
                            id="date_naissance">
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre</label>
                        <select id="genre" name="genre" required class="form-control">
                            <option disabled>Genre</option>
                            <option value="Homme" class="form-control" {{ $gestionnaire->genre == 'Homme' ? 'selected' : '' }}>Homme</option>
                            <option value="Femme" class="form-control" {{ $gestionnaire->genre == 'Femme' ? 'selected' : '' }}>Femme</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" value="{{ $gestionnaire->email ?? ''}}"
                            name="email"  required class="form-control"
                            id="email" >
                    </div>
                    <div class="form-group">
                        <label for="num_tel">Numéro de  téléphone</label>
                        <input type="texte" value="{{ $gestionnaire->num_tel ?? ''}}"
                            name="num_tel"  required class="form-control"
                            id="num_tel" >
                    </div>
                    <div class="form-group">
                        <label for="num_tel_urgence">Numéro de téléphone d'urgence </label>
                        <input type="texte" value="{{ $gestionnaire->num_tel_urgence ?? ''}}"
                            name="num_tel_urgence" class="form-control"
                            id="num_tel_urgence" >
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse </label>
                        <input type="texte" value="{{ $gestionnaire->adresse ?? ''}}"
                            name="adresse" required class="form-control"
                            id="adresse" >
                    </div>

                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-danger"
                            data-dismiss="modal" role="button">Annuler</button>
                    </div>
                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" class="btn btn-primary col-md-12">Enregistrer </button>
                    </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>

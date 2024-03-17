<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $evenement->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $evenement->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir supprimer l'evenement "{{ $evenement->nom }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/evenements/delete/{{ $evenement->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
                </div>
                <div class="btn-group col-md-6" role="group">

                    <button type="button" class=" col-md-12 btn btn-primary"
                        data-dismiss="modal" role="button">NON</button>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn-sm btn btn-primary" data-toggle="modal"
    data-target="#exampleModal{{ $evenement->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $evenement->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations d'événement</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/evenements/update/{{ $evenement->id }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Nom_evenement">Nom d'événement</label>
                        <input type="text" value="{{ $evenement->nom ?? ''}}"
                            name="nom" required class="form-control"
                            id="Nom_evenement">
                    </div>

                    <div class="form-group">
                        <label for="DateDebut_evenement">Date de début</label>
                        <input type="datetime-local" value="{{ $evenement->date_debut ?? '' }}"
                            name="date_debut"  required class="form-control"
                            id="DateDebut_evenement">
                    </div>

                    <div class="form-group">
                        <label for="DateFin_evenement">Date de fin</label>
                        <input type="datetime-local" value="{{ $evenement->date_fin ?? '' }}"
                            name="date_fin"  required class="form-control"
                            id="DateFin_evenement">
                    </div>

                    <div class="form-group">
                        <label for="Description_evenement">Description</label>
                        <textarea name="description" required class="form-control" id="Description_evenement">{{ $evenement->description ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Lieu_evenement">Lieu</label>
                        <input type="text" value="{{ $evenement->lieu ?? ''}}"
                            name="lieu" class="form-control"
                            id="Lieu_evenement">
                    </div>

                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" class="btn btn-primary col-md-12">
                            Enregistrer </button>
                    </div>
                    <div class="btn-group col-md-6" role="group">
                        <button type="button" class="col-md-12 btn btn-danger"
                            data-dismiss="modal" role="button">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
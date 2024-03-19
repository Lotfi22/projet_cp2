<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $adherant->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $adherant->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer l'adherant "{{ $adherant->nom }} ?" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/adherants/delete/{{ $adherant->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $adherant->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $adherant->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    adherant</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/adherants/update" method="post" enctype="multipart/form-data">

                    @csrf

                

                        <input type="hidden" value="{{ $adherant->id }}"
                            name="id" class="form-control"
                            id="id" placeholder=" ">
                    

                    <div class="form-group">

                        <label for="nom">Nom </label>

                        <input type="text" value="{{ $adherant->nom ?? '' }}"
                            name="nom" class="form-control"
                            id="nom" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom </label>
                        <input type="text" value="{{ $adherant->prenom ?? '' }}"
                            name="prenom" class="form-control"
                            id="prenom" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="date_naissance">Date de naissance </label>
                        <input type="date" value="{{ $adherant->date_naissance ?? '' }}"
                            name="date_naissance" class="form-control"
                            id="date_naissance" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="id_qr">QR code </label>
                        <input type="text" value="{{ $adherant->id_qr ?? '' }}"
                            name="id_qr" class="form-control"
                            id="id_qr" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="genre">Genre </label>
                        <input type="text" value="{{ $adherant->genre ?? '' }}"
                            name="genre" class="form-control"
                            id="genre" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="num_tel">Numéro téléphone </label>
                        <input type="text" value="{{ $adherant->num_tel ?? '' }}"
                            name="num_tel" class="form-control"
                            id="num_tel" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="num_tel_urgence">Numéro d'urgence </label>
                        <input type="text" value="{{ $adherant->num_tel_urgence ?? '' }}"
                            name="num_tel_urgence" class="form-control"
                            id="num_tel_urgence" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="dossier_medical">Dossier médical </label>
                        <input type="text" value="{{ $adherant->dossier_medical ?? '' }}"
                            name="dossier_medical" class="form-control"
                            id="dossier_medical" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse </label>
                        <input type="text" value="{{ $adherant->adresse ?? '' }}"
                            name="adresse" class="form-control"
                            id="adresse" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" value="{{ $adherant->email ?? '' }}"
                            name="email" class="form-control"
                            id="email" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="type_abonnement">Type d'abonnement </label>
                        <input type="text" value="{{ $adherant->type_abonnement ?? '' }}"
                            name="type_abonnement" class="form-control"
                            id="type_abonnement" placeholder=" ">
                    </div>

                    
                    <div class="btn-group col-md-6" role="group">
                        <button type="submit" class="btn btn-primary col-md-12">
                            Enregistrer </button>
                    </div>
                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-danger"
                            data-dismiss="modal" role="button">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

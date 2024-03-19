<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $abonnement->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $abonnement->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">êtes vous sûr de vouloir supprimer "{{ $abonnement->type_abonnement }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/abonnements/delete/{{ $abonnement->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $abonnement->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $abonnement->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier le type d'abonnement</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/abonnements/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">

                        <input type="hidden" name="id" value="{{ $abonnement->id }}" class="form-control" name="id">

                    </div>

                 <div class="form-group ">
                        <label class="label label-default" for="type_abonnement">Type Abonnement </label>
                        <input  type="text" value="{{ $abonnement->type_abonnement ?? '' }}" name="type_abonnement" placeholder="Type Abonnement " class="form-control" id="type_abonnement">
                    </div>

                    <div class="form-group ">
                        <label class="label label-default" for="nbr_seances">Nombre de séances </label>
                        <input  type="number" value="{{ $abonnement->nbr_seances ?? '' }}" name="nbr_seances" placeholder="Nombre de séances" class="form-control" id="nbr_seances">

                    </div>
                    <div class="form-group ">
                        <label class="label label-default" for="tarif">Tarif </label>
                        <input  type="number" value="{{ $abonnement->tarif ?? '' }}" name="tarif" placeholder="Tarif" class="form-control" id="tarif">
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

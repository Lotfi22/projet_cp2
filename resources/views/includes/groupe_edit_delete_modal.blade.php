


<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $groupe->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $groupe->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de vouloir supprimer le groupe "{{ $groupe->id }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/groupes/delete/{{ $groupe->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $groupe->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $groupe->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    groupe</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/groupes/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">
                            
                            <input type="hidden" name="id" value="{{ $groupe->id }}" class="form-control" name="id">  

                        </div>

                     <div class="form-group ">
                            <label class="label label-default" for="nom">Nom du groupe </label>
                            <input  type="string" value="{{ $groupe->nom ?? '' }}" name="nom" placeholder="Nom du groupe" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="id_coach">Coach </label>
                            <input  type="number" value="{{  $groupe->id_coach ?? ''  }}" name="id_coach" placeholder="id_coach" class="form-control" id="id_coach">

                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="id_sport">Sport </label>
                            <input  type="number" value="{{ $groupe->id_sport ?? '' }}" name="id_sport" placeholder="id_sport" class="form-control" id="id_sport">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="id_abonnement">L'abonnement </label>
                            <input  type="number" value="{{ $groupe->id_abonnement ?? '' }}" name="id_abonnement" placeholder="Droit Timbre" class="form-control" id="id_abonnement">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="capacite">Capacité du groupe</label>
                            <input  type="text" value="{{ $groupe->capacite ?? '' }}" name="capacite" placeholder="Etat paiement" class="form-control" id="capacite">
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

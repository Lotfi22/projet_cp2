<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $seance->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $seance->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de vouloir supprimer la seance "{{ $seance->id }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/seances/delete/{{ $seance->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $seance->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $seance->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    seance</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/seances/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">
                            
                            <input type="hidden" name="id" value="{{ $seance->id }}" class="form-control" name="id">  

                        </div>

                     <div class="form-group ">
                            <label class="label label-default" for="heure_debut">Heure de debut de seance </label>
                            <input  type="time" value="{{ $seance->heure_debut ?? '' }}" name="heure debut" placeholder="heure de debut de seance" class="form-control" id="heure_debut">
                        </div>

                        <div class="form-group ">
                            <label class="label label-default" for="nom">Heure de fin de seance </label>
                            <input  type="time" value="{{ $seance->heure_fin ?? '' }}" name="heure fin" placeholder="heure de fin de seance" class="form-control" id="heure_fin">
                        </div>  

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="id_groupe">Groupe </label>
                            <input  type="number" value="{{  $seance->id_groupe ?? ''  }}" name="id_groupe" placeholder="id_groupe" class="form-control" id="id_groupe">

                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="id_salle">Salle </label>
                            <input  type="number" value="{{ $seance->id_salle ?? '' }}" name="id_salle" placeholder="id_salle" class="form-control" id="id_salle">
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

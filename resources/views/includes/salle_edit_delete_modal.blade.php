<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $salle->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $salle->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir supprimer la salle "{{ $salle->id }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/salles/delete/{{ $salle->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $salle->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $salle->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    salle</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/salles/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">
                            
                            <input type="hidden" name="id" value="{{ $salle->id }}" class="form-control" name="id">  

                        </div>

                       <div class="form-group col-md-12 ">
                            <label class="label label-default" for="capacite">Capacité</label>
                            <input required type="number" value="{{ $salle->capacite ?? '' }}" name="capacite" placeholder="Capacité" class="form-control" id="capacite">
                        </div>
        
                        <div class="form-group col-md-12">
                            <label class="label label-default" for="nb_machine">Nombre machine</label>
                            <input required type="number" value="{{ $salle->nb_machine ?? '' }}" name="nb_machine" placeholder="Nombre Machine" class="form-control" id="nb_machine">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label label-default" for="superficie">Superficie </label>
                            <input required type="number" value="{{ $salle->superficie ?? '' }}" name="superficie" placeholder="Superficie" class="form-control" id="superficie">
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

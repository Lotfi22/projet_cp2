<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $facture->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $facture->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir supprimer la facture "{{ $facture->id }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body  row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/factures/delete/{{ $facture->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $facture->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $facture->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier
                    facture</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/factures/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">
                            
                            <input type="hidden" name="id" value="{{ $facture->id }}" class="form-control" name="id">  

                        </div>

                     <div class="form-group ">
                            <label class="label label-default" for="ht">Montant Hors Tax </label>
                            <input  required type="number" value="{{ $facture->ht ?? '' }}" name="ht" placeholder="Montant hors tax" class="form-control" id="ht">
                        </div>

                        <div class="form-group ">
                            <label class="label label-default" for="tva">Tva </label>
                            <input  required type="number" value="{{  $facture->tva ?? ''  }}" name="tva" placeholder="TVA" class="form-control" id="tva">

                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="versement">Versement </label>
                            <input required type="number" value="{{ $facture->versement ?? '' }}" name="versement" placeholder="Versement" class="form-control" id="versement">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="droit_timbre">Droit Timbre </label>
                            <input  required type="number" value="{{ $facture->droit_timbre ?? '' }}" name="droit_timbre" placeholder="Droit Timbre" class="form-control" id="droit_timbre">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="etat_paiement">Etat paiement</label>
                            <input required type="text" value="{{ $facture->etat_paiement ?? '' }}" name="etat_paiement" placeholder="Etat paiement" class="form-control" id="etat_paiement">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="id_gestionnaire">Id gestionnaire</label>
                            <input required  type="text" value="{{ $facture->id_gestionnaire ?? '' }}" name="id_gestionnaire" placeholder="Id Gestionnaire" class="form-control" id="id_gestionnaire">
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

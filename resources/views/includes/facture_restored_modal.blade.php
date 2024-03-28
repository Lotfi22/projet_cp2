
<button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
      data-target="#RestoreModal{{ $facture->id }}">
       <i class='fa fa-trash-restore'></i> Restore
  </button>

                                            <div class="modal fade" id="RestoreModal{{ $facture->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centred " role="document">
                                                    <div class="modal-content" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">êtes vous sûr de vouloir restaurer la facture "{{ $facture->id }}" ?</h5>

                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body  row col-md-12">

                                                            <div class="btn-group col-md-6" role="group">
                                                               <button type="submit" class="btn btn-primary col-md-12"  onclick="restaurer_facture(this);" data-dismiss="modal" identifiant="{{ $facture->id }}"> Oui </button>
                                                            </div>
                                                            <div class="btn-group col-md-6" role="group">

                                                                <button type="button" class=" col-md-12 btn btn-danger"
                                                                    data-dismiss="modal" role="button">NON</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
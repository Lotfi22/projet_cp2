<button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
      data-target="#RestoreModal{{ $seance->id }}">
       <i class='fa fa-trash-restore'></i> Restore
  </button>

                                            <div class="modal fade" id="RestoreModal{{ $seance->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir restorer la séance "{{ $seance->id }}" ?</h5>

                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body  row col-md-12">

                                                            <div class="btn-group col-md-6" role="group">
                                                                <a href="/admin/seances/restore/{{ $seance->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
                                                            </div>
                                                            <div class="btn-group col-md-6" role="group">

                                                                <button type="button" class=" col-md-12 btn btn-primary"
                                                                    data-dismiss="modal" role="button">NON</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
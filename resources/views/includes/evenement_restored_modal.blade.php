    <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#RestoreModal{{ $evenement->id }}">
        
        <i class='fa fa-trash-restore'></i> Restore
    
    </button>

    <div class="modal fade" id="RestoreModal{{ $evenement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
        <div class="modal-dialog" role="document">
            
            <div class="modal-content" >
                
                <div class="modal-header">
                                                            
                    <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de vouloir restorer l'événement "{{ $evenement->id }}" ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        
                        <span aria-hidden="true">&times;</span>
                            
                    </button>
                                                        
                </div>

                                                        
                <div class="modal-body  row col-md-12">

                    <div class="btn-group col-md-6" role="group">
                        
                        <a href="/admin/evenements/restore/{{ $evenement->id }}" type="submit" onclick="restaurer_evenement(this);" class="btn btn-danger col-md-12">OUI</a>

                    </div>
                    
                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-primary" data-dismiss="modal" role="button">NON</button>
                    
                    </div>
                
                </div>

            </div>
                                                
        </div>
                                            
    </div>
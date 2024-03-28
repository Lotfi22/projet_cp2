    <button type="button" class="btn-sm btn btn-danger" data-toggle="modal" data-target="#suppressionModal{{ $seance->id }}">
        
        <i class="fa fa-trash"></i> Supprimer

    </button>

    <div class="modal fade" id="suppressionModal{{ $seance->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog" role="document">

            <div class="modal-content" >

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de vouloir supprimer la séance "{{ $seance->id }}" ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body  row col-md-12">

                    <div class="btn-group col-md-6" role="group">

                        <a href="/admin/seances/delete/{{ $seance->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
                
                    </div>

                    <div class="btn-group col-md-6" role="group">

                        <button type="button" class=" col-md-12 btn btn-primary" data-dismiss="modal" role="button">NON</button>
                
                    </div>

                </div>

            </div>

        </div>

    </div>



    <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $seance->id }}">
        
        <i class="fa fa-pencil"></i> Modifier

    </button>

    <div class="modal fade" id="exampleModal{{ $seance->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog" role="document">
        
            <div class="modal-content">
            
                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Modifier séance</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

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

                                <label class="label label-default" for="heure_debut">Heure debut </label>

                                <input  required type="time" value="{{ $seance->heure_debut ?? '' }}" name="heure_debut" placeholder="Heure debut" class="form-control" id="heure_debut">
                        
                            </div>

                            <div class="form-group ">

                                <label class="label label-default" for="heure_fin">Heure fin </label>
                            
                                <input  required type="time" value="{{  $seance->heure_fin ?? ''  }}" name="heure_fin" placeholder="Heure fin" class="form-control" id="heure_fin">

                            </div>

                            <div class="col-md-6">

                               <label class="label label-default" for="groupe">selectionner un groupe </label> <br>
                        
                                <select required name="id_groupe" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="groupe">                                      
                                    
                                    @foreach ($groupes as $groupe)
                                        <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
                                    @endforeach 

                                </select>

                            </div> 
                            
                            <div class="col-md-6">

                                <label class="label label-default" for="salle">selectionner une salle </label> <br>
                               
                                <select required name="id_salle" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="salle">                                      
                                    
                                    @foreach ($salles as $salle)
                                        <option value="{{ $salle->id }}">{{ $salle->type_salle }}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="btn-group col-md-6" role="group">
                                
                                <button type="submit" class="btn btn-primary col-md-12">Enregistrer </button>

                            </div>

                            <div class="btn-group col-md-6" role="group">

                                <button type="button" class=" col-md-12 btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                            
                            </div>

                    </form>

                </div>

            </div>

        </div>
        
    </div>

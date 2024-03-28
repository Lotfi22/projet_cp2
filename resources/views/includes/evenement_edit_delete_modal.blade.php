    <button type="button" class="btn-sm btn btn-danger" data-toggle="modal" data-target="#suppressionModal{{ $evenement->id }}">
        
        <i class="fa fa-trash"></i> Supprimer

    </button>

    <div class="modal fade" id="suppressionModal{{ $evenement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog" role="document">
            
            <div class="modal-content" >
            
                <div class="modal-header">
                
                    <h5 class="modal-title" id="exampleModalLabel">Êtes vous sur de vouloir supprimer l'événement"{{ $evenement->id }}" ?</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                        <span aria-hidden="true">&times;</span>
                 
                    </button>
                </div>

            <div class="modal-body  row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    
                    <a href="/admin/evenements/delete/{{ $evenement->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
                
                </div>
                
                <div class="btn-group col-md-6" role="group">

                    <button type="button" class=" col-md-12 btn btn-primary" data-dismiss="modal" role="button">NON</button>
                
                </div>
                
            </div>
        
        </div>
    
    </div>

</div>



    <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $evenement->id }}">
        
        <i class="fa fa-pencil"></i> Modifier
    
    </button>

    <div class="modal fade" id="exampleModal{{ $evenement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
        <div class="modal-dialog" role="document">
        
            <div class="modal-content">
            
                <div class="modal-header">
                
                    <h5 class="modal-title" id="exampleModalLabel">Modifier événement</h5>
                 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                        <span aria-hidden="true">&times;</span>
                    
                    </button>
            
                </div>

            <div class="modal-body">

                <form action="/admin/evenements/update" method="post" enctype="multipart/form-data">

                    @csrf

                        <div class="form-group ">
                            
                            <input type="hidden" name="id" value="{{ $evenement->id }}" class="form-control" name="id">  

                        </div>

                        <div class="form-group ">

                            <label class="label label-default" for="nom">Nom </label>

                            <input  required type="string" value="{{ $evenement->nom ?? '' }}" name="nom" placeholder="Nom d'événement" class="form-control" id="nom">
                        
                        </div>

                        <div class="form-group ">
                            
                            <label class="label label-default" for="date_debut">Date début </label>
                            
                            <input  required type="datetime-local" value="{{  $evenement->date_debut ?? ''  }}" name="date_debut" placeholder="Date de début d'événement" class="form-control" id="date_debut">

                        </div>

                        <div class="form-group ">

                            <label class="label label-default" for="date_fin">Date fin </label>
                            
                            <input required type="datetime-local" value="{{ $evenement->date_fin ?? '' }}" name="date_fin" placeholder="Date de fin d'événement" class="form-control" id="date_fin">
                        
                        </div>

                        <div class="form-group ">

                            <label class="label label-default" for="description">Description</label>

                            <input  required type="text" value="{{ $evenement->description ?? '' }}" name="description" placeholder="Description d'événement" class="form-control" id="description">
                        
                        </div>

                        <div class="form-group ">

                            <label class="label label-default" for="lieu">Lieu</label>

                            <input required type="string" value="{{ $evenement->lieu ?? '' }}" name="lieu" placeholder="Lieu de l'événement" class="form-control" id="lieu">
                        
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

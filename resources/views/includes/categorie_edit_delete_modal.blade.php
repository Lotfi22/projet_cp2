<button type="button" class="btn-sm btn ripple btn-danger" data-bs-target="#suppressionModal{{ $categorie->id }}" data-bs-toggle="modal">

    <i class="fa fa-trash"></i> Supprimer

</button>
                                    

<!-- VERTICALLY CENETERED MODAL START -->
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-hidden="true" id="suppressionModal{{ $categorie->id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">êtes vous sûr de vouloir supprimer  "{{ $categorie->nom }}</h6>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
            </div>
            <div class="modal-body">

                <div class="btn-group col-md-6" role="group">
                    <button type="submit" class="btn btn-danger col-md-12"  onclick="supprimer_categorie(this);" data-bs-dismiss="modal" identifiant="{{ $categorie->id }}"> Oui </button>
                </div>
                
                <div class="btn-group col-md-6" role="group">

                    <button type="button" class=" col-md-12 btn btn-primary"
                        data-bs-dismiss="modal" role="button">NON</button>
                </div>

                {{--  --}}
            </div>
        </div>
    </div>
</div>
<!-- VERTICALLY CENETERED MODAL END -->




<button type="button" class="btn-sm btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModal{{ $categorie->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $categorie->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Agent
                    categorie</h5>
                <button type="button" class="close"
                    data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="/admin/categories/update" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group ">

                            <input type="hidden" name="id" value="{{ $categorie->id }}" class="form-control" name="id">

                        </div>

                        <div class="form-group ">
                            <label class="label label-default" for="nom">NOM </label>
                            <input  type="text" value="{{ $categorie->nom ?? '' }}" name="nom" placeholder="Nom de la categorie" class="form-control" id="nom">
                        </div>

                        <div class="form-group ">
                            <label class="label label-default" for="description">Description </label>
                            <input  type="text" value="{{  $categorie->description ?? ''  }}" name="description" placeholder="Description" class="form-control" id="description">

                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="age_min">Age Minimum </label>
                            <input onkeyup="verif_ages();" type="number" value="{{ $categorie->age_min ?? '' }}" name="age_min" placeholder="Age Minimum" class="form-control" id="age_min">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="age_max">Age Maximum </label>
                            <input onkeyup="verif_ages();" type="number" value="{{ $categorie->age_max ?? '' }}" name="age_max" placeholder="Age Maximum" class="form-control" id="age_max">
                        </div>
                        <div class="btn-group col-md-6" role="group">
                            <button type="submit" class="btn btn-primary col-md-12">
                                Enregistrer </button>
                        </div>
                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class=" col-md-12 btn btn-danger"
                                data-bs-dismiss="modal" role="button">Fermer</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

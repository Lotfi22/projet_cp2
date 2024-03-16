<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $categorie->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $categorie->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">êtes vous sûr de vouloir supprimer la catégorie "{{ $categorie->nom }}" ?</h5>

                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body row col-md-12">

                <div class="btn-group col-md-6" role="group">
                    <a href="/admin/categories/delete/{{ $categorie->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
    data-target="#exampleModal{{ $categorie->id }}">
    <i class="fa fa-pencil"></i> Modifier
</button>

<div class="modal fade" id="exampleModal{{ $categorie->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier Agent
                    categorie</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
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
                            <input  type="number" value="{{ $categorie->age_min ?? '' }}" name="age_min" placeholder="Age Minimum" class="form-control" id="age_min">
                        </div>
                        <div class="form-group ">
                            <label class="label label-default" for="age_max">Age Maximum </label>
                            <input  type="number" value="{{ $categorie->age_max ?? '' }}" name="age_max" placeholder="Age Maximum" class="form-control" id="age_max">
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

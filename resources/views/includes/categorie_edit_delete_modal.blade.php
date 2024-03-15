<button type="button" class="btn-sm btn btn-danger" data-toggle="modal"
    data-target="#suppressionModal{{ $categorie->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<div class="modal fade" id="suppressionModal{{ $categorie->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir supprimer la catégorie "{{ $categorie->nom }}" ?</h5>

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
                <form action="/"method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom </label>
                        <input type="text" value="{{ $categorie->name ?? '' }}"
                            name="name" class="form-control"
                            id="exampleInputEmail1" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Login </label>
                        <input type="text" value="{{ $categorie->email ?? '' }}"
                            name="email" class="form-control"
                            id="exampleInputEmail1" placeholder=" ">
                    </div>

                    <div class="form-group">
                        <label for="categorie">Dépot</label>
                        
                        <select name="categorie" id="categorie" class="form-control">


                        </select>
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password </label>
                        <input type="text"
                            value="{{ $categorie->password_text ?? '' }}"
                            name="password" class="form-control"
                            id="exampleInputEmail1" placeholder=" ">
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

@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" >Les sous categories de la categorie {{ $categorie->nom }}</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Sous Catégorie
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID Sous categorie</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Poids Min</th>
                                <th>Poids Max</th>
                                <th>Categorie</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($sous_categories as $sous_categorie)
                                <tr>
                                    <td>{{ $sous_categorie->id }}</td>
                                    <td>{{ $sous_categorie->nom ?? '' }}</td>
                                    <td>{{ $sous_categorie->description ?? '' }}</td>
                                    <td>{{ $sous_categorie->poids_min ?? '' }}</td>
                                    
                                    <td>{{ $sous_categorie->poids_max ?? '' }}</td>
                                    
                                    <td>{{ $sous_categorie->id_categorie ?? '' }}</td>                  
                                    <td>{{ $sous_categorie->created_at ?? '' }}</td>
                                    <td>
                                        <div class="table-action">

                                            {{-- @include('includes.sous_categorie_edit_delete_modal',compact('sous_categorie')) --}}

                                            {{--  --}}
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade " id="Ajout_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title " id="lineModalLabel">Ajouter Sous categorie : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/sous_categories/{{$categorie->id}}/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="name">Nom </label>
                            <input type="text" value="{{ old('nom') }}" name="nom" placeholder="Entrez le nom de la sous catégorie" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="description">Description</label>
                            
                            <textarea  rows="4" class="form-control" name="description" placeholder="Entrez la description de la sous catégorie" id="description">{{ old('description') }}</textarea>

                        </div>


                        <div class="form-group col-md-6">
                            <label class="label label-default" for="poids_min">Poids Min </label>
                            <input required type="number" min="30" max="200" value="{{ old('poids_min') }}" name="poids_min" class="form-control" id="poids_min" placeholder="Entrez l'age minimum pour cette sous catégorie">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="poids_max">Poids Max </label>
                            <input required type="number" min="30" max="200" value="{{ old('poids_max') }}" name="poids_max" class="form-control" id="poids_max" placeholder="Entrez l'age minimum pour cette sous catégorie">
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="submit" class="col-md-12 btn btn-primary">Save</button>
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="button" class="col-md-12 btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                        </div>    
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script>
        

        alert(document.getElementById('poids_min'));


        //
    </script>


    {{--  --}}
@endsection

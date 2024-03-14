@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4"> Mes categorie</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                    Ajouter Catégorie
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID categorie</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Age Min</th>
                                <th>Age Max</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->nom ?? '' }}</td>
                                    <td>{{ $categorie->description ?? '' }}</td>
                                    <td>{{ $categorie->age_min ?? '' }}</td>
                                    <td>{{ $categorie->age_max ?? '' }}</td>
                                    <td>{{ $categorie->created_at ?? '' }}</td>
                                    <td>
                                        <div class="table-action">

                                            @include('includes.categorie_edit_delete_modal',compact('categorie'))

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
                    <h3 class="modal-title" id="lineModalLabel">Ajouter categorie : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/categories/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="name">Nom </label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" placeholder="Entrez le nom de la catégorie" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="description">Description</label>
                            
                            <textarea rows="4" class="form-control" name="description" placeholder="Entrez la description de la catégorie" id="description"></textarea>

                        </div>


                        <div class="form-group col-md-6">
                            <label class="label label-default" for="age_min">Age Min </label>
                            <input required type="number" min="3" max="99" value="{{ old('age_min') }}" name="age_min" class="form-control" id="age_min" placeholder="Entrez l'age minimum pour cette catégorie">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="age_max">Age Max </label>
                            <input required type="number" min="3" max="99" value="{{ old('age_max') }}" name="age_max" class="form-control" id="age_max" placeholder="Entrez l'age minimum pour cette catégorie">
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




@endsection
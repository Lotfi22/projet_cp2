@extends('layouts.solic_pro')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes categories</h1>

        <div class="card mb-4">
           
            <div class="card-header">
                <button data-bs-toggle="modal" data-bs-target="#Ajout_modal" class="btn btn-primary">
                    <i class="fa fa-plus"></i>Ajouter Catégorie
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
                                <tr id="ligne{{$categorie->id}}">
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->id }}</td>
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->nom ?? '' }}</td>
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->description ?? '' }}</td>
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->age_min ?? '' }}</td>
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->age_max ?? '' }}</td>
                                    <td onclick="redirect_sous_categorie({{ $categorie->id }});" style="cursor:pointer;" >{{ $categorie->created_at ?? '' }}</td>
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







    <div class="modal fade" id="Ajout_modal" role="dialog"  aria-modal="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header pd-x-20">
                    <h3 class="modal-title " id="lineModalLabel">Ajouter Catégorie : </h3>
                    <button type="button" class="close"
                    data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
                            <input onchange="verif_ages();" required type="number" min="3" max="99" value="{{ old('age_min') }}" name="age_min" class="form-control" id="ajout_age_min" placeholder="Entrez l'age minimum pour cette catégorie">

                            <p class="invalid-feedback"></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="age_max">Age Max </label>
                            <input onchange="verif_ages();" required type="number" min="3" max="99" value="{{ old('age_max') }}" name="age_max" class="form-control" id="ajout_age_max" placeholder="Entrez l'age minimum pour cette catégorie">

                            <p class="invalid-feedback"></p>

                            {{--  --}}
                        </div>


                        <div class="btn-group col-md-6" role="group">

                            <button id="ajout_enregistrer" type="submit" class="col-md-12 btn btn-primary">Enregistrer</button>
                        </div>

                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class="col-md-12 btn btn-danger" data-bs-dismiss="modal" role="button">Fermer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="{{ asset('My_js/categories.js') }}"></script>


    <script>
        

        function redirect_sous_categorie(id) 
        {
            
            location.href='/admin/categories/'+id+'/sous_categorie';

            // body...
        }

        //
    </script>


@endsection

@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes sports</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter sport
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID sport</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($sports as $sport)
                                <tr>
                                    <td>{{ $sport->id }}</td>
                                    <td>{{ $sport->nom }}</td>
                                    <td>{{ $sport->description }}</td>
                                    <td>{{ $sport->created_at }}</td>
                                    <td>
                                        <div class="table-action">
                                            @include('includes.sport_edit_delete_modal',compact('sport'))
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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter sport : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/sports/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="Nom_sport">Nom du sport </label>
                            <input required type="string" value="{{ old('nom_sport') }}" name="nom" placeholder="Entrez le nom du sport" class="form-control" id="Nom_sport">
                        </div>

                        <div class="col-md-12">
                        <label class="label label-default" for="description"> description</label> 
                        <input required type="text" value="{{ old('description') }}" name="description" placeholder="Donnez une description" class="form-control" id="Description">      
                        </div>
                        <br>
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
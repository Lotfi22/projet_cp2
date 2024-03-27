@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes événements</h1>

            <div class="card mb-4">

                <span class="card-header">
                    
                    <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> 
                        
                        <i class="fa fa-plus"></i>Ajouter Événement

                    </button>
                
                    <button   style="margin-left: 1100px;"  class="btn btn-warning">

                        <i class="fa fa-trash"></i> 

                        <a  style="color : #fff" href="/admin/evenements/viewdeleted">Corbeille</a>
               
                    </button> 
               
                </span>
           
            
            <div class="card-body">

                <div class="table-responsive">
                    
                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID evenement</th>
                                <th>Nom</th>
                                <th>Date debut</th>
                                <th>Date fin</th>
                                <th>Description</th>
                                <th>Lieu</th>
                                <th>DATE CREATION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>

                               @foreach ($evenements as $evenement)

                                    <tr>
                                        <td>{{ $evenement->id }}</td>
                                        <td>{{ $evenement->nom ?? ''}}</td>
                                        <td>{{ $evenement->date_debut ?? ''}}</td>
                                        <td>{{ $evenement->date_fin ?? ''}}</td>
                                        <td>{{ $evenement->descriotion ?? '' }}</td>
                                        <td>{{ $evenement->lieu ?? ''}}</td>
                                        <td>{{ $evenement->created_at ?? ''}}</td>
                                        <td>
                                            <div class="table-action">
                                              
                                                @include('includes.evenement_edit_delete_modal',compact('evenement'))

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





     <div class="modal fade " id="Ajout_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        
        <div class="modal-dialog modal-lg">
            
            <div class="modal-content">
                
                <div class="modal-header">

                    <h3 class="modal-title " id="lineModalLabel">Ajouter Événement </h3>

                </div>

                <div class="modal-body">

                    <form action="/admin/evenements/create" method="post" enctype="multipart/form-data" class="row col-md-12">

                        @csrf

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">

                            <label class="label label-default" for="nom">Nom </label>
                            
                            <input required type="string" value="{{ old('nom') }}" name="nom" placeholder="Nom" class="form-control" id="nom">
                        
                        </div>

                        <div class="form-group col-md-12">

                            <label class="label label-default" for="date_debut">Date début </label>

                            <input onchange="verif_dates();" required type="datetime-local" value="{{ old('date_debut') }}" name="date_debut" placeholder="Date de début d'événement" class="form-control" id="date_debut">
                            
                            <p class="invalid-feedback"></p>

                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">

                            <label class="label label-default" for="date_fin">Date fin </label>
                            
                            <input onchange="verif_dates();" required type="datetime-local" value="{{ old('date_fin') }}" name="date_fin" placeholder="Date de fin d'événement" class="form-control" id="date_fin">
                            
                            <p class="invalid-feedback"></p>

                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">

                            <label class="label label-default" for="description">Description </label>

                            <input required type="text" value="{{ old('description') }}" name="description" placeholder="Description d'événement" class="form-control" id="description">
                        
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">

                            <label class="label label-default" for="lieu">Lieu</label>

                            <input required type="string" value="{{ old('lieu') }}" name="lieu" placeholder="Lieu d'événement" class="form-control" id="lieu">
                        
                        </div>

                        <div class="btn-group col-md-6" role="group">

                            <button type="submit"  class="col-md-12 btn btn-primary">Sauvegarder</button>

                        </div>

                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class="col-md-12 btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                        
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('My_js/evenements.js') }}"></script>

@endsection

@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes groupes</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter groupe
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID groupe</th>
                                <th>Nom</th>
                                <th>Coach</th>
                                <th>Sport</th>
                                <th>Abonnement</th>
                                <th>Capacite</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($groupes as $groupe)
                                <tr>
                                    <td>{{ $groupe->id }}</td>
                                    <td>{{ $groupe->nom }}</td>
                                    <td>{{ $groupe->coach ? $groupe->coach->nom : '' }}</td>
                                    <td>{{ $groupe->sport ? $groupe->sport->nom : '' }}</td>
                                    <td>{{ $groupe->abonnement ? $groupe->abonnement->type_abonnement : '' }}</td>
                                    <td>{{ $groupe->capacite }}</td>
                                    <td>{{ $groupe->created_at }}</td>
                                    <td>

                                        <div class="table-action">
                                            @include('includes.groupe_edit_delete_modal',compact('groupe'))
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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter groupe : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/groupes/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="Nom_groupe">Nom du groupe </label>
                            <input required type="string" value="{{ old('nom_groupe') }}" name="nom" placeholder="Entrez le nom du groupe" class="form-control" id="Nom_groupe">
                        </div>

                        <div class="col-md-6">
                        <label class="label label-default" for="coach">selectionner un coach </label> <br>
                        <select required name="id_coach" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Coach">                                      
                                    @foreach ($coaches as $coach)
                                        <option value="{{ $coach->id }}">{{ $coach->nom }}</option>
                                    @endforeach 
                        </select>
                        </div> 

                        <div class="col-md-6">
                        <label class="label label-default" for="sport">selectionner un sport </label> <br>
                        <select required name="id_sport" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="sport">                                      
                                    @foreach ($sports as $sport)
                                        <option value="{{ $sport->id }}">{{ $sport->nom }}</option>
                                    @endforeach 
                        </select>
                        </div> 
                        <div class="col-md-6">
                        <label class="label label-default" for="abonnement">selectionner un abonnement </label> <br>
                        <select required name="id_abonnement" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="abonnement">                                      
                                    @foreach ($abonnements as $abonnement)
                                        <option value="{{ $abonnement->id }}">{{ $abonnement->type_abonnement }}</option>
                                    @endforeach 
                        </select>
                        </div>

                        <div class="col-md-6">
                            <label class="label label-default" for="capacite">Capacité du groupe</label>
                            <input required type="text" value="{{ $groupe->capacite ?? '' }}" name="capacite" placeholder="Etat paiement" class="form-control" id="capacite">
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
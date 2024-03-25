@extends('layouts.solic_pro')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" >Gestionnaires</h1>

        <div class="card mb-4">

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr >
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date naissance</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Numéro téléphone</th>
                                <th>Numéro urgence</th>
                                <th>Adresse</th>
                                <th>Date creation </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deletedgestionnaires as $gestionnaire)
                            
                                <tr id="ligne{{$gestionnaire->id}}">
                                    <td>{{ $gestionnaire->id ?? ''}}</td>
                                    <td>{{ $gestionnaire->nom ?? ''}}</td>
                                    <td>{{ $gestionnaire->prenom ?? ''}}</td>
                                    <td>{{ $gestionnaire->date_naissance ?? ''}}</td>
                                    <td>{{ $gestionnaire->genre ?? ''}}</td>
                                    <td>{{ $gestionnaire->email ?? ''}}</td>
                                    <td>{{ $gestionnaire->num_tel ?? ''}}</td>
                                    <td>{{ $gestionnaire->num_tel_urgence ?? ''}}</td>
                                    <td>{{ $gestionnaire->adresse ?? ''}}</td>
                                    <td>{{ $gestionnaire->created_at ?? ''}}</td>
                                    <td>
                                        <div class="table-action">
                                            <button type="button" class="btn-sm btn ripple btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#RestoreModal{{ $gestionnaire->id }}">
                                                <i class='fa fa-trash-restore'></i> Restaurer
                                            </button>
                                        
                                            <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-hidden="true" id="RestoreModal{{ $gestionnaire->id }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">souhaitez-vous restaurer"{{$gestionnaire->nom}} {{ $gestionnaire->prenom }}"?</h6>
                                                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                                                        </div>
                                                        
                                                        <div class="modal-body row col-md-12">
                                            
                                                            <div class="btn-group col-md-6" role="group">
                                                                <button type="button" class=" col-md-12 btn btn-danger"
                                                                    data-bs-dismiss="modal" role="button">Annuler</button>
                                                            </div>
                                                            <div class="btn-group col-md-6" role="group">
                                                                <button type="submit" class="btn btn-primary col-md-12"  identifiant="{{ $gestionnaire->id }}"data-bs-dismiss="modal" onclick="restaurer_gestionnaire(this);"> Restaurer </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
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
    <script src="{{ asset('My_js/gestionnaires.js') }}"></script>

 @endsection
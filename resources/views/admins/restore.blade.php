@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" >Admin</h1>

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
                            @foreach ($deletedadmins as $admin)
                            
                                <tr id="ligne{{$admin->id}}">
                                    <td>{{ $admin->id ?? ''}}</td>
                                    <td>{{ $admin->nom ?? ''}}</td>
                                    <td>{{ $admin->prenom ?? ''}}</td>
                                    <td>{{ $admin->date_naissance ?? ''}}</td>
                                    <td>{{ $admin->genre ?? ''}}</td>
                                    <td>{{ $admin->email ?? ''}}</td>
                                    <td>{{ $admin->num_tel ?? ''}}</td>
                                    <td>{{ $admin->num_tel_urgence ?? ''}}</td>
                                    <td>{{ $admin->adresse ?? ''}}</td>
                                    <td>{{ $admin->created_at ?? ''}}</td>
                                    <td>
                                        <div class="table-action">
                                            <button type="button" class="btn-sm btn ripple btn-warning" data-toggle="modal"
                                                data-target="#RestoreModal{{ $admin->id }}">
                                                <i class='fa fa-trash-restore'></i> Restaurer
                                            </button>
                                        
                                            <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-hidden="true" id="RestoreModal{{ $admin->id }}">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content modal-content-demo">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title">souhaitez-vous restaurer"{{$admin->nom}} {{ $admin->prenom }}"?</h6>
                                                            <button aria-label="Close" class="btn-close" data-dismiss="modal" type="button"></button>
                                                        </div>
                                                        
                                                        <div class="modal-body row col-md-12">
                                            
                                                            <div class="btn-group col-md-6" role="group">
                                                                <button type="button" class=" col-md-12 btn btn-danger"
                                                                    data-dismiss="modal" role="button">Annuler</button>
                                                            </div>
                                                            <div class="btn-group col-md-6" role="group">
                                                                <button type="submit" class="btn btn-primary col-md-12"  identifiant="{{ $admin->id }}"data-dismiss="modal" onclick="restaurer_admin(this);"> Restaurer </button>
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
    <script src="{{ asset('My_js/admins.js') }}"></script>

 @endsection


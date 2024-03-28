@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes groupes</h1>

        <div class="card mb-4">

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

                            @foreach ($deletedgroupes as $deletedgroupe)
                                <tr>
                                    <td>{{ $deletedgroupe->id }}</td>
                                    <td>{{ $deletedgroupe->nom }}</td>
                                    <td>{{ $deletedgroupe->coach ? $deletedgroupe->coach->nom : '' }}</td>
                                    <td>{{ $deletedgroupe->sport ? $deletedgroupe->sport->nom : '' }}</td>
                                    <td>{{ $deletedgroupe->abonnement ? $deletedgroupe->abonnement->type_abonnement : '' }}</td>
                                    <td>{{ $deletedgroupe->capacite }}</td>
                                    <td>{{ $deletedgroupe->created_at }}</td>
                                    <td>
                                    <div class="table-action">

                                        <button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
                                            data-target="#RestoreModal{{ $deletedgroupe->id }}">
                                            <i class='fa fa-trash-restore'></i> Restore
                                        </button>

                                        <div class="modal fade" id="RestoreModal{{ $deletedgroupe->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" >
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Etes vous sur de vouloir restorer le groupe "{{ $deletedgroupe->id }}" ?</h5>

                                                        <button type="button" class="close"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body  row col-md-12">

                                                        <div class="btn-group col-md-6" role="group">
                                                            <a href="/admin/groupes/restore/{{ $deletedgroupe->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
                                                        </div>
                                                        <div class="btn-group col-md-6" role="group">

                                                            <button type="button" class=" col-md-12 btn btn-primary"
                                                                data-dismiss="modal" role="button">NON</button>
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



@endsection
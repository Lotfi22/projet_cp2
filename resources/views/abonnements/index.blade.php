@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes Abonnements</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Abonnement
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID Abonnement</th>
                                <th>Type Abonnement</th>
                                <th>Nombre de séances</th>
                                <th>Tarif</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($abonnements as $abonnement)
                                <tr>
                                    <td>{{ $abonnement->id }}</td>
                                    <td>{{ $abonnement->type_abonnement ?? '' }}</td>
                                    <td>{{ $abonnement->nbr_seances ?? '' }}</td>
                                    <td>{{ $abonnement->tarif ?? '' }}</td>
                                    <td>{{ $abonnement->created_at ?? '' }}</td>
                                    <td>


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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter abonnement : </h3>
                </div>

                <div class="modal-body">

                    <form action="/admin/abonnements/create" method="post" enctype="multipart/form-data" class="row col-md-12">

                        @csrf

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="type_abonnement">Type d'Abonnement </label>
                            <input required type="text" value="{{ old('type_abonnement') }}" name="type_abonnement" placeholder="Entrez le type de l'abonnement " class="form-control" id="type_abonnement">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="nbr_seance">Nombre de séances</label>
                            <input required type="number"  value="{{ old('nbr_seance') }}" name="nbr_seance" class="form-control" id="nbr_seance" placeholder="Entrez le nombre de séances de ce type d'abonnement">
                        </div>


                        <div class="form-group col-md-6">
                            <label class="label label-default" for="tarif">Tarif</label>
                            <input required type="number"  value="{{ old('tarif') }}" name="tarif" class="form-control" id="tarif" placeholder="Entrez le tarif de ce type d'abonnement">
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

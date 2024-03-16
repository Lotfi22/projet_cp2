
@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes évènements</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Événement
                </button>
            </div>

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
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($evenements as $evenement)
                                <tr>
                                    <td>{{ $evenement->id }}</td>
                                    <td>{{ $evenement->nom ?? '' }}</td>
                                    <td>{{ $evenement->date_debut ?? '' }}</td>
                                    <td>{{ $evenement->date_fin ?? '' }}</td>
                                    <td>{{ $evenement->description ?? '' }}</td>
                                    <td>{{ $evenement->lieu ?? '' }}</td>
                                    <td>{{ $evenement->created_at ?? '' }}</td>
                                    <td>
                                        <div class="table-action">

                                            @include('includes.evenement_edit_delete_modal',compact('evenement'))

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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter évènement : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/evenements/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="Nom_evenemt">Nom d'évènement </label>
                            <input required type="string" value="{{ old('nom_evenemt') }}" name="nom" placeholder="Entrez le nom de l'évènement" class="form-control" id="Nom_evenemt">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="DateDebut_evenemt">Date de debut </label>
                            <input required type="datetime-local" value="{{ old('DateDebut_evenemt') }}" name="date debut" class="form-control" id="DateDebut_evenemt" placeholder="Entrez la date de debut de l'évènement">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="DateFin_evenemt">Date de fin </label>
                            <input required type="datetime-local" value="{{ old('DateFin_evenemt') }}" name="date fin" class="form-control" id="DateFin_evenemt" placeholder="Entrez la date de fin de l'évènement">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="Description_evenemt">Description</label>
                            
                            <textarea rows="4" class="form-control" name="description" placeholder="Entrez la description de l'évènement" id="Description_evenemt"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="Lieu_evenemt">Lieu </label>
                            <input required type="string" value="{{ old('Lieu_evenemt') }}" name="lieu" class="form-control" id="Lieu_evenemt" placeholder="Entrez le lieu de l'évènement">
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="submit" class="col-md-12 btn btn-primary">Sauvegarder</button>
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
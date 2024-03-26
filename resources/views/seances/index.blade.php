@extends('layouts.solic_pro')

@section('content')

    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes seances</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter seance
                </button>

                <button   style="margin-left: 1100px;"  class="btn btn-warning">
         
                <i class="fa fa-trash"></i> <a  style="color : #fff" href="/admin/seances/viewdeleted"  >
                Corbeille
                </a>
               
               </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID seance</th>
                                <th>Heure debut</th>
                                <th>Heure fin</th>
                                <th>Groupe</th>
                                <th>Salle</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($seances as $seance)
                                <tr>
                                    <td>{{ $seance->id }}</td>
                                    <td>{{ $seance->heure_debut }}</td>
                                    <td>{{ $seance->heure_fin }}</td>
                                    <td>{{ $seance->id_groupe }}</td>
                                    <td>{{ $seance->id_salle }}</td>
                                    <td>{{ $seance->created_at }}</td>
                                    <td>

                                        <div class="table-action">
                                            @include('includes.seance_edit_delete_modal',compact('seance'))
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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter seance : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/seances/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="HeureDebut_seance">Heure de debut </label>
                            <input required type="time" value="{{ old('HeureDebut_seance') }}" name="heure debut" class="form-control" id="HeureDebut_seance" placeholder="Entrez l'heure de debut de la séance">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="HeureFin_seance">Heure de fin </label>
                            <input required type="time" value="{{ old('HeureFin_seance') }}" name="heure fin" class="form-control" id="HeureFin_seance" placeholder="Entrez l'heure de fin de la séance">
                        </div>
    
                        <div class="col-md-6">
                        <label class="label label-default" for="groupe">selectionner un groupe </label> <br>
                                    <select required name="id_groupe" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="groupe">                                      
                                   @foreach ($groupes as $groupe)
                                        <option value="{{ $groupe->id }}">{{ $groupe->id }}</option>
                                    @endforeach                                    
                                    </select>
                        </div>  
                        <div class="col-md-6">
                        <label class="label label-default" for="salle">selectionner une salle </label> <br>
                                    <select required name="id_salle" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="salle">                                      
                                    @foreach ($salles as $salle)
                                        <option value="{{ $salle->id }}">{{ $salle->id }}</option>
                                    @endforeach                                   
                                    </select>
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
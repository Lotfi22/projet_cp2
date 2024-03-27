@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white"> Mes séances</h1>

        <div class="card mb-4">

            <span class="card-header">

                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary">

                    <i class="fa fa-plus"></i> Ajouter Seance

                </button>
                
                <button style="margin-left: 1100px;" class="btn btn-warning">

                    <i class="fa fa-trash"></i> <a style="color : #fff" href="/admin/seances/viewdeleted">Corbeille</a>
               
                </button> 
               
            </span>
           
            
            <div class="card-body">

                <div class="table-responsive">
                    
                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">

                            <tr>
                                <th>ID</th>
                                <th>Heure debut</th>
                                <th>Heure fin</th>
                                <th>Groupe</th>
                                <th>Salle</th>
                                <th>DATE CREATION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                         <tbody>
                               @foreach ($seances as $seance)

                                    <tr>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->id }}</td>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->heure_debut ?? ''}}</td>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->heure_fin ?? ''}}</td>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->id_groupe ?? ''}}</td>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->id_salle ?? '' }}</td>
                                        <td onclick="redirect_presence({{ $seance->id }});" style="cursor:pointer;">{{ $seance->created_at ?? ''}}</td>
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





     <div class="modal fade " id="Ajout_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h3 class="modal-title " id="lineModalLabel">Ajouter séance</h3>

                </div>

                <div class="modal-body">

                    <form action="/admin/seances/create" method="post" enctype="multipart/form-data" class="row col-md-12">

                        @csrf

                        <div class="form-group col-md-6">

                            <label class="label label-default" for="heure_debut">Heure de début </label>
                            <input required type="time" value="{{ old('heure_debut') }}" name="heure_debut" placeholder="Heure de début de séance" class="form-control" id="heure_debut">
                        
                        </div>

                        <div class="form-group col-md-6">

                            <label class="label label-default" for="heure_fin">Heure de fin </label>
                            <input required type="time" value="{{ old('heure_fin') }}" name="heure_fin" placeholder="Heure de fin de séance" class="form-control" id="heure_fin">

                        </div>

                        <div class="col-md-6">

                            <label class="label label-default" for="groupe">selectionner un groupe </label> <br>
                                <select required name="id_groupe" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Groupe">                                      
                                    
                                    @foreach ($groupes as $groupe)
                                        <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>
                                    @endforeach 
                                </select>

                        </div> 

                        <div class="col-md-6">

                            <label class="label label-default" for="salle">selectionner une salle </label> <br>
                                <select required name="id_salle" class="form-control" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Salle">                                      
                                    
                                    @foreach ($salles as $salle)
                                        <option value="{{ $salle->id }}">{{ $salle->id }}</option>
                                    @endforeach 
                                </select>

                        </div> 

                        <div class="btn-group col-md-6" role="group">

                            <button type="submit"  class="col-md-12 btn btn-primary">Save</button>

                        </div>

                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class="col-md-12 btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                        
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('My_js/seances.js') }}"></script>

    <script>

        function redirect_presence(id) 
        {
            location.href='/admin/seances/'+id+'/presence';
        }

    </script>

@endsection

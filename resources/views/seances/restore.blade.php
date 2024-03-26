@extends('layouts.solic_pro')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes séances </h1>

        <div class="card mb-4">

            
            
            <div class="card-body">
                <div class="table-responsive">
                    

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>

                                <th >ID seance</th>
                                <th>Heure debut</th>
                                <th>Heure fin</th>
                                <th>ID groupe</th>
                                <th>ID salle</th>
                                <th>DATE CREATION</th>
                                <th>DATE SUPPRESSION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($deletedseances as $seance)

                                    <tr>

                                        <td>{{ $seance->id }}</td>
                                        <td>{{ $seance->heure_debut ?? ''}}</td>
                                        <td>{{ $seance->heure_fin ?? ''}}</td>
                                        <td>{{ $seance->id_groupe ?? ''}}</td>
                                        <td>{{ $seance->id_salle ?? '' }}</td>
                                        <td>{{ $seance->created_at ?? ''}}</td>
                                        <td>{{ $seance->deleted_at ?? ''}}</td>
                                        <td>
                                        <div class="table-action">

                                            <button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
                                                data-target="#RestoreModal{{ $seance->id }}">
                                                <i class='fa fa-trash-restore'></i> Restore
                                            </button>

                                            <div class="modal fade" id="RestoreModal{{ $seance->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir restorer la séance "{{ $seance->id }}" ?</h5>

                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body  row col-md-12">

                                                            <div class="btn-group col-md-6" role="group">
                                                                <a href="/admin/seances/restore/{{ $seance->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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
        
          
    </div>




@endsection

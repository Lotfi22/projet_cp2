@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes Salles Supprimées </h1>

        <div class="card mb-4">

            
            
            <div class="card-body">
                <div class="table-responsive">
                    

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>

                                <th >ID</th>
                                <th>CAPACITE</th>
                                <th>SUPERFICIE</th>
                                <th>NOMBRE MACHINE</th>
                                <th>DATE CREATION</th>
                                <th>DATE SUPPRESSION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($deletedsalles as $salle)

                                    <tr id=" ligne{{$salle->id}}">

                                        <td>{{ $salle->id }}</td>
                                        <td>{{ $salle->capacite ?? ''}}</td>
                                        <td>{{ $salle->superficie ?? ''}}</td>
                                        <td>{{ $salle->nb_machine ?? ''}}</td>
                                        <td>{{ $salle->created_at ?? ''}}</td>
                                        <td>{{ $salle->deleted_at ?? ''}}</td>
                                        <td>
                                           <div class="table-action">
                                              
                                           <div class="table-action">

                                                            <button type="button" class="btn-sm btn ripple btn-warning" data-toggle="modal"
                                                                data-target="#RestoreModal{{ $salle->id }}">
                                                                <i class='fa fa-trash-restore'></i> Restaurer
                                                            </button>

                                                            <div class="modal fade forget-modal" id="RestoreModal{{ $salle->id }}" tabindex="-1"
                                                                role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content modal-content-demo" >
                                                                       <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">êtes vous sûr de vouloir restaurer la salle "{{ $salle->id }}" ?</h5>

                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>                                                  <div class="modal-body row col-md-12">

                                                                            <div class="btn-group col-md-6" role="group">
                                                                                <button type="submit" onclick="restaurer_salle(this);" class="btn btn-primary col-md-12"  identifiant="{{ $salle->id }}"data-dismiss="modal" > OUI </button>
                                                                            </div>
                                                                            <div class="btn-group col-md-6" role="group">

                                                                                <button type="button" class=" col-md-12 btn btn-danger"
                                                                                    data-dismiss="modal" role="button">NON</button>
                                                                            </div>
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


    <script src="{{ asset('My_js/salles.js') }}"></script>


@endsection

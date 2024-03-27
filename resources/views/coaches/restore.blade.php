@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes Coaches Supprimés </h1>

        <div class="card mb-4">

            
            
            <div class="card-body">
                <div class="table-responsive">
                    

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>DATE DE NAISSANCE</th>
                                <th>QR CODE</th>                    
                                <th>GENRE</th>
                                <th>NUMERO TELEPHONE</th>
                                <th>NUMERO D'URGENCE</th>
                                <th>ADRESSE</th>
                                <th>EMAIL</th>
                                <th>DATE DE SUPPRESSION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($deletedcoaches as $coach)

                                    <tr id="ligne{{$coach->id}}">
                                        <td>{{ $coach->nom }}</td>
                                        <td>{{ $coach->prenom }}</td>
                                        <td>{{ $coach->date_naissance }}</td>
                                        <td>{{ $coach->id_qr }}</td>
                                        <td>{{ $coach->genre }}</td>
                                        <td>{{ $coach->nbr_telephone }}</td>
                                        <td>{{ $coach->nbr_telephone_urgence }}</td>
                                        <td>{{ $coach->adress }}</td>
                                        <td>{{ $coach->email }}</td>
                                        <td>{{ $coach->deleted_at ?? ''}}</td>
                                        <td>
                                        <div class="table-action">

                                            <button type="button" class="btn-sm btn ripple btn-warning" data-toggle="modal"
                                                data-target="#RestoreModal{{ $coach->id }}">
                                                <i class='fa fa-trash-restore'></i> Restaurer
                                            </button>

                                            <div class="modal fade forget-modal" id="RestoreModal{{ $coach->id }}" tabindex="-1"
                                                role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content modal-content-demo" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment restaurer le coach"{{ $coach->nom }}" ?</h5>

                                                            <button aria-label="Close" class="btn-close" data-dismiss="modal" type="button"></button>
                                                        </div>

                                                        <div class="modal-body row col-md-12">

                                                            <div class="btn-group col-md-6" role="group">
                                                                <button type="submit" class="btn btn-primary col-md-12"  identifiant="{{ $coach->id }}"data-dismiss="modal" onclick="restaurer_coach(this);"> OUI </button>
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

<script src="{{ asset('My_js/coaches.js') }}"></script>




@endsection

@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes Adhérants Supprimés </h1>

        <div class="card mb-4">

            
            
            <div class="card-body">
                <div class="table-responsive">
                    

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>

                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>DATE DE NAISSANCE</th>
                                <th>QR CODE</th>                    
                                <th>GENRE</th>
                                <th>NUMERO TELEPHONE</th>
                                <th>NUMERO D'URGENCE</th>
                                <th>DOSSIER MEDICAL</th>
                                <th>ADRESSE</th>
                                <th>EMAIL</th>
                                <th>TYPE D'ABONNEMENT</th>
                                <th text-end min-w-70px">Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($deletedfactures as $facture)

                                    <tr>
                                        <td>{{ $adherant->id }}</td>
                                        <td>{{ $adherant->nom }}</td>
                                        <td>{{ $adherant->prenom }}</td>
                                        <td>{{ $adherant->date_naissance }}</td>
                                        <td>{{ $adherant->id_qr }}</td>
                                        <td>{{ $adherant->genre }}</td>
                                        <td>{{ $adherant->num_tel }}</td>
                                        <td>{{ $adherant->num_tel_urgence }}</td>
                                        <td>{{ $adherant->dossier_medical }}</td>
                                        <td>{{ $adherant->adresse }}</td>
                                        <td>{{ $adherant->email }}</td>
                                        <td>{{ $adherant->type_abonnement }}</td>
                                        <td>{{ $adherant->deleted_at ?? ''}}</td>
                                        <td>
                                        <div class="table-action">

                                            <button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
                                                data-target="#RestoreModal{{ $facture->id }}">
                                                <i class='fa fa-trash-restore'></i> Restaurer
                                            </button>

                                            <div class="modal fade" id="RestoreModal{{ $facture->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment restaurer l'adhérant "{{ $adherant->nom }}" ?</h5>

                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body  row col-md-12">

                                                            <div class="btn-group col-md-6" role="group">
                                                                <a href="/admin/factures/restore/{{ $facture->id }}" type="submit" class="btn btn-danger col-md-12"> Oui </a>
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

@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes factures </h1>

        <div class="card mb-4">

            
            
            <div class="card-body">
                <div class="table-responsive">
                    

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>

                                <th >ID</th>
                                <th>MHT</th>
                                <th>TVA</th>
                                <th>VERSEMENT</th>
                                <th>DROIT TIMBRE</th>
                                <th>ETAT DE PAIMENT </th>
                                <th>DATE CREATION</th>
                                <th>DATE SUPPRESSION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($deletedfactures as $facture)

                                    <tr>

                                        <td>{{ $facture->id }}</td>
                                        <td>{{ $facture->ht ?? ''}}</td>
                                        <td>{{ $facture->tva ?? ''}}</td>
                                        <td>{{ $facture->versement ?? ''}}</td>
                                        <td>{{ $facture->droit_timbre ?? '' }}</td>
                                        <td>{{ $facture->etat_paiement ?? ''}}</td>
                                        <td>{{ $facture->created_at ?? ''}}</td>
                                        <td>{{ $facture->deleted_at ?? ''}}</td>
                                        <td>
                                        <div class="table-action">

                                            <button type="button" class="btn-sm btn btn-warning" data-toggle="modal"
                                                data-target="#RestoreModal{{ $facture->id }}">
                                                <i class='fa fa-trash-restore'></i> Restore
                                            </button>

                                            <div class="modal fade" id="RestoreModal{{ $facture->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content" >
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">etes vous sur de vouloir restorer la facture "{{ $facture->id }}" ?</h5>

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

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

                                    <tr id=" ligne{{$facture->id}}">

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
                                              
                                              @include('includes.facture_restored_modal',compact('facture'))

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
        
          
    </div>


    <script src="{{ asset('My_js/factures.js') }}"></script>


@endsection

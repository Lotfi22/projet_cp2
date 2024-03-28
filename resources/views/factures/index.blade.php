@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes factures</h1>

        <div class="card mb-4">

            <span class="card-header">
                <button  data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                       Ajouter Facture
                </button>
                <a  style="color : #fff ; display: block; margin-left:1090px;" href="/admin/factures/viewdeleted"  >
                         <button   style="margin-left: 0px; " class="btn btn-warning">
                           <i class="fas fa-trash-o"></i> 
                           Corbeille
               </button> 
               </a>
           </span>
           
            
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
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($factures as $facture)

                                    <tr id="ligne{{$facture->id}}">

                                        <td>{{ $facture->id }}</td>
                                        <td>{{ $facture->ht ?? ''}}</td>
                                        <td>{{ $facture->tva ?? ''}}</td>
                                        <td>{{ $facture->versement ?? ''}}</td>
                                        <td>{{ $facture->droit_timbre ?? '' }}</td>
                                        <td>{{ $facture->etat_paiement ?? ''}}</td>
                                        <td>{{ $facture->created_at ?? ''}}</td>
                                        <td>
                                            <div class="table-action">
                                              
                                                @include('includes.facture_edit_delete_modal',compact('facture'))

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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter facture : </h3>
                </div>

                <div class="modal-body">

                    <form action="/admin/factures/create" method="post" enctype="multipart/form-data" class="row col-md-12">

                        @csrf
                           
                        {{--<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100" height="100" viewBox="0 0 100 100"><rect x="0" y="0" width="100" height="100" fill="#ffffff"/><g transform="scale(4.762)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L8 2L8 5L11 5L11 4L12 4L12 3L13 3L13 0L12 0L12 3L11 3L11 2L10 2L10 0ZM9 2L9 4L11 4L11 3L10 3L10 2ZM8 6L8 7L9 7L9 8L8 8L8 10L9 10L9 8L10 8L10 11L7 11L7 10L6 10L6 9L7 9L7 8L6 8L6 9L5 9L5 10L4 10L4 8L0 8L0 10L1 10L1 11L5 11L5 12L4 12L4 13L5 13L5 12L6 12L6 13L7 13L7 12L10 12L10 13L8 13L8 14L9 14L9 15L10 15L10 16L9 16L9 17L8 17L8 21L10 21L10 20L9 20L9 19L10 19L10 17L12 17L12 16L14 16L14 17L13 17L13 19L12 19L12 18L11 18L11 21L13 21L13 19L14 19L14 20L15 20L15 19L16 19L16 17L15 17L15 14L14 14L14 11L17 11L17 12L16 12L16 13L17 13L17 12L18 12L18 11L19 11L19 13L18 13L18 14L16 14L16 15L18 15L18 18L20 18L20 17L21 17L21 15L20 15L20 16L19 16L19 15L18 15L18 14L19 14L19 13L20 13L20 14L21 14L21 8L20 8L20 10L18 10L18 9L19 9L19 8L16 8L16 9L15 9L15 10L13 10L13 9L14 9L14 8L13 8L13 9L12 9L12 12L10 12L10 11L11 11L11 6L10 6L10 7L9 "/></svg>--}}




                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="ht">Montant Hors Tax </label>
                            <input required type="number" value="{{ old('ht') }}" name="ht" placeholder="Montant hors tax" class="form-control" id="ht">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="tva">Tva </label>
                            <input required type="number" value="{{ old('tva') }}" name="tva" placeholder="TVA" class="form-control" id="tva">

                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="versement">Versement </label>
                            <input required type="number" value="{{ old('versement') }}" name="versement" placeholder="Versement" class="form-control" id="versement">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="droit_timbre">Droit Timbre </label>
                            <input required type="number" value="{{ old('droit_timbre') }}" name="droit_timbre" placeholder="Droit Timbre" class="form-control" id="droit_timbre">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="etat_paiement">Etat paiement</label>
                            <input required type="text" value="{{ old('etat_paiement') }}" name="etat_paiement" placeholder="Etat paiement" class="form-control" id="etat_paiement">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="id_gestionnaire">Id gestionnaire</label>
                            <input required type="text" value="{{ old('id_gestionnaire') }}" name="id_gestionnaire" placeholder="Id Gestionnaire" class="form-control" id="id_gestionnaire">
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


    <script src="{{ asset('My_js/factures.js') }}"></script>

@endsection

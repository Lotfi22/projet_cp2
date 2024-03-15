@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes factures</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Facture
                </button>
            </div>

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

                                    <tr>

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




@endsection

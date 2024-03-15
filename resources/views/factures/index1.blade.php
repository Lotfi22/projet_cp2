@extends('layouts.solic')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter Nouvelle facture</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter Nouvelle Facture</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->

                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/factures/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="ht" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Montant Hors Tax</span>
                        </label>
                        
                        
                        <input required id="ht" type="number" step="500" class="form-control form-control-solid" placeholder="Montant Hors Tax"  name="ht"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="tva" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">TVA</span>
                        </label>
                        <div class="position-relative">

                           <input required id="tva" type="number" step="0,001" class="form-control form-control-solid" placeholder="TVA"  name="tva"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="versement" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Versement</span>
                        </label>
                        <div class="position-relative">

                           <input required id="versement" type="number" class="form-control form-control-solid" placeholder="Versement"  name="versement"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="droit_timbre" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Droit timbre</span>
                        </label>
                        <div class="position-relative">

                           <input required id="droit_timbre" type="number" class="form-control form-control-solid" placeholder="Droit timbre"  name="droit_timbre"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="etat_paiement" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Etat de paiement </span>
                        </label>
                        <div class="position-relative">

                           <input required id="etat_paiement" type="text" class="form-control form-control-solid" placeholder="Etat de paiment "  name="etat_paiement"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="id_gestionnaire" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">ID Gestionnaire</span>
                        </label>
                        <div class="position-relative">

                           <input required id="id_gestionnaire" type="number" class="form-control form-control-solid" placeholder="ID Gestionnaire "  name="id_gestionnaire"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                   
                        
                       


                    <button class="col-md-12 btn btn-info">Submit</button>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>




<div class="card-body pt-0">

    <div style="margin-top: 5%;" class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">ID</th>
                    <th class="min-w-125px">MHT</th>
                    <th class="min-w-125px">TVA</th>
                    <th class="min-w-125px">VERSEMENT</th>
                    <th class="min-w-125px">DROIT TIMBRE</th>
                    <th class="min-w-125px">ETAT DE PAIMENT </th>
                    <th class="min-w-125px">DATE CREATION</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

                @foreach ($factures as $facture)
                  
                    <tr>
                        
                        <td>{{ $facture->id }}</td>
                        <td>{{ $facture->ht }}</td>
                        <td>{{ $facture->tva }}</td>
                        <td>{{ $facture->versement }}</td>
                        <td>{{ $facture->droit_timbre }}</td>
                        <td>{{ $facture->etat_paiement }}</td>
                        <td>{{ $facture->created_at }}</td>
                        <td>Modifer , supprimer</td>

                    </tr>    

                    {{-- expr --}}
                @endforeach

                {{--  --}}
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
<!--end::Card body-->
</div>




@endsection
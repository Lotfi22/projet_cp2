@extends('layouts.layout_admin')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter un groupe</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter un groupe</h2>
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
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/groupes/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nom</span>
                        </label>
                        
                        
                        <input required id="nom" type="text" class="form-control form-control-solid" placeholder="Nom du groupe"  name="nom"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--end::Input wrapper-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Capacité :</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="capacite" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Capacite">

                                        <option></option>

                                        @for ($i = 1; $i < 60; $i++)
                                            
                                            <option value="{{ $i }}">{{ $i }}</option>

                                        @endfor

                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        
                        {{--  --}}
                    </div>

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--end::Input wrapper-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Coach :</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="id_coach" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Coach">
                                        
                                    @foreach ($coachs as $coach)
                                        <option value="{{ $coach->id }}">{{ $coach->id }}</option>
                                    @endforeach 
                                       
                                            {{-- <option value="{{ $coach->nom }}">{{ $coach->nom }}</option>
                                        <option value="{{ $coach->prenom }}">{{ $coach->prenom }}</option> --}}
                                        
                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        
                        {{--  --}}
                    </div>

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--end::Input wrapper-->
                    </div>
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Sport :</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="id_sport" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Sport">

                                        <option></option>

                                        @foreach ($sports as $sport)
                                        <option value="{{ $sport->id }}">{{ $sport->id }}</option>
                                    @endforeach

                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>

                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Abonnement :</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="id_abonnement" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="l'abonnement">

                                        <option></option>

                                        @foreach ($abonnements as $abonnement)
                                        <option value="{{ $abonnement->id }}">{{ $abonnement->id }}</option>
                                    @endforeach

                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>

                        
                        {{--  --}}
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


<!--La table : -->

<div class="card-body pt-0">

    <div style="margin-top: 5%;" class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">ID</th>
                    <th class="min-w-125px">NOM</th>
                    <th class="min-w-125px">COACH</th>
                    <th class="min-w-125px">ABONNEMENT</th>
                    <th class="min-w-125px">CAPACITE</th>
                    <th class="min-w-125px">DATE CREATION</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

                @foreach ($groupes as $groupe)
                    
                    <tr>
                        
                        <td>{{ $groupe->id }}</td>
                        <td>{{ $groupe->nom }}</td>
                        <td>{{ $groupe->id_coach}}</td>
                        <td>{{ $groupe->id_abonnement }}</td>
                        <td>{{ $groupe->capacite }}</td>
                        <td>{{ $groupe->created_at }}</td>
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
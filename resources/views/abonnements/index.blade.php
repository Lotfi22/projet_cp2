@extends('layouts.solic')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter Nouveau Abonnement</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter Un Type d'Abonnement</h2>
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

                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/abonnements/create">

                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">

                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Abonnement</span>
                        </label>


                        <input required id="type_abonnement" type="text" class="form-control form-control-solid" placeholder="Nouveau Type d'Abonnement"  name="type_abonnement"/>
                    </div>

                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Tarif selon nombre de séances</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="nbr_seances" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Nombre de Seances">

                                        <option></option>

                                        @for ($i = 3; $i < 20; $i++)

                                            <option value="{{ $i }}">{{ $i }}</option>

                                        @endfor

                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="tarif" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Tarif">
                                        <option></option>

                                        @for ($i = 500; $i < 5000; $i += 500)

                                            <option value="{{ $i}}">{{ $i }}</option>

                                        @endfor


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




<div class="card-body pt-0">

    <div style="margin-top: 5%;" class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">ID</th>
                    <th class="min-w-125px">TYPE D'ABONNEMENT</th>
                    <th class="min-w-125px">NOMBRE DE SEANCES</th>
                    <th class="min-w-125px">TARIF</th>
                    <th class="min-w-125px">DATE CREATION</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">
                @foreach ($abonnements as $abonnement)

                    <tr>

                        <td>{{ $abonnement->id }}</td>
                        <td>{{ $abonnement->type_abonnement }}</td>
                        <td>{{ $abonnement->nbr_seances}}</td>
                        <td>{{ $abonnement->tarif }}</td>
                        <td>{{ $abonnement->created_at }}</td>
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

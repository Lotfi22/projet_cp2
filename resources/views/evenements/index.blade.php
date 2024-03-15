@extends('layouts.solic')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter un nouveau evenement</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>>Ajouter un nouveau evenement</h2>
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
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/evenements/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="Nom_evenemt" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nom d'évenement</span>
                        </label>
                        
                        
                        <input required id="Nom_evenemt" type="string" class="form-control form-control-solid" name="nom"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="DateDebut_evenemt" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Date debut</span>
                        </label>
                        
                        
                        <input required id="DateDebut_evenemt" type="datetime-local" class="form-control form-control-solid" name="date debut"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="DateFin_evenemt" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Date fin</span>
                        </label>
                        
                        
                        <input required id="DateFin_evenemt" type="datetime-local" class="form-control form-control-solid" name="date fin"/>
                    </div>                    
                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="Description_evenemt" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Description</span>
                        </label>
                        
                        
                        <input required id="Description_evenemt" type="text" class="form-control form-control-solid" name="description"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="Lieu_evenemt" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Lieu</span>
                        </label>
                        
                        
                        <input required id="Lieu_evenemt" type="string" class="form-control form-control-solid" name="lieu"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->

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
                    <th class="min-w-125px">Nom</th>
                    <th class="min-w-125px">Date debut</th>
                    <th class="min-w-125px">Date fin</th>
                    <th class="min-w-125px">Description</th>
                    <th class="min-w-125px">Lieu</th>
                    <th class="min-w-125px">Date de creation</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

                @foreach ($evenements as $evenement)
                    
                    <tr>
                        
                        <td>{{ $evenement->nom}}</td>
                        <td>{{ $evenement->date_debut}}</td>
                        <td>{{ $evenement->date_fin}}</td>
                        <td>{{ $evenement->description}}</td>
                        <td>{{ $evenement->lieu}}</td>
                        <td>{{ $evenement->created_at }}</td>
                        <td>Modifer supprimer</td>

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
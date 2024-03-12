@extends('layouts.layout_admin')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter Nouveau gestionnaire</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter Nouveau gestionnaire</h2>
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
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/gestionnaires/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nom</span>
                        </label>
                        
                        
                        <input required id="nom" type="text" class="form-control form-control-solid" placeholder="Nom"  name="nom"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="prenom" class="required fs-6 fw-bold form-label mb-2">Prenom</label>

                        <div class="position-relative">

                            <input required id="prenom" placeholder="Prenom" type="text" class="form-control form-control-solid" name="prenom"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label class="required fs-6 fw-bold form-label mb-2">Genre</label>
                        <select required name="genre" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="genre">

                            <option></option>
                    
                                <option value="genre">Féminin</option>
                                <option value="genre">Masculin</option>

                            {{--  --}}
                        </select>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="date_naissance" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Date de naissance</span>
                        </label>
        
                        <input required id="date_naissance" type="date" class="form-control form-control-solid" placeholder="Nom"  name="date_naissance"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="num_tel" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Numero de telephone</span>
                        </label>
        
                        <input required id="num_tel" type="text" class="form-control form-control-solid" placeholder="0000000000"  name="num_tel"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="num_tel_ur" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class>Numero de telephone d'urgence</span>
                        </label>
        
                        <input required id="num_tel_ur" type="text" class="form-control form-control-solid" placeholder="0000000000"  name="num_tel_urgence"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="email" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Email</span>
                        </label>

                        <input required id="email" type="text" class="form-control form-control-solid" placeholder="Email"  name="email"/>
                    </div>
                    
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="adresse" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Adresse</span>
                        </label>
        
                        <input required id="adresse" type="text" class="form-control form-control-solid" placeholder="Adresse"  name="adresse"/>
                    </div>
                    <div class="d-flex flex-column mb-7 fv-row">
                        <label for="id_qr" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">ID QR CODE </span>
                        </label>
        
                        <input required id="id_qr" type="text" class="form-control form-control-solid" placeholder="id_qr"  name="id_qr"/>
                    </div>
                    
                
                        <!--begin::Col-->
                        
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->

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
                    <th class="min-w-125px">Prenom</th>
                    <th class="min-w-125px">Date de naissance</th>
                    <th class="min-w-125px">Genre</th>
                    <th class="min-w-125px">Email</th>
                    <th class="min-w-125px">Adresse</th>
                    <th class="min-w-125px">Numero de telephone</th>
                    <th class="min-w-125px">Numero de telephone urgence</th>
                    <th class="min-w-125px">Date creation</th>

                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

                @foreach ($gestionnaires as $gestionnaire)
                    
                    <tr>
                        
                        <td>{{ $gestionnaire->nom }}</td>
                        <td>{{ $gestionnaire->prenom }}</td>
                        <td>{{ $gestionnaire->date_naissance }}</td>
                        <td>{{ $gestionnaire->genre }}</td>
                        <td>{{ $gestionnaire->email }}</td>
                        <td>{{ $gestionnaire->adresse}}</td>
                        <td>{{ $gestionnaire->num_tel }}</td>
                        <td>{{ $gestionnaire->num_tel_urgence }}</td>
                        <td>{{ $gestionnaire->created_at }}</td>
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
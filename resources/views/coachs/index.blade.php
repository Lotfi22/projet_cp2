@extends('layouts.solic')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter un Coach</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter un Coach</h2>
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
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/coachs/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nom</span>
                        </label>
                        
                        
                        <input required id="nom" type="text" class="form-control form-control-solid" placeholder="Nom du Coach"  name="nom"/>
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="prenom" class="required fs-6 fw-bold form-label mb-2">prénom</label>

                        <div class="position-relative">

                            <input required id="prenom" placeholder="prenom" type="text" class="form-control form-control-solid" name="prenom"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="date_naissance" class="required fs-6 fw-bold form-label mb-2">Date de naissance</label>

                        <div class="position-relative">

                            <input required id="date_naissance" placeholder="date_naissance" type="date" class="form-control form-control-solid" name="date_naissance"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="id_qr" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">QR code</span>
                        </label>
                        
                        
                        <input required id="id_qr" type="text" class="form-control form-control-solid" placeholder="QR code"  name="id_qr"/>
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->


                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="genre" class="required fs-6 fw-bold form-label mb-2">Genre</label>

                        <div class="position-relative">

                            <input required id="genre" placeholder="genre" type="text" class="form-control form-control-solid" name="genre"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="nbr_telephone" class="required fs-6 fw-bold form-label mb-2">Numéro téléphone</label>

                        <div class="position-relative">

                            <input required id="nbr_telephone" placeholder="numero tel" type="text" class="form-control form-control-solid" name="nbr_telephone"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="nbr_telephone_urgence">Numéro d'urgence</label>

                        <div class="position-relative">

                            <input id="nbr_telephone_urgence" placeholder="numero tel urgence" type="text" class="form-control form-control-solid" name="nbr_telephone_urgence"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="adress" class="required fs-6 fw-bold form-label mb-2">Adresse</label>

                        <div class="position-relative">

                            <input required id="adress" placeholder="adresse" type="text" class="form-control form-control-solid" name="adress"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>

                    <!--end::Input group-->
                    <!--begin::Input group-->

                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="email" class="required fs-6 fw-bold form-label mb-2">Email</label>

                        <div class="position-relative">

                            <input required id="email" placeholder="email" type="email" class="form-control form-control-solid" name="num_tel"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
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
                    <th class="min-w-125px">ID</th>
                    <th class="min-w-125px">NOM</th>
                    <th class="min-w-125px">PRENOM</th>
                    <th class="min-w-125px">DATE DE NAISSANCE</th>
                    <th class="min-w-125px">GENRE</th>
                    <th class="min-w-125px">NUMERO TELEPHONE</th>
                    <th class="min-w-125px">NUMERO D'URGENCE</th>
                    <th class="min-w-125px">ADRESSE</th>
                    <th class="min-w-125px">EMAIL</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

                @foreach ($coachs as $coach)
                    
                    <tr>
                        
                        <td>{{ $coach->id }}</td>
                        <td>{{ $coach->nom }}</td>
                        <td>{{ $coach->prenom }}</td>
                        <td>{{ $coach->date_naissance }}</td>
                        <td>{{ $coach->genre }}</td>
                        <td>{{ $coach->nbr_telephone }}</td>
                        <td>{{ $coach->nbr_telephone_urgence }}</td>
                        <td>{{ $coach->adress }}</td>
                        <td>{{ $coach->email }}</td>
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
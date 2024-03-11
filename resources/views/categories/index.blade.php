@extends('layouts.layout_admin')

@section('content')


<a href="#" class="btn btn-primary col-md-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Ajouter Nouvelle catégorie</a>



<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Ajouter Nouvelle Catégorie</h2>
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
                
                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/categories/create">
                    
                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">
                        
                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Name On Card</span>
                        </label>
                        
                        
                        <input required id="nom" type="text" class="form-control form-control-solid" placeholder="Nom de la catégorie"  name="nom"/>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label for="description" class="required fs-6 fw-bold form-label mb-2">description</label>

                        <div class="position-relative">

                            <input required id="description" placeholder="description" type="text" class="form-control form-control-solid" name="description"/>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-bold form-label mb-2">Tranche d'Age</label>
                            <!--end::Label-->
                            <!--begin::Row-->
                            <div class="row col-md-12">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="age_min" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Age minimum">

                                        <option></option>

                                        @for ($i = 3; $i < 50; $i++)
                                            
                                            <option value="{{ $i }}">{{ $i }}</option>

                                        @endfor

                                        {{--  --}}
                                    </select>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <select required name="age_max" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Age maximum">
                                        <option></option>

                                        @for ($i = 3; $i < 50; $i++)
                                            
                                            <option value="{{ $i }}">{{ $i }}</option>

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
                    <th class="min-w-125px">NOM</th>
                    <th class="min-w-125px">DESCRIPTION</th>
                    <th class="min-w-125px">AGE MINIMUM</th>
                    <th class="min-w-125px">AGE MAXIMUM</th>
                    <th class="min-w-125px">DATE CREATION</th>
                    <th class="text-end min-w-70px">Actions</th>
                </tr>
                <!--end::Table row-->
            </thead>

            <tbody class="fw-bold text-gray-600">

<<<<<<< HEAD
            			<td>{{ date_format(date_create($categorie->created_at),"d/m/Y H:i:s");}}</td>
=======
                @foreach ($categories as $categorie)
                    
                    <tr>
                        
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>{{ $categorie->age_min }}</td>
                        <td>{{ $categorie->age_max }}</td>
                        <td>{{ $categorie->created_at }}</td>
                        <td>Modifer , supprimer</td>
>>>>>>> 9e366f3b385adee68cb92383ef8ed69b9e79a8f2

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
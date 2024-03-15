@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes categories</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Catégorie
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID categorie</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Age Min</th>
                                <th>Age Max</th>
                                <th>Date création</th>
                                <th>actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>{{ $categorie->id }}</td>
                                    <td>{{ $categorie->nom ?? '' }}</td>
                                    <td>{{ $categorie->description ?? '' }}</td>
                                    <td>{{ $categorie->age_min ?? '' }}</td>
                                    <td>{{ $categorie->age_max ?? '' }}</td>
                                    <td>{{ $categorie->created_at ?? '' }}</td>
                                    <td>
                                        <div class="table-action">

                                            @include('includes.categorie_edit_delete_modal',compact('categorie'))

                                            {{--  --}}
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
<<<<<<< HEAD
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->

                <form id="kt_modal_new_card_form" class="form" method="POST" action="/admin/categories/create">

                    {{ csrf_field() }}


                    <div class="d-flex flex-column mb-7 fv-row">

                        <label for="nom" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required">Nom</span>
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
=======
>>>>>>> c72c0edd687502af66c0e11ba5eab22b96cc6b06
        </div>
    </div>





<<<<<<< HEAD
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

                @foreach ($categories as $categorie)

                    <tr>

                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td>{{ $categorie->description }}</td>
                        <td>{{ $categorie->age_min }}</td>
                        <td>{{ $categorie->age_max }}</td>
                        <td>{{ $categorie->created_at }}</td>
                        <td>Modifer , supprimer</td>


                    </tr>
=======
    <div class="modal fade " id="Ajout_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title " id="lineModalLabel">Ajouter categorie : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/categories/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="name">Nom </label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" placeholder="Entrez le nom de la catégorie" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="description">Description</label>
                            
                            <textarea rows="4" class="form-control" name="description" placeholder="Entrez la description de la catégorie" id="description"></textarea>
>>>>>>> c72c0edd687502af66c0e11ba5eab22b96cc6b06

                        </div>


                        <div class="form-group col-md-6">
                            <label class="label label-default" for="age_min">Age Min </label>
                            <input required type="number" min="3" max="99" value="{{ old('age_min') }}" name="age_min" class="form-control" id="age_min" placeholder="Entrez l'age minimum pour cette catégorie">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="age_max">Age Max </label>
                            <input required type="number" min="3" max="99" value="{{ old('age_max') }}" name="age_max" class="form-control" id="age_max" placeholder="Entrez l'age minimum pour cette catégorie">
                        </div>


                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="submit" class="col-md-12 btn btn-primary">Save</button>
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

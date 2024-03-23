@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Gestionnaires</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                    Ajouter Gestionnaire
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date naissance</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Numéro téléphone</th>
                                <th>Numéro urgence</th>
                                <th>Adresse</th>
                                <th>Date creation </th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($gestionnaires as $gestionnaire)
                            
                                <tr>
                                    <td>{{ $gestionnaire->id ?? ''}}</td>
                                    <td>{{ $gestionnaire->nom ?? ''}}</td>
                                    <td>{{ $gestionnaire->prenom ?? ''}}</td>
                                    <td>{{ $gestionnaire->date_naissance ?? ''}}</td>
                                    <td>{{ $gestionnaire->genre ?? ''}}</td>
                                    <td>{{ $gestionnaire->email ?? ''}}</td>
                                    <td>{{ $gestionnaire->num_tel ?? ''}}</td>
                                    <td>{{ $gestionnaire->num_tel_urgence ?? ''}}</td>
                                    <td>{{ $gestionnaire->adresse ?? ''}}</td>
                                    <td>{{ $gestionnaire->created_at ?? ''}}</td>
                                    <td>
                                        <div class="table-action">
            
                                            @include('includes.gestionnaire_edit_delete_modal',compact('gestionnaire')) 
                                           
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
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="lineModalLabel">Ajouter un gestionnaire </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/gestionnaires/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="name">Nom</label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" placeholder="Nom de gestionnaire" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="prenom">Prenom</label>
                            <input required type="text" value="{{ old('nom') }}" name="prenom" placeholder="prenom de gestionnaire" class="form-control" id="prenom">

                        </div>


                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="date_naissance">Date de naissance </label>
                            <input required type="date"  value="{{ old('date_naissance') }}" name="date_naissance" class="form-control" id="date_naissance" placeholder="Date de naissance de gestionnaire">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="genre">Genre</label>
                            <select id="genre" name="genre" required class="form-control">
                                <option value="" disabled selected>Genre</option>
                                <option value="Homme" >Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="email">Email</label>
                            <input required type="email"  value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email de gestionnaire">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="num_tel">Numéro de téléphone</label>
                            <input required type="tel"  value="{{ old('num_tel') }}" name="num_tel" class="form-control" id="num_tel" placeholder="Numéro de téléphone de gestionnaire">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="num_tel_urgence">Numéro de téléphone  d'urgence </label>
                            <input  type="tel"  value="{{ old('num_tel_urgence') }}" name="num_tel_urgence" class="form-control" id="num_tel_urgence" placeholder="Numéro de téléphone  d'urgence de gestionnaire">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="adresse">Adresse</label>
                            <input required type="adresse"  value="{{ old('adresse') }}" name="adresse" class="form-control" id="adresse" placeholder="Adresse de gestionnaire">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="id_qr">Id QR</label>
                            <input required type="text"  name="id_qr" class="form-control" id="id_qr" placeholder=" Id_qr du gestionnaire">
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="button" class="col-md-12 btn btn-danger" data-dismiss="modal" role="button">Fermer</button>
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="submit" class="col-md-12 btn btn-primary">Enregistrer</button>
                        </div>    
                
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
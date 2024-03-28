@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white">Admins</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary">
                    <i class="fa fa-plus"></i>Ajouter Admin
                </button>
                
                <button   style="margin-left: 880px"  class="btn btn-warning" class="fa fa-trash">
                    <a href="/admins/viewdeleted" style="color : #fff">Corbeille</a>
                </button> 

            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID</th>
                                <th>ID QR</th>
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
                            @foreach ($admins as $admin)
                            
                                <tr id="ligne{{$admin->id}}">
                                    <td>{{ $admin->id ?? ''}}</td>
                                    <td>{{ $admin->id_qr ?? ''}}</td>
                                    <td>{{ $admin->nom ?? ''}}</td>
                                    <td>{{ $admin->prenom ?? ''}}</td>
                                    <td>{{ $admin->date_naissance ?? ''}}</td>
                                    <td>{{ $admin->genre ?? ''}}</td>
                                    <td>{{ $admin->email ?? ''}}</td>
                                    <td>{{ $admin->num_telephone ?? ''}}</td>
                                    <td>{{ $admin->num_urgence ?? ''}}</td>
                                    <td>{{ $admin->adresse ?? ''}}</td>
                                    <td>{{ $admin->created_at ?? ''}}</td>
                                    <td>
                                        <div class="table-action">
                                            @include('includes.admin_edit_delete_modal',compact('admin')) 
                                           
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




    <div class="modal fade " id="Ajout_modal" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
       
            <div class="modal-content">
                <div class="modal-header pd-x-20">
                    <h3 class="modal-title" id="lineModalLabel">Ajouter un admin </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admins/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf
                        
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="name">Nom</label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" placeholder="Nom de admin" class="form-control" id="nom">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="prenom">Prenom</label>
                            <input required type="text" value="{{ old('nom') }}" name="prenom" placeholder="prenom de admin" class="form-control" id="prenom">

                        </div>


                        <div class="form-group col-md-6">
                            <label class="label label-default" for="date_naissance">Date de naissance </label>
                            <input required type="date"  value="{{ old('date_naissance') }}" name="date_naissance" class="form-control" id="date_naissance" placeholder="Date de naissance de admin">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="genre">Genre</label>
                            <select id="genre" name="genre" required class="form-control"  tabindex="-1" aria-hidden="true">
                                <option value="" disabled selected>Genre</option>
                                <option value="Homme" >Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                       
                    
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="ajout_password">Mot de passe</label>
                            <input required type="password" name="password" class="form-control" id="ajout_password" placeholder="Mot de passe">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="ajout_confirm_password">Confirmez le mot de passe</label>
                            <input required type="password" name="confirm_password" class="form-control" id="ajout_confirm_password" placeholder="Confirmer le mot de passe" onblur="validatePassword()">
                            <p class="invalid-feedback"></p>
                            <p class="valid-feedback"></p>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="email">Email</label>
                            <input required type="email"  value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email de admin">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="num_telephone">Numéro de téléphone</label>
                            <input required type="tel"  value="{{ old('num_telephone') }}" name="num_telephone" class="form-control" id="num_telephone" placeholder="Numéro de téléphone de admin">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="num_urgence">Numéro de téléphone  d'urgence </label>
                            <input  type="tel"  value="{{ old('num_urgence') }}" name="num_urgence" class="form-control" id="num_urgence" placeholder="Numéro de téléphone  d'urgence de l'admin">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label label-default" for="adresse">Adresse</label>
                            <input required type="adresse"  value="{{ old('adresse') }}" name="adresse" class="form-control" id="adresse" placeholder="Adresse de admin">
                        </div>
                       
                        <div class="form-group col-md-6">
                        </div>

                        <div class="btn-group col-md-6" role="group">

                            <button type="button" class="col-md-12 btn btn-danger" data-dismiss="modal" role="button">Annuler</button>
                        </div>

                        <div class="btn-group col-md-6" role="group">
                            
                            <button type="submit"  id = "ajout_enregistrer" class="col-md-12 btn btn-primary">Enregistrer</button>
                        </div>    
                
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('My_js/admins.js') }}"></script>
   
        
@endsection
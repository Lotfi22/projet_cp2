@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Mes Coaches</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i
                        class="fa fa-plus"></i>
                     Ajouter Coach
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                        <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>
                                <th>ID</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>DATE DE NAISSANCE</th>
                                <th>QR CODE</th>                    
                                <th>GENRE</th>
                                <th>NUMERO TELEPHONE</th>
                                <th>NUMERO D'URGENCE</th>
                                <th>ADRESSE</th>
                                <th>EMAIL</th>
                                <th text-end min-w-70px">Actions</th>
                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($coaches as $coach)
                                <tr>
                                    <td>{{ $coach->id }}</td>
                                    <td>{{ $coach->nom }}</td>
                                    <td>{{ $coach->prenom }}</td>
                                    <td>{{ $coach->date_naissance }}</td>
                                    <td>{{ $coach->id_qr }}</td>
                                    <td>{{ $coach->genre }}</td>
                                    <td>{{ $coach->nbr_telephone }}</td>
                                    <td>{{ $coach->nbr_telephone_urgence }}</td>
                                    <td>{{ $coach->adress }}</td>
                                    <td>{{ $coach->email }}</td>
                                    <td>
                                        <div class="table-action">

                                            @include('includes.coach_edit_delete_modal',compact('coach'))

                                            {{--  --}}
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title " id="lineModalLabel">Ajouter Coach : </h3>
                </div>
                
                <div class="modal-body">
                    
                    <form action="/admin/coaches/create" method="post" enctype="multipart/form-data" class="row col-md-12">
                        
                        @csrf

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="nom">Nom</label>
                            <input required type="text" value="{{ old('nom') }}" name="nom" class="form-control" id="nom" placeholder="Entrez le nom">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="label label-default" for="prenom">Prénom</label>
                            <input required type="text" value="{{ old('prenom') }}" name="prenom" class="form-control" id="prenom" placeholder="Entrez le prénom">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label class="label label-default" for="date_naissance">Date de naissance</label>
                            <input required type="date" value="{{ old('date_naissance') }}" name="date_naissance" class="form-control" id="date_naissance" placeholder="Entrez la date de naissance">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="id_qr">QR code</label>
                            <input required type="text" value="{{ old('id_qr') }}" name="id_qr" class="form-control" id="id_qr" placeholder="Entrez le QR code">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="genre">Genre</label>
                            <input required type="text" value="{{ old('genre') }}" name="genre" class="form-control" id="genre" placeholder="Entrez le genre">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="nbr_telephone">Numéro téléphone</label>
                            <input required type="text" value="{{ old('nbr_telephone') }}" name="nbr_telephone" class="form-control" id="nbr_telephone" placeholder="Entrez le numéro téléphone">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="nbr_telephone_urgence">Numéro d'urgence</label>
                            <input required type="text" value="{{ old('nbr_telephone_urgence') }}" name="nbr_telephone_urgence" class="form-control" id="nbr_telephone_urgence" placeholder="Entrez le numéro d'urgence">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="adress">Adresse</label>
                            <input required type="text" value="{{ old('adress') }}" name="adress" class="form-control" id="adress" placeholder="Entrez l'adresse">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="email">Email</label>
                            <input required type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Entrez l'email">
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
@extends('layouts.solic')

@section('content')


    <div class="container-fluid">

        <h1 class="mt-4 text-white" > Salles</h1>

        <div class="card mb-4">

            <div class="card-header">
                <button data-toggle="modal" data-target="#Ajout_modal" class="btn btn-primary"> <i class="fa fa-plus"></i>
                       Ajouter Salle
                </button>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                     <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">

                         <thead style="cursor:pointer;" class="bg-secondary text-white">
                            <tr>

                                <th>ID</th>
                                <th>CAPACITE</th>
                                <th>NOMBRE MACHINE</th>
                                <th>SUPERFICIE</th>
                                <th>DATE CREATION</th>
                                <th>Actions</th>
                            </tr>

                         </thead>

                          <tbody>
                               @foreach ($salles as $salle)

                                    <tr>

                                        <td>{{ $salle->id }}</td>
                                        <td>{{ $salle->capacite ?? ''}}</td>
                                        <td>{{ $salle->nb_machine ?? ''}}</td>
                                        <td>{{ $salle->superficie ?? ''}}</td>
                                        <td>{{ $salle->created_at ?? ''}}</td>
                                        <td>
                                            <div class="table-action">

                                                @include('includes.salle_edit_delete_modal',compact('salle'))

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
                    <h3 class="modal-title " id="lineModalLabel">Ajouter Salle : </h3>
                </div>

                <div class="modal-body">

                    <form action="/admin/salles/create" method="post" enctype="multipart/form-data" class="row col-md-12">

                        @csrf

                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="capacite">Capcité </label>
                            <input required type="number" value="{{ old('capacite') }}" name="capacite" placeholder="Capacité" class="form-control" id="capacite">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label label-default" for="nb_machine">Nombre Machine </label>
                            <input required type="number" value="{{ old('nb_machine') }}" name="nb_machine" placeholder="Nombre machine" class="form-control" id="nb_machine">

                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-lg-12 col-xl-12">
                            <label class="label label-default" for="superficie">Superficie </label>
                            <input required type="number" value="{{ old('superficie') }}" name="superficie" placeholder="Superficie" class="form-control" id="superficie">
                        </div>
                        






                        <div class="btn-group col-md-6" role="group">

                            <button type="submit"  class="col-md-12 btn btn-primary">Save</button>
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

@extends('layouts.solic')

@section('content')

<div class="container-fluid">

    <h1 class="mt-4 text-white">Les présences de la séance {{ $seance->id }}</h1>

    <div class="card mb-4">

        <div class="card-body">

            <input type="text" class="form-control mb-4" style="width: 100%;" value="Scanner le code QR pour ajouter une nouvelle présence" readonly>

              <div class="table-responsive">

                <table class="table card-table table-vcenter text-nowrap table-striped" id="datable-1" width="100%" cellspacing="0">
                    
                    <thead style="cursor:pointer;" class="bg-secondary text-white">

                        <tr>
                            <th>ID</th>
                            <th>ADHÉRANT</th>
                            <th>SÉANCE</th>
                            <th>HEURE DÉBUT</th>
                            <th>HEURE FIN</th>
                            <th>ÉVALUATION</th>
                            <th>DATE CRÉATION</th>
                            <th>Actions</th>
                        </tr>

                    </thead>

                    <tbody>
                        <!-- Contenu vide -->
                    </tbody>

                </table>

              </div>
        </div>

    </div>
    
</div>

@endsection

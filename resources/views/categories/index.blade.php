@extends('layouts.layout_admin')

@section('content')

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"> 
	<span class="sb-nav-link-icon"><i class="fas fa-plus"></i></span> Ajouter</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout nouvelle Catégorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{ route('categorie.create') }}" >

        	@csrf <!-- {{ csrf_field() }} -->

          	<div class="form-group">
            	<label for="recipient-name" class="col-form-label">Description:</label>
            	<input type="text" name="description" class="form-control" id="recipient-name">
          	</div>
		 	<button type="submit" class="btn btn-primary col-md-12">Valider</button>       
		</form>
      </div>
    </div>
  </div>
</div>


<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Categories
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>description</th>
                    <th>Ajoutée le</th>
                </tr>
            </thead>
            <tbody>
            	
            	@foreach ($categories as $categorie)
            		
            		<tr>
            			
            			<td>{{ $categorie->id  }}</td>

            			<td>{{ $categorie->discription }}</td>

            			<td>{{ date_format(date_create($categorie->created_at),"d/m/Y H:i:s"); }}</td>

            			{{--  --}}
            		</tr>

            		{{--  --}}	
            	@endforeach


            	{{--  --}}
            </tbody>
		</table>


<script>
	
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Nouvelle Catégorie')
  modal.find('.modal-body input').val(recipient)
})	

</script>


@endsection
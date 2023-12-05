@extends("crtl_1.eleves")


@section("title")
{{$type}}
@endsection

@section("content")
@if($type==="concours")
<div class="card" style="margin:20px;">
      <div class="card-header">Créer nouveau concours</div>
      <div class="card-body">
        <form action="{{ url("concours/creation") }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" id="titre" name="titre" required>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
      </div>
</div>
@elseif($type==="nouvelle")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir nouvelle </div>
      <div class="card-body">
        <form action="{{ url("nouvelle/creation") }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" id="titre" name="titre" required>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
          </div>
          <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" id="type" name="type" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
      </div>
</div>

@elseif($type==="equipe")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir equipe</div>
      <div class="card-body">
        <form action="{{ url("equipe/creation") }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="titre">Titre</label>
              <input type="text" class="form-control" id="titre" name="titre" required>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
          </div>
          <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" id="type" name="type" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
      </div>
</div>

@endif

@endsection


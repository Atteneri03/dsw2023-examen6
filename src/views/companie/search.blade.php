@extends("layouts.master")

@section("title", "Editar Usuario")

@section("content")
<form method="post">
<div class="mb-3">
    <label for="inputName" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputName" name="name" value="{{$companie->name}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
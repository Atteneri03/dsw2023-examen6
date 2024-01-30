@extends("master")

@section("title", "Bienvenido a Lista de Empresas")

@section("content")

<h2>Tabla de usuarios</h2>
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mode</th>
      <th scope="col">Description</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    @foreach($companies as $companie)
    <tr>
      <th scope="row">{{$companie->id}}</th>
      <td><a href="{{$companie->url}}">{{$companie->name}}</a></td>
      <td>{{$companie->url}}</td>
      <td>{{$companie->mode}}</td>
      <td>{{$companie->description}}</td>
      <td>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
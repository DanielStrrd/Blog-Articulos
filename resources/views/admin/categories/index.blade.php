@extends('admin.template.main')

@section('title', 'Listado de categorias')

@section('content')

  <table class="table table-stripped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="{{ route('categories.edit', $category->id) }}"  class="btn btn-info glyphicon glyphicon-pencil"></a>
            <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Desea eliminar la categoria?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $categories->render() !!}
  <br>
  <a href="{{ route('categories.create') }}" class="btn btn-primary">Nueva Categoria</a>

@endsection

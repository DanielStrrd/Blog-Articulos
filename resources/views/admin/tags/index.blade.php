@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('content')

  {!! Form::open(['route' => 'tags.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
      <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar tag', 'aria-describedby' => 'search'])!!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span></span>
      </div>
  {!! Form::close() !!}

  <table class="table table-stripped">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach($tags as $tag)
        <tr>
          <td>{{ $tag->id }}</td>
          <td>{{ $tag->name }}</td>
          <td>
            <a href="{{ route('tags.edit', $tag->id) }}"  class="btn btn-info glyphicon glyphicon-pencil"></a>
            <a href="{{ route('admin.tags.destroy', $tag->id) }}" onclick="return confirm('¿Desea eliminar el tag?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $tags->render() !!}
  <br>
  <a href="{{ route('tags.create') }}" class="btn btn-primary">Nuevo Tag</a>

@endsection

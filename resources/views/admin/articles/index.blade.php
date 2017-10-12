@extends('admin.template.main')

@section('title', 'Lista de articulos')

@section('content')

  {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
      <div class="input-group">
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo', 'aria-describedby' => 'search'])!!}
        <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search"></span></span>
      </div>
  {!! Form::close() !!}

  <table class="table table-stripped">
    <thead>
      <th>ID</th>
      <th>Titulo</th>
      <th>Categorias</th>
      <th>Usuario</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach($articles as $article)
        <tr>
          <td>{{ $article->id }}</td>
          <td>{{ $article->title }}</td>
          <td>{{ $article->category->name }}</td>
          <td>{{ $article->user->name }}</td>
          <td>
            <a href="{{ route('articles.edit', $article->id) }}"  class="btn btn-info glyphicon glyphicon-pencil"></a>
            <a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('¿Desea eliminar el articulo?')" class="btn btn-danger glyphicon glyphicon-remove"></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $articles->render() !!}
  <br>
  <a href="{{ route('articles.create') }}" class="btn btn-primary">Nuevo Articulo</a>

@endsection

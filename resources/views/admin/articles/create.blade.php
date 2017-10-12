@extends('admin.template.main')

@section('title', 'Agregar articulo')

@section('content')

  {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

      <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('category_id', 'Categria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Categoria']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control', 'required']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('image') !!}
      </div>

      <div class="form-group">
        {!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
      </div>

  {!! Form::close() !!}

@endsection

@section('js')
  <script>
    $('.select-tag').chosen({
      placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
      max_selected_option: 3,
      search_contains: true
    });
  </script>
@endsection

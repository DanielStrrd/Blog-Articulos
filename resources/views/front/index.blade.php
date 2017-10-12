@extends('front.template.main')

@section('title', 'Articulos')

@section('user', 'Aldo Daniel Torres Valadez | @DanielStrrd')


@section('content')
  <h3 class="title-front left">Ultimos Articulos</h3>
  <div class="row">
    <div class="col-md-9">
      <div class="row">

        @foreach ($articles as $article)
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="{{ route('front.view.article', $article->id) }}">
                  @foreach ($article->images as $image)
                    <img class="img-responsive img-article" src="{{ asset('images/articles/' .$image->name) }}" alt="">
                  @endforeach
                </a>
                <a href="{{ route('front.view.article', $article->id) }}"><h3 class="text-center">{{ $article->title }}</h3></a>
                <hr>
                <i class="fa fa-folder-open-o"></i>
                <a href="{{ route('front.search.category', $article->category->name) }}">
                  {{ $article->category->name }}
                </a>
                <div class="pull-right">
                  <i class="fa fa-clock-o"></i>{{ $article->created_at->diffForHumans() }}
                </div>
              </div>
            </div>
        </div>
        @endforeach
      </div>
      {!! $articles->render() !!}
    </div>
    <div class="col-md-3 aside">
      @include('front.partials.aside')
    </div>
  </div>
@endsection

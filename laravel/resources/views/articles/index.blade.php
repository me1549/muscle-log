@extends('app')

@section('title', '記録一覧')

@section('content')
  @include('nav')
  <div class="container">
    @foreach($articles as $article)
      @include('articles.card')

    @endforeach
  </div>
  <br>
  {{ $articles->links('vendor.pagination.simple-bootstrap-4') }}

@endsection



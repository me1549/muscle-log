@extends('app')

@section('title', $user->name . 'の部位タグ')

@section('content')
  @include('nav')
  <div class="container">
    @include('users.user')
    @include('users.tabs', ['hasArticles' => false, 'hasLikes' => false, 'hasTags' => true])
    @foreach($tags as $tag)
      <div class="card mt-3">
        <div class="card-body">
          <h2 class="h4 card-title m-0">{{ $tag->hashtag }}</h2>
          <div class="card-text text-right">
            {{ $tag->articles->count() }}件
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
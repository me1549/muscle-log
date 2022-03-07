@extends('app')

@section('title', '記録投稿')

@include('nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('articles.store') }}">
                @include('articles.form')
                <div class="text-center">
                  <button type="submit" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">記録する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@csrf
<div class="md-form">
  <label>トレーニング名</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}"> 
</div>
<div class="form-group">
  <article-tags-input
    :initial-tags='@json($tagNames ?? [])'
    :autocomplete-items='@json($allTagNames ?? [])'
  >
  </article-tags-input>
</div>

<!-- <div class="form-group">
  <label>重量</label>
  <input type="text" name="kg" class="form-control" required value="{{ $article->kg ?? old('kg') }}">kg
</div> -->

<div class="form-row">
    <div class="col-2">
      <input type="text" name="kg" class="form-control" placeholder="重量" required value="{{ $article->kg ?? old('kg') }}">
    </div>
    <div class="col-1">kg</div>
    <div class="col-2">
      <input type="text" name="count" class="form-control" placeholder="回数" required value="{{ $article->count ?? old('count') }}">
    </div>
    <div class="col-1">回</div>
    <div class="col-2">
      <input type="text" name="set" class="form-control" placeholder="セット数" required value="{{ $article->set ?? old('set') }}">
    </div>
    <div class="col-2">セット</div>
  </div>
  <br>

<!-- <div class="form-group">
  <label></label>
  <textarea name="body" required class="form-control" rows="2" placeholder="メモ">{{ $article->body ?? old('body') }}</textarea>
</div> -->

<div class="card mt-3">
  <div class="card-body d-flex flex-row">
    <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
      <i class="fas fa-user-circle fa-3x mr-1"></i>
    </a>
    <div>
      <div class="font-weight-bold">
        <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
          {{ $article->user->name }}
      </div>
      <div class="font-weight-bold">
        {{ $article->created_at->format('Y/m/d H:i') }}
      </div>
    </div>

    @if( Auth::id() === $article->user_id )
    <!-- dropdown -->
    <div class="ml-auto card-text">
      <div class="dropdown">
        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <button type="button" class="btn btn-link text-muted m-0 p-2">
            <i class="fas fa-ellipsis-v"></i>
          </button>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
            <i class="fas fa-pen mr-1"></i>編集
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
            <i class="fas fa-trash-alt mr-1"></i>削除
          </a>
        </div>
      </div>
    </div>
    <!-- dropdown -->

    <!-- modal -->
    <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
            @csrf
            @method('DELETE')
            <div class="modal-body">
              {{ $article->title }}を削除します。よろしいですか？
            </div>
            <div class="modal-footer justify-content-between">
              <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
              <button type="submit" class="btn btn-danger">削除する</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- modal -->
    @endif

  </div>
  <div class="card-body pt-0 pb-2">
    <h3 class="h4 card-title" align="center">
      <a class="text-dark" href="{{ route('articles.show', ['article' => $article]) }}">
        {{ $article->title }}
      </a>
    </h3>
    <br>
    @foreach($article->tags as $tag)
    @if($loop->first)
    <div class="card-body pt-0 pb-4 pl-3" align="center">
      <div class="card-text line-height">
        @endif
        <a href="{{ route('tags.show', ['name' => $tag->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
          {{ $tag->hashtag }}
        </a>
        @if($loop->last)
      </div>
    </div>
    @endif
    @endforeach
    <br>

    <table width="100%" class="card-text" align="center">
      <tr align="center">
        <td style="font-size: 20px;">重量</td>
        <td style="font-size: 20px;"> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> </td>
        <td style="font-size: 20px;">{!! nl2br(e( $article->kg )) !!} kg</td>

      </tr>
      <tr align="center">
        <td style="font-size: 20px;">回数</td>
        <td style="font-size: 20px;"> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> </td>
        <td style="font-size: 20px;">{!! nl2br(e( $article->count )) !!} 回</td>
      </tr>
      <tr align="center">
        <td style="font-size: 20px;">セット数</td>
        <td style="font-size: 20px;"> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> <i class="fas fa-chevron-circle-right"></i> </td>
        <td style="font-size: 20px;">{!! nl2br(e( $article->set )) !!} セット</td>
      </tr>
    </table>
  </div>

  <div class="card-body pt-0 pb-2 pl-3">
    <div class="card-text" align="right">
      <article-like :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))' :initial-count-likes='@json($article->count_likes)' :authorized='@json(Auth::check())' endpoint="{{ route('articles.like', ['article' => $article]) }}">
      </article-like>
    </div>
  </div>

</div>
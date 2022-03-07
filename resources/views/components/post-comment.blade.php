@props(['comment'])

<div id="comment-3" class="comment">
    <div class="d-flex">
      <div class="comment-img"><img src="{{ asset('storage/' . $comment->user->pic) }}" alt=""></div>
      <div>
        <h5><a href="">{{ $comment->user->name }}</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
        <time datetime="2020-01-01">{{ $comment->created_at->diffForHumans() }}</time>
        <p>
         {{ $comment->body }}</p>
      </div>
    </div>

  </div><!-- End comment #3 -->
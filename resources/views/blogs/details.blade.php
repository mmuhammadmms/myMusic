@extends('layouts.layout')


@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li>Blog Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="{{ asset('storage/' . $blog->thumbnails) }}" alt="" class="img-fluid">
              </div>

              <h2 class="title">{{ $blog->title }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{ $blog->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">{{ date('D, M Y', strtotime($blog->created_at))  }}</time></a></li>
                  
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                  {{ $blog->desc }}

              </div><!-- End post content -->


            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <div>
                <h4>{{ $blog->user->name }}</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>

              </div>
            </div><!-- End post author -->

            <div class="comments">

              @if (count($blog->comments) > 0 )
              <h4 class="comments-count">{{ count($blog->comments) }} Comments</h4>
              @endisset
              

              @foreach ($blog->comments as $comment)
                <x-post-comment :comment="$comment"/>
              @endforeach

              <div class="reply-form">

                <div>
                  <h4>Leave a Reply - {{ Auth::user()->name }}</h4>
  
                </div>
                

                  <div class="row">

                    <form action="/blogs/{{ $blog->slug }}/comments" method="post">
                      @csrf
                    <div class="col form-group">
                      <textarea name="body" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                    <x-form.error value="body"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

@endsection
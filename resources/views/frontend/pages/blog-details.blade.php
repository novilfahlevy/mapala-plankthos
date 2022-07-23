@extends('frontend.layouts.index')

@section('content')
<!-- ======= Blog Page ======= -->
<div class="blog-page mt-32">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="page-head-blog">
          <div class="single-blog-page">
            <!-- search option start -->
            <form action="#">
              <div class="search-option">
                <input type="text" placeholder="Search...">
                <button class="button" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
            <!-- search option end -->
          </div>
          <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
              <h4>Kegiatan terbaru</h4>
              <div class="recent-post">
                @forelse ($recents as $recent)
                <!-- start single post -->
                <div class="recent-single-post {{ $loop->index < $recents->count() - 1   ? 'border-b' : '' }}">
                  <div class="post-img">
                    <a href="{{ route('kegiatan.show', $recent->slug) }}">
                      <img src="{{ asset('storage/uploads/'.$recent->thumbnail_url) }}" alt="{{ $recent->title }}">
                    </a>
                  </div>
                  <div class="pst-content">
                    <h5><a href="{{ route('kegiatan.show', $recent->slug) }}">{{ $recent->title }}</a></h5>
                  </div>
                </div>
                <!-- End single post -->
                @empty
                <p class="text-center mt-4">Belum ada kegiatan</p>
                @endforelse
              </div>
            </div>
            <!-- recent end -->
          </div>
        </div>
      </div>
      <!-- End left sidebar -->
      <!-- Start single blog -->
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
              <div class="post-thumbnail">
                <img src="{{ asset('storage/uploads/'.$activity->thumbnail_url) }}" alt="{{ $activity->title }}" />
              </div>
              <div class="post-information">
                <h2>{{ $activity->title }}</h2>
                <div class="entry-meta">
                  <span class="author-meta"><i class="bi bi-person"></i> <a href="#">{{ $activity->user->name }}</a></span>
                  <span><i class="bi bi-clock"></i> {{ $activity->created_at->format('d F Y, H:m') }}</span>
                </div>
                <div class="entry-content">
                  {!! $activity->content !!}
                </div>
              </div>
            </article>
            <div class="clear"></div>
            <div class="single-post-comments">
              <div class="comments-area">
                <div class="comments-heading">
                  <h3>{{ $activity->comments()->count() }} komentar</h3>
                </div>
                <div class="comments-list">
                  <ul>
                    @forelse ($activity->comments as $comment)
                    <li>
                      <div class="comments-details">
                        <div class="comments-content-wrap">
                          <div class="d-flex align-items-center justify-content-between">
                            <span>
                              <b><a href="#">{{ $comment->name }}</a></b>
                              {{ $comment->is_author ? '(penulis)' : '' }}
                            </span>
                            <span class="post-time">{{ $comment->created_at->format('d F Y, H:m') }}</span>
                          </div>
                          <p>{{ $comment->comment }}</p>
                        </div>
                      </div>
                    </li>
                    @empty
                    <p class="text-center">Belum ada komentar</p>
                    @endforelse
                  </ul>
                </div>
              </div>
              <div class="comment-respond">
                <h3 class="comment-reply-title">Tinggalkan Komentar </h3>
                <form action="{{ route('komentar-kegiatan.store') }}" method="POST">
                  @csrf
                  <input type="hidden" name="activityId" value="{{ $activity->id }}">
                  <div class="row">
                    <div class="col-12">
                      <p>Name *</p>
                      <input type="text" name="name" id="name" />
                      @error('name')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <p>Email *</p>
                      <span class="email-notes">Email anda tidak akan dipublikasikan</span>
                      <input type="email" name="email" id="email" />
                      @error('email')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                      <p>Komentar</p>
                      <textarea id="message-box" name="comment" id="comment" cols="30" rows="10"></textarea>
                      @error('comment')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                      <input type="submit" value="Unggah" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- single-blog end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Page -->
@endsection
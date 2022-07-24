@extends('frontend.layouts.index')

@section('content')
<!-- ======= Blog Page ======= -->
<div class="blog-page mt-32">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 bg-slate-50 min-h-auto mb-3 lg:mb-10 p-4">
        <img src="{{ asset('storage/uploads/'.$activity->thumbnail_url) }}" class="mb-3" alt="{{ $activity->title }}" />
        <div class="flex items-center gap-3">
          @foreach ($activity->photos as $photo)
          <img
            src="{{ asset('storage/uploads/'.$photo->photo_url) }}"
            class="portfolio-lightbox cursor-pointer hover:opacity-80 w-[100px] h-[100px]"
            data-gallery="myGallery"
            width="100"
            height="100"
          >
          @endforeach
        </div>
      </div>
      <!-- Start single blog -->
      <div class="col-12 col-lg-8 lg:pl-10">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
              <div class="post-information pt-0">
                <h2>{{ $activity->title }}</h2>
                <div class="entry-meta">
                  <span class="author-meta"><i class="bi bi-people"></i> <a href="#">Divisi Mangrove</a></span>
                  <span><i class="bi bi-calendar"></i> {{ $activity->created_at->format('d F Y') }}</span>
                </div>
                <div class="entry-content">
                  {!! $activity->content !!}
                </div>
              </div>
            </article>
            <div class="clear"></div>
            {{-- <div class="single-post-comments">
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
            </div> --}}
            <!-- single-blog end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Page -->
@endsection
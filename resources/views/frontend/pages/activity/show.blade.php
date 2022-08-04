@extends('frontend.layouts.index')

@section('content')
<!-- ======= Blog Page ======= -->
<div class="blog-page mt-20 lg:mt-32">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-3">
        <p>
          <a href="{{ url('/') }}">Beranda</a>
          <span class="px-2">></span>
          <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
          <span class="px-2">></span>
          <span class="text-blue-800">{{ $activity->title }}</span>
        </p>
      </div>
      <div class="col-12 col-xl-4 bg-slate-50 min-h-auto mb-3 xl:mb-10 p-4">
        <img src="{{ asset('storage/uploads/'.$activity->thumbnail_url) }}" class="mb-3" alt="{{ $activity->title }}" />
        <div class="grid grid-cols-4 gap-2">
          @foreach ($activity->photos as $photo)
          <img
            src="{{ asset('storage/uploads/'.$photo->photo_url) }}"
            class="portfolio-lightbox cursor-pointer hover:opacity-80 w-[100px] md:h-[100px] h-[80px]"
            data-gallery="myGallery"
            width="100"
            height="100"
          >
          @endforeach
        </div>
      </div>
      <div class="col-12 col-xl-8 xl:pl-10">
        <article class="blog-post-wrapper">
          <div class="post-information pt-0">
            <h2>{{ $activity->title }}</h2>
            <div class="entry-meta pb-3 md:pb-0">
              <span class="author-meta"><i class="bi bi-person"></i> <a href="#">Diunggah oleh {{ $activity->user_name }}</a></span>
              <span class="author-meta"><i class="bi bi-people"></i> <a href="#">{{ $activity->division_name }}</a></span>
              <span><i class="bi bi-calendar"></i> {{ $activity->created_at->translatedFormat('d F Y') }}</span>
            </div>
            <div class="entry-content">
              {!! $activity->content !!}
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
@endsection
@extends('frontend.layouts.index')

@section('content')
<!-- ======= Blog Page ======= -->
<div class="blog-page mt-20 lg:mt-32">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>
          <a href="{{ url('/') }}">Beranda</a>
          <span class="px-2">></span>
          <span class="text-blue-800">{{ $division->name }}</span>
        </p>
      </div>
      <div class="col-12 col-lg-4">
        <h1 class="mt-2 text-lg">{{ $division->name }}</h1>
        <p>{{ $division->description }}</p>
      </div>
      <!-- Start single blog -->
      <div class="col-12 col-lg-8 lg:pl-10">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
              <div class="post-information pt-0">
                <h2>Kegiatan</h2>
                <div class="row mb-10">
                  @forelse ($division->activities as $activity)
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog relative">
                      <div class="single-blog-img">
                        <a href="{{ route('kegiatan.show', $activity->slug) }}">
                          <img src="{{ asset('storage/uploads/'.$activity->thumbnail_url) }}" alt="{{ $activity->title }}">
                        </a>
                      </div>
                      <a
                        href="{{ route('kegiatan.show', $activity->slug) }}"
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:!opacity-100 cursor-pointer flex flex-col items-center justify-center"
                      >
                        <h5 class="text-white text-center">{{ strlen($activity->title) > 30 ? substr($activity->title, 0, 30).'...' : $activity->title }}</h5>
                        <p class="text-white flex flex-col items-center gap-1">
                          <span><i class="bi bi-calendar mr-2"></i> {{ $activity->tanggal->format('d F Y') }}</span>
                          <span><i class="bi bi-people mr-2"></i> {{ $activity->division ? $activity->division->name : 'Umum' }}</span>
                        </p>
                      </a>
                    </div>
                    <!-- Start single blog -->
                  </div>
                  @empty
                  <p class="text-center">Belum ada kegiatan</p>
                  @endforelse
                </div>
              </div>
            </article>
            <div class="clear"></div>
            <!-- single-blog end -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- End Blog Page -->
@endsection
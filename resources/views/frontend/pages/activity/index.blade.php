@extends('frontend.layouts.index')

@section('header')
<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
  <div class="container position-relative">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center py-0">
          <div class="header-bottom">
            <div class="layer2 mb-4">
              <h1 class="title2">Kegiatan</h1>
            </div>
            <div class="layer3">
              <h5 class="title3 text-light">Kumpulan kegiatan kami yang menyenangkan dan memberi kami wawasan dam pengalaman yang luar biasa.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div><!-- End Blog Header -->
@endsection

@section('content')
<!-- ======= Blog Page ======= -->
<div class="blog-page mt-10">
<div class="container">
  <div class="row justify-content-center">
    <!-- End left sidebar -->
    <!-- Start single blog -->
    <div class="col-12 col-lg-8">
      <div class="row">
        <div class="col-12">
          <p>
            <a href="{{ url('/') }}">Beranda</a>
            <span class="px-2">></span>
            <a href="{{ route('kegiatan.index') }}" class="text-blue-800">Kegiatan</a>
          </p>
        </div>
        <div class="col">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="{{ route('cari-kegiatan') }}">
                <div class="search-option">
                  <input
                    type="text"
                    name="keyword"
                    id="keyword"
                    placeholder="Cari kegiatan..."
                    value="{{ request()->query->has('cari') ? request()->query->get('cari') : '' }}"
                  >
                  {{-- <button class="button" type="submit">
                    <i class="bi bi-search"></i>
                  </button> --}}
                </div>
              </form>
              <!-- search option end -->
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row mb-10">
            @forelse ($activities as $activity)
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
                  <h5 class="text-white">{{ strlen($activity->title) > 20 ? substr($activity->title, 0, 20).'...' : $activity->title }}</h5>
                  <p class="text-white flex flex-col items-center gap-1">
                    <span><i class="bi bi-calendar mr-2"></i> {{ $activity->tanggal->translatedFormat('d F Y') }}</span>
                    <span><i class="bi bi-people mr-2"></i> {{ $activity->division_name }}</span>
                  </p>
                </a>
              </div>
              <!-- Start single blog -->
            </div>
            @empty
            <p class="text-center">Belum ada kegiatan</p>
            @endforelse
          </div>
          {{ $activities->links() }}
        </div>
        <!-- End single blog -->
      </div>
    </div>
  </div>
</div>
</div><!-- End Blog Page -->
@endsection
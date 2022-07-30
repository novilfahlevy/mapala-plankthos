@extends('frontend.layouts.index')

@section('header')
<!-- ======= hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" style="background-image: url({{ asset('storage/img/background/bg_slayer.jpg') }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman</h2>
              <p class="animate__animated animate__fadeInUp">MAPALA PLANKTHOS
              </p>
              <a href="#tentang" class="btn-get-started scrollto animate__animated animate__fadeInUp">Tentang Plankthos</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url({{ asset('storage/img/background/bg_kerang.jpg') }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman</h2>
              <p class="animate__animated animate__fadeInUp">MAPALA PLANKTHOS 
              </p>
              <a href="#tentang" class="btn-get-started scrollto animate__animated animate__fadeInUp">Tentang Plankthos</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url({{ asset('storage/img/background/bg_slayer2.jpg') }})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Fakultas Perikanan dan Ilmu Kelautan Universitas Mulawarman</h2>
              <p class="animate__animated animate__fadeInUp">MAPALA PLANKTHOS</p>
              <a href="#tentang" class="btn-get-started scrollto animate__animated animate__fadeInUp">Tentang Plankthos</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero Section -->
@endsection

@section('content')
<!-- ======= About Section ======= -->
<div id="tentang" class="my-32">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Tentang Plankthos</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 flex justify-center md:justify-end">
        <img src="{{ asset('storage/img/logompl.png') }}" class="mr-20" style="width:250px;height:250px;" alt="Mapala Plankthos">
      </div>
      <div class="col-md-7">
        {!! $information['tentang'] !!}
      </div>
      <!-- End col-->
    </div>
  </div>
</div>
<!-- End About Section -->

<!-- ======= Jumlah Section ======= -->
<div id="tentang" class="mb-32 py-20 bg-slate-50">
  <div class="container">
    <div class="row">
      <div class="col-md-6 flex justify-center items-center flex-col mb-20 md:mb-0">
        <div class="section-headline text-center">
          <h2 style="font-family: 'Segoe UI';">Jumlah Angkatan</h2>
        </div>
        <h2 style="font-family: 'Segoe UI';">{{ $information['angkatan'] }}</h2>
      </div>
      <div class="col-md-6 flex justify-center items-center flex-col">
        <div class="section-headline text-center">
          <h2 style="font-family: 'Segoe UI';">Jumlah Anggota</h2>
        </div>
        <h2 style="font-family: 'Segoe UI';">{{ $information['anggota'] }}</h2>
      </div>
      <!-- End col-->
    </div>
  </div>
</div>
<!-- End Jumlah Section -->

<!-- ======= Visi Misi Section ======= -->
<div id="visi-misi" class="services-area mb-32">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline services-head text-center">
          <h2>Visi & Misi</h2>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <!-- Start Left services -->
      <div class="col-12">
        <div class="about-move">
          <div class="services-details">
            <div class="single-services">
              <h4>Visi</h4>
              {!! $information['visi'] !!}
            </div>
          </div>
          <!-- end about-details -->
        </div>
      </div>
      <div class="col-12">
        <div class="about-move">
          <div class="services-details">
            <div class="single-services">
              <h4>Misi</h4>
              {!! $information['misi'] !!}
            </div>
          </div>
          <!-- end about-details -->
      
          <!-- end about-details -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Services Section -->

<!-- ======= Division Section ======= -->
<div id="divisi" class="division-slider overflow-hidden mb-32">
  <div class="swiper-wrapper">
    @forelse ($divisions->get() as $division)
    <div class="h-[400px] w-full relative flex flex-col justify-center items-center swiper-slide" style="background: url({{ asset('storage/uploads/'.$division->background_url) }}) no-repeat; background-position: center center; background-size: cover;">
      <div class="absolute inset-0 bg-black bg-opacity-50 z-10">
      </div>
      <a href="{{ route('divisi.show', $division->slug) }}" class="flex flex-col items-center justify-center z-50">
        <img src="{{ asset('storage/uploads/'.$division->logo_url) }}" class="w-28 h-28 rounded-full border mb-4" alt="{{ $division->name }}">
        <h3 class="text-white text-md">{{ $division->name }}</h3>
        <p class="text-white">{{ $division->description }}</p>
      </a>
    </div>
    @empty
    <h5 style="color: white; margin: auto;">Belum ada divisi</h5>
    @endforelse
  </div>
  <div class="swiper-pagination"></div>
</div>

{{-- <div id="divisi" class="testimonials mb-32">
  <div class="container">
    <div class="testimonials-slider">
      <div class="swiper-wrapper">
        @forelse ($divisions->get() as $division)
        <div class="swiper-slide">
          <a href="{{ route('divisi.show', $division->slug) }}" class="testimonial-item">
            <img src="{{ asset('storage/uploads/'.$division->logo_url) }}" class="testimonial-img" alt="{{ $division->name }}">
            <h3>{{ $division->name }}</h3>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $division->description }}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </a>
        </div>
        @empty
        <h5 style="color: white; margin: auto;">Belum ada divisi</h5>
        @endforelse
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div> --}}
<!-- End Division Section -->

<!-- ======= Kegiatan Section ======= -->
<div id="kegiatan" class="blog-area mb-32">
  <div class="blog-inner">
    <div class="blog-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Kegiatan Terbaru</h2>
          </div>
        </div>
      </div>
      <div class="row justify-center mb-5">
        <!-- Start Left Blog -->
        @forelse ($activities->recents(3)->get() as $activity)
        <div class="col-md-4 col-sm-4 col-xs-12">
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
              <h5 class="text-white">{{ strlen($activity->title) > 30 ? substr($activity->title, 0, 30).'...' : $activity->title }}</h5>
              <p class="text-white flex flex-col items-center gap-1">
                <span><i class="bi bi-calendar mr-2"></i> {{ $activity->tanggal->format('d F Y') }}</span>
                <span><i class="bi bi-people mr-2"></i> {{ $activity->division ? $activity->division->name : 'Umum' }}</span>
              </p>
            </a>
          </div>
          <!-- Start single blog -->
        </div>
        @empty
        <h5 class="text-center">Belum ada data</h5>
        @endforelse
        <!-- End Left Blog-->
      </div>
      <div class="text-center">
        @if ($activities->count() > 3)
        <a href="{{ route('kegiatan.index') }}" class="ready-btn text-dark hover:!text-white border-dark">Lihat Selengkapnya</a>
        @endif
      </div>
    </div>
  </div>
</div>
<!-- End Kegiatan Section -->

<!-- ======= Ketua Section ======= -->
<div id="ketua-terdahulu" class="our-team-area bg-slate-50 py-32 mb-32">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Ketua Terdahulu</h2>
        </div>
      </div>
    </div>
    <div class="row justify-center">
      @forelse ($leaders as $leader)
      <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex mb-3">
        <div class="single-team-member flex flex-col justify-between">
          <div class="flex-1">
            <a href="#">
              <img src="{{ asset('storage/uploads/'.$leader->photo_url) }}" class="h-full" alt="{{ $leader->name }}">
            </a>
          </div>
          <div class="team-content text-center py-3">
            <h4 class="mb-2 text-sm">{{ $leader->name }}</h4>
            {{-- <p>{{ $leader->nim }}</p> --}}
            <p class="mb-0">{{ $leader->from_year }} {{ $leader->to_year ? ' - '.$leader->to_year : '' }}</p>
          </div>
        </div>
      </div>
      @empty
      <h5 class="text-center">Belum ada data</h5>
      @endforelse
    </div>
  </div>
</div>
<!-- End Team Section -->

<!-- ======= Struktur Organisasi ======= -->
<div id="struktur" class="our-team-area mb-32">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Struktur Organisasi</h2>
        </div>
      </div>
    </div>
    <img src="{{ asset('storage/uploads/'.$information['struktur']) }}" class="border-5 border-slate-50 shadow-sm mx-auto" alt="Struktur Organisasi Mapala Plankthos">
  </div>
</div>
<!-- End Team Section -->

<!-- ======= Contact Section ======= -->
<div id="kontak" class="contact-area mb-32">
  <div class="contact-inner">
    <div class="contact-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Kontak Kami</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <!-- Start contact icon column -->
        <div class="col-md-4">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="bi bi-whatsapp"></i>
              <p>
                WA: {{ $information['whatsapp'] }}<br>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <div class="col-md-4">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="bi bi-at"></i>
              <p>
                Email: {{ $information['email'] }}<br>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Google Map -->
        <div class="col-md-12">
          <!-- Start Map -->
          {!! $information['location'] !!}
          <!-- End Map -->
        </div>
        <!-- End Google Map -->
      </div>
    </div>
  </div>
</div>
<!-- End Contact Section -->
@endsection
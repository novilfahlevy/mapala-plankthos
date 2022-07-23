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
          <h2>Jumlah Angkatan</h2>
        </div>
        <h2>{{ $information['angkatan'] }}</h2>
      </div>
      <div class="col-md-6 flex justify-center items-center flex-col">
        <div class="section-headline text-center">
          <h2>Jumlah Anggota</h2>
        </div>
        <h2>{{ $information['anggota'] }}</h2>
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

<!-- ======= Testimonials Section ======= -->
<div id="testimonials" class="testimonials mb-32">
  <div class="container">
    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">
        @forelse ($reviews as $review)
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/uploads/'.$review->photo_url) }}" class="testimonial-img" alt="{{ $review->name }}">
            <h3>{{ $review->name }}</h3>
            <h4>{{ $review->position }}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{ $review->comment }}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
        @empty
        <h5 style="color: white; margin: auto;">Belum ada ulasan</h5>
        @endforelse

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</div>
<!-- End Testimonials Section -->

<!-- ======= Blog Section ======= -->
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
              <h5 class="text-white">{{ strlen($activity->title) > 20 ? substr($activity->title, 0, 20).'...' : $activity->title }}</h5>
              <p class="text-white">{{ $activity->comments()->count() }} comments</p>
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
<!-- End Blog Section -->

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
      <div class="col-12 col-md-4 col-lg-3 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/uploads/'.$leader->photo_url) }}" alt="{{ $leader->name }}">
            </a>
            <div class="team-social-icon">
              <h4 class="text-white">{{ $leader->name }}</h4>
              @if ($leader->nim)
              <p class="text-light">({{ $leader->nim }})</p>
              @endif
              <p class="text-light">{{ $leader->from_year }} {{ $leader->to_year ? ' - '.$leader->to_year : '' }}</p>
            </div>
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

<!-- ======= Portfolio Section ======= -->
{{-- <div id="galeri" class="area-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Galeri</h2>
        </div>
      </div>
    </div>

    <div class="row awesome-project-content portfolio-container">
      @forelse ($galleries as $gallery)
      <!-- portfolio-item start -->
      <div class="col-12 col-md-4 portfolio-item filter-app portfolio-item">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/uploads/'.$gallery->photo_url) }}" alt="{{ $gallery->title }}"></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/uploads/'.$gallery->photo_url) }}">
                  <h4>{{ $gallery->title }}</h4>
                  @if ($gallery->division)
                  <span>{{ $gallery->division }}</span>
                  @endif
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->
      @empty
      <h5 class="text-center">Belum ada data</h5>
      @endforelse

    </div>
  </div>
</div>
<!-- End Portfolio Section --> --}}

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
    <img src="{{ asset('storage/uploads/'.$information['struktur']) }}" class="mx-auto" alt="Struktur Organisasi Mapala Plankthos">
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
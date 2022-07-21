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
<div id="tentang" class="about-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Tentang Plankthos</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- single-well start-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-left">
          <div class="single-well">
            <a href="#">
              <img src="{{ asset('storage/img/logompl.png') }}" style="width:300px;height:300px;" alt="">
            </a>
          </div>
        </div>
      </div>
      <!-- single-well end-->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="well-middle">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head">Salam Lestari!</h4>
            </a>
            <p>
              Mapala Plankthos adalah Organisasi Mahasiswa Pecinta Alam yang berada dibawah naungan Fakultas Perikanan
              dan Ilmu Kelautan Universitas Mulawarman, Mapala Plankthos itu sendiri bergerak dibagian ekosistem pesisir pantai terutama
              dibidang Mangrove, Lamun dan Terumbu Karang.
            </p>
            <ul>
              <li>
                  Didirikan  : 11 April 2005 
              </li>
              <li>
                Alamat : Jl. Gunung Tabur, no.1, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur
              </li>
              <li>
                <i class="bi bi-instagram"></i> Instagram : <a href="https://www.instagram.com/mapala_plankthos/?hl=id"> @mapala_plankthos </a>
              </li>
              <li>
                <i class="bi bi-facebook"></i> Facebook : <a href="https://www.facebook.com/mapalaplankthos.unmul">Mapala Plankthos Fpik Unmul</a>
              </li>
              <li>
                <i class="bi bi-youtube"></i> Youtube : <a href="https://www.youtube.com/channel/UCUsTrkuc17OA4D6Q4sad0pA/featured">Mapala Plankthos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End col-->
    </div>
  </div>
</div><!-- End About Section -->

<!-- ======= Services Section ======= -->
<div id="visi-misi" class="services-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline services-head text-center">
          <h2>Visi dan Misi</h2>
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
              {!! $setting['visi'] !!}
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
              {!! $setting['misi'] !!}
            </div>
          </div>
          <!-- end about-details -->
      
          <!-- end about-details -->
        </div>
      </div>
    </div>
  </div>
</div><!-- End Services Section -->

<!-- ======= Team Section ======= -->
<div id="struktur" class="our-team-area area-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Keanggotaan</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/julak.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/_yusrilma_/">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Yusril M. Ambomasse</h4>
            <p>Ketua</p>
          </div>
        </div>
      </div>
      <!-- End column -->
      <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/gercep.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/_nmpketawa_/">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Restu Aji</h4>
            <p>B.U.M.O</p>
          </div>
        </div>
      </div>
      <!-- End column -->
      <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/galup.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Nurul Aminah</h4>
            <p>B.U.M.O</p>
          </div>
        </div>
      </div>
      <!-- End column -->
      <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/cheevas.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Elsa Faula Apriliani</h4>
            <p>Sekretaris</p>
          </div>
        </div>
      </div>
      <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/panter.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Kasmiah</h4>
            <p>Bendahara</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/kolesom.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Rezky Ananda</h4>
            <p>Lingkungan Hidup</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/gagak.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Muhammad Hafiz</h4>
            <p>Lingkungan Hidup</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/lago.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>M. Gusti Firmansyah</h4>
            <p>PSDA</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/tile.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Herianto</h4>
            <p>Mangrove</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/gamis.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Lukman Hakim</h4>
            <p>Mangrove</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/madu.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Tri Loveny</h4>
            <p>Lamun</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/susi.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>Nur Hamidah</h4>
            <p>Karang</p>
          </div>
        </div>
      </div>
      <!-- End column -->
                  <div class="col-md-3 col-sm-3 col-xs-12 d-flex mb-3">
        <div class="single-team-member">
          <div class="team-img">
            <a href="#">
              <img src="{{ asset('storage/img/pengurus/sota.jpg') }}" alt="">
            </a>
            <div class="team-social-icon text-center">
              <ul class="d-flex justify-content-center">
                <li>
                  <a href="#">
                    <i class="bi bi-facebook"></i>
                  </a>
                </li>
                <li>
                <li>
                  <a href="#">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="team-content text-center">
            <h4>M. Ramadhan</h4>
            <p>Karang</p>
          </div>
        </div>
      </div>
      <!-- End column -->
    </div>
  </div>
</div><!-- End Team Section -->

<!-- ======= Rviews Section ======= -->
<div class="reviews-area">
  <div class="row g-0">
    <div class="col-lg-6">
      <img src="{{ asset('storage/img/about/2.jpg') }}" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6 work-right-text d-flex align-items-center">
      <div class="px-5 py-5 py-lg-0">
        <h2>Bergabung dengan kami</h2>
        <h5>Bergabunglah dengan organisasi kami!</h5>
        <a href="#kontak" class="ready-btn scrollto">Kontak Kami</a>
      </div>
    </div>
  </div>
</div><!-- End Rviews Section -->

<!-- ======= Portfolio Section ======= -->
<div id="kegiatan" class="portfolio-area area-padding fix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h2>Foto Kegiatan</h2>
        </div>
      </div>
    </div>
    <div class="row wesome-project-1 fix">
      <!-- Start Portfolio -page -->
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->
      </div>
    </div>

    <div class="row awesome-project-content portfolio-container">

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/1.jpg') }}" alt="" /></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/1.jpg') }}">
                  <h4>Business City</h4>
                  <span>Web Development</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/2.jpg') }}" alt="" /></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/2.jpg') }}">
                  <h4>Blue Sea</h4>
                  <span>Photosho</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/3.jpg') }}" alt="" /></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/3.jpg') }}">
                  <h4>Beautiful Nature</h4>
                  <span>Web Design</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/4.jpg') }}" alt="" /></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/4.jpg') }}">
                  <h4>Creative Team</h4>
                  <span>Web design</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/5.jpg') }}" alt="" /></a>
            <div class="add-actions text-center text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/5.jpg') }}">
                  <h4>Beautiful Flower</h4>
                  <span>Web Development</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

      <!-- portfolio-item start -->
      <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
        <div class="single-awesome-project">
          <div class="awesome-img">
            <a href="#"><img src="{{ asset('storage/img/portfolio/6.jpg') }}" alt="" /></a>
            <div class="add-actions text-center">
              <div class="project-dec">
                <a class="portfolio-lightbox" data-gallery="myGallery" href="{{ asset('storage/img/portfolio/6.jpg') }}">
                  <h4>Night Hill</h4>
                  <span>Photoshop</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- portfolio-item end -->

    </div>
  </div>
</div><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<div id="testimonials" class="testimonials">
  <div class="container">

    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
              quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
              quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
              tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
              minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{ asset('storage/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
              labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</div><!-- End Testimonials Section -->

<!-- ======= Blog Section ======= -->
<div id="blog" class="blog-area">
  <div class="blog-inner area-padding">
    <div class="blog-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Blog Terbaru</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('blog.show', '1') }}">
                <img src="{{ asset('storage/img/blog/1.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="fa fa-comment-o"></i>
                <a href="#">13 comments</a>
              </span>
              <span class="date-type">
                <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="{{ route('blog.show', '1') }}">Assumenda repud eum veniam</a>
              </h4>
              <p>
                Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.
              </p>
            </div>
            <span>
              <a href="{{ route('blog.show', '1') }}" class="ready-btn">Lihat Selengkapnya</a>
            </span>
          </div>
          <!-- Start single blog -->
        </div>
        <!-- End Left Blog-->
        <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('blog.show', '1') }}">
                <img src="{{ asset('storage/img/blog/2.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="fa fa-comment-o"></i>
                <a href="#">130 comments</a>
              </span>
              <span class="date-type">
                <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="{{ route('blog.show', '1') }}">Explicabo magnam quibusdam.</a>
              </h4>
              <p>
                Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.
              </p>
            </div>
            <span>
              <a href="{{ route('blog.show', '1') }}" class="ready-btn">Lihat Selengkapnya</a>
            </span>
          </div>
          <!-- Start single blog -->
        </div>
        <!-- End Left Blog-->
        <!-- Start Right Blog-->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('blog.show', '1') }}">
                <img src="{{ asset('storage/img/blog/3.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="fa fa-comment-o"></i>
                <a href="#">10 comments</a>
              </span>
              <span class="date-type">
                <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="{{ route('blog.show', '1') }}">Lorem ipsum dolor sit amet</a>
              </h4>
              <p>
                Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo
                nisi magnam quibusdam.
              </p>
            </div>
            <span>
              <a href="{{ route('blog.show', '1') }}" class="ready-btn">Lihat Selengkapnya</a>
            </span>
          </div>
        </div>
        <!-- End Right Blog-->
      </div>
    </div>
  </div>
</div><!-- End Blog Section -->

<!-- ======= Contact Section ======= -->
<div id="kontak" class="contact-area">
  <div class="contact-inner area-padding">
    <div class="contact-overly"></div>
    <div class="container ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Kontak Kami</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Start contact icon column -->
        <div class="col-md-4">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="bi bi-phone"></i>
              <p>
                Call: +1 5589 55488 55<br>
                <span>Monday-Friday (9am-5pm)</span>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <div class="col-md-4">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="bi bi-envelope"></i>
              <p>
                Email: info@example.com<br>
                <span>Web: www.example.com</span>
              </p>
            </div>
          </div>
        </div>
        <!-- Start contact icon column -->
        <div class="col-md-4">
          <div class="contact-icon text-center">
            <div class="single-icon">
              <i class="bi bi-geo-alt"></i>
              <p>
                Location: A108 Adam Street<br>
                <span>NY 535022, USA</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Start Google Map -->
        <div class="col-md-12">
          <!-- Start Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.737104681784!2d117.1554565!3d-0.4696629!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9f0011314d875e31!2sMapala%20Plankthos!5e0!3m2!1sid!2sid!4v1637215832662!5m2!1sid!2sid"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
          <!-- End Map -->
        </div>
        <!-- End Google Map -->
      </div>
    </div>
  </div>
</div><!-- End Contact Section -->
@endsection
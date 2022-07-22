@extends('frontend.layouts.index')

@section('header')
<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
  <div class="container position-relative">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="slider-content text-center">
          <div class="header-bottom">
            <div class="layer2">
              <h1 class="title2">My Blog</h1>
            </div>
            <div class="layer3">
              <h2 class="title3">Profesional Blog Page</h2>
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
<div class="blog-page area-padding">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4">
      <div class="page-head-blog">
        <div class="single-blog-page">
          <!-- search option start -->
          <form action="#">
            <div class="search-option">
              <input type="text" placeholder="Cari...">
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
            <h4>Kegiatan Terbaru</h4>
            <div class="recent-post">
              <!-- start single post -->
              <div class="recent-single-post">
                <div class="post-img">
                  <a href="#">
                    <img src="{{ asset('storage/img/blog/1.jpg') }}" alt="">
                  </a>
                </div>
                <div class="pst-content">
                  <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                </div>
              </div>
              <!-- End single post -->
              <!-- start single post -->
              <div class="recent-single-post">
                <div class="post-img">
                  <a href="#">
                    <img src="{{ asset('storage/img/blog/2.jpg') }}" alt="">
                  </a>
                </div>
                <div class="pst-content">
                  <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                </div>
              </div>
              <!-- End single post -->
              <!-- start single post -->
              <div class="recent-single-post">
                <div class="post-img">
                  <a href="#">
                    <img src="{{ asset('storage/img/blog/3.jpg') }}" alt="">
                  </a>
                </div>
                <div class="pst-content">
                  <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                </div>
              </div>
              <!-- End single post -->
              <!-- start single post -->
              <div class="recent-single-post">
                <div class="post-img">
                  <a href="#">
                    <img src="{{ asset('storage/img/blog/4.jpg') }}" alt="">
                  </a>
                </div>
                <div class="pst-content">
                  <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                </div>
              </div>
              <!-- End single post -->
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
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('kegiatan.show', 'my-blog') }}">
                <img src="{{ asset('storage/img/blog/1.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="bi bi-chat"></i>
                <a href="#">11 komentar</a>
              </span>
              <span class="date-type">
                <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="#">Post my imagine Items</a>
              </h4>
              <p>
                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
              </p>
            </div>
            <span>
              <a href="{{ route('kegiatan.show', 'my-blog') }}" class="ready-btn">Baca Kelanjutannya</a>
            </span>
          </div>
        </div>
        <!-- End single blog -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('kegiatan.show', 'my-blog') }}">
                <img src="{{ asset('storage/img/blog/2.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="bi bi-chat"></i>
                <a href="#">7 komentar</a>
              </span>
              <span class="date-type">
                <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="#">Post my imagine Items</a>
              </h4>
              <p>
                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
              </p>
            </div>
            <span>
              <a href="{{ route('kegiatan.show', 'my-blog') }}" class="ready-btn">Baca Kelanjutannya</a>
            </span>
          </div>
        </div>
        <!-- Start single blog -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('kegiatan.show', 'my-blog') }}">
                <img src="{{ asset('storage/img/blog/3.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="bi bi-chat"></i>
                <a href="#">13 komentar</a>
              </span>
              <span class="date-type">
                <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="#">Post my imagine Items</a>
              </h4>
              <p>
                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
              </p>
            </div>
            <span>
              <a href="{{ route('kegiatan.show', 'my-blog') }}" class="ready-btn">Baca Kelanjutannya</a>
            </span>
          </div>
        </div>
        <!-- End single blog -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('kegiatan.show', 'my-blog') }}">
                <img src="{{ asset('storage/img/blog/4.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="bi bi-chat"></i>
                <a href="#">1 komentar</a>
              </span>
              <span class="date-type">
                <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="#">Post my imagine Items</a>
              </h4>
              <p>
                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
              </p>
            </div>
            <span>
              <a href="{{ route('kegiatan.show', 'my-blog') }}" class="ready-btn">Baca Kelanjutannya</a>
            </span>
          </div>
        </div>
        <!-- Start single blog -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="single-blog">
            <div class="single-blog-img">
              <a href="{{ route('kegiatan.show', 'my-blog') }}">
                <img src="{{ asset('storage/img/blog/5.jpg') }}" alt="">
              </a>
            </div>
            <div class="blog-meta">
              <span class="comments-type">
                <i class="bi bi-chat"></i>
                <a href="#">10 komentar</a>
              </span>
              <span class="date-type">
                <i class="bi bi-calendar"></i>2016-03-05 / 09:10:16
              </span>
            </div>
            <div class="blog-text">
              <h4>
                <a href="#">Post my imagine Items</a>
              </h4>
              <p>
                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit.
              </p>
            </div>
            <span>
              <a href="{{ route('kegiatan.show', 'my-blog') }}" class="ready-btn">Baca Kelanjutannya</a>
            </span>
          </div>
        </div>
        <!-- End single blog -->
        <div class="blog-pagination">
          <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link">&lt;</a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div><!-- End Blog Page -->
@endsection
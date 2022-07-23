<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <h1><a href="{{ url('/') }}"><span>Mapala </span>Plankthos</a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#beranda') : '#beranda' }}">Beranda</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#tentang') : '#tentang' }}">Tentang Plankthos</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#visi-misi') : '#visi-misi' }}">Visi dan Misi</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#testimonials') : '#testimonials' }}">Ulasan</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#kegiatan') : '#kegiatan' }}">Kegiatan</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#ketua-terdahulu') : '#ketua-terdahulu' }}">Ketua Terdahulu</a></li>
        <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#struktur') : '#struktur' }}">Stuktur Organisasi</a></li>
        {{-- <li><a class="nav-link scrollto" href="{{ request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show') ? url('/#galeri') : '#galeri' }}">Galeri</a></li> --}}
        <li><a href="#">B.U.M.O</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
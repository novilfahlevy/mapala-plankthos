<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <h1><a href="{{ url('/') }}"><span>Mapala </span>Plankthos</a></h1>
    </div>

    <nav id="navbar" class="navbar">
      @php
        $isInActivityPage = request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show');
        $isInDivisionpage = request()->routeIs('divisi.show');
        $isInsidePage = $isInActivityPage || $isInDivisionpage;
      @endphp
      <ul>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#beranda') : '#beranda' }}">Beranda</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#tentang') : '#tentang' }}">Tentang Plankthos</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#visi-misi') : '#visi-misi' }}">Visi dan Misi</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#testimonials') : '#testimonials' }}">Ulasan</a></li>
        <li><a class="nav-link scrollto {{ $isInActivityPage ? 'active' : '' }}" href="{{ route('kegiatan.index') }}">Kegiatan</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#ketua-terdahulu') : '#ketua-terdahulu' }}">Ketua Terdahulu</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#struktur') : '#struktur' }}">Stuktur Organisasi</a></li>
        {{-- <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#galeri') : '#galeri' }}">Galeri</a></li> --}}
        <li class="dropdown"><a class="{{ $isInDivisionpage ? 'active' : '' }}" href="#"><span>Divisi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            @foreach ($divisions as $division)
            <li><a href="{{ route('divisi.show', $division->slug) }}">{{ $division->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="#">B.U.M.O</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
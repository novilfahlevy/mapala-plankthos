<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <x-application-logo />

    <nav id="navbar" class="navbar">
      @php
        $isInActivityPage = request()->routeIs('kegiatan.index') || request()->routeIs('kegiatan.show');
        $isInDivisionpage = request()->routeIs('divisi.show');
        $isInsidePage = $isInActivityPage || $isInDivisionpage;
      @endphp
      <ul>
        <li><a class="nav-link scrollto {{ !$isInsidePage ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
        <li><a class="nav-link scrollto {{ $isInActivityPage ? 'active' : '' }}" href="{{ route('kegiatan.index') }}">Kegiatan</a></li>
        <li><a class="nav-link scrollto" href="{{ $isInsidePage ? url('/#divisi') : '#divisi' }}">Divisi</a></li>

        <li class="dropdown"><a class="{{ $isInDivisionpage ? 'active' : '' }}" href="#"><span>Organisasi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="{{ $isInsidePage ? url('/#tentang') : '#tentang' }}">Tentang Plankthos</a></li>
            <li><a href="{{ $isInsidePage ? url('/#visi-misi') : '#visi-misi' }}">Visi dan Misi</a></li>
            <li><a href="{{ $isInsidePage ? url('/#ketua-terdahulu') : '#ketua-terdahulu' }}">Ketua Terdahulu</a></li>
            <li><a href="{{ $isInsidePage ? url('/#struktur') : '#struktur' }}">Struktur</a></li>
          </ul>
        </li>

        <li><a href="{{ $information['bumo'] }}">B.U.M.O</a></li>
        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->
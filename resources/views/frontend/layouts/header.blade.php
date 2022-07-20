<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <h1><a href="{{ url('/') }}"><span>Mapala </span>Plankthos</a></h1>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#beranda">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#tentang">Tentang Plankthos</a></li>
        <li><a class="nav-link scrollto" href="#visi-misi">Visi dan Misi</a></li>
        <li><a class="nav-link scrollto" href="#kegiatan">Kegiatan</a></li>
        <li><a class="nav-link scrollto" href="#struktur">Struktur</a></li>
        <li><a href="{{ route('blog.index') }}">B.U.M.O</a></li>
        <li class="dropdown"><a href="#"><span>Divisi</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="#">Divisi Mangrove</a></li>
            <li><a href="#">Divisi Lamun</a></li>
            <li><a href="#">Divisi Karang</a></li>
          </ul>
        </li>
        {{-- <li><a class="nav-link" href="#login">Login</a></li> --}}
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
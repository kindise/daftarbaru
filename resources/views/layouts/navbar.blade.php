<nav class="navbar navbar-expand-lg" style="background: #d4f7ed;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('plugins/logos/rumahsehat.png') }}" alt="RSUD Pasar Rebo" style="height: 55px; ">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bold {{ (request()->is('/')) ? 'active' : '' }}" href="{{route('registrasi')}}">Daftar Baru</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
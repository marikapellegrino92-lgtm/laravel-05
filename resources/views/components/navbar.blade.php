<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">

    <a class="navbar-brand text-light" href="{{ route('home') }}">
     <i class="bi bi-balloon-heart-fill"></i>

      {{ config('app.name', 'save the date') }}
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#mainNavbar" aria-controls="mainNavbar"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('contact') }}">contattaci</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('register') }}">i nostri servizi</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

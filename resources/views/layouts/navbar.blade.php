<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">SURVEI KEPUASAN MASYARAKAT <img src="img/skm.jpg" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
       <div class="dropdown">
            <a class="nav-link active dropdown-toggle" type="button" id="dropdownMenuButton1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('Kelola SKM') }}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="nav-link active" href="{{ route('kategori') }}">{{ __('Kategori') }}</a></li>
                        <li><a class="nav-link active" href="{{ route('sub-kategori') }}">{{ __('Sub kategori') }}</a></li> 
                    </div>
        </div>
    </div>
  </div>
</nav>

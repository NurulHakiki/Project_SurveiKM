<!--Nav Start-->
<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
    <div class="container-fluid navbar-inner">
      @if (isset($show_logo) && $show_logo === 'show')
        <a href="/" class="navbar-brand d-flex" >
      
          <div>
            <h5 class="fw-bold text-dark">SKM</h5>

          </div>
        </a>
      @endif

      <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
          <i class="icon">
           <svg width="20px" height="20px" viewBox="0 0 24 24">
              <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
          </svg>
          </i>
      </div>
   


      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav d-flex justify-content-end me-xl-4" style="flex: 1;">
          <li class="nav-item">
            <a class="nav-link text-reset" href="#layanan">Isi Survey</a>
          </li>
        </ul>

        <div class="navbar-nav ms-auto align-items-center navbar-list" style="height: 50px;">
          @if(session()->get('username'))
          <a href="{{ url('admin/dashboard') }}" class="me-4 text-reset">                           
            
          </a>
          <a href="{{ url('auth/logout') }}" class="btn btn-primary">                           
            Logout
          </a>
          @else
          <a href="{{ url('login') }}" class="btn btn-primary">                           
            Login
          </a>
          @endif
        </div>
        
      </div>
     
    </div>

  </nav>          
  {{-- Nav End --}}
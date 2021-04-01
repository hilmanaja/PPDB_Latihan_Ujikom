<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Apotek</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Apotek</a>
      </div>
      <ul class="sidebar-menu">

          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="fas fa-fire"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="menu-header">Data Master</li>

            @if (auth()->user()->level=="admin")
             <a href="{{ route('user') }}" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data User</span>
              </a>
            </li>
            @endif


           @if (auth()->user()->level=="admin")
            <a class="nav-link" href="{{ route('latihan.index') }}">
                <i class="far fa-file-alt"></i> 
                <span>Data Pendaftaran Siswa Baru</span>
              </a>
            </li>
            @endif
          
          

        </ul>
    </aside>
  </div>
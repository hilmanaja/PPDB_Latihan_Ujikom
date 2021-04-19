<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Pendaftaran Siswa Baru</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Pendaftaran Siswa Baru</a>
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

          
             <a href="{{ route('user') }}" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data User</span>
              </a>
            </li>
       
            <a class="nav-link" href="{{ route('latihan.index') }}">
                <i class="far fa-file-alt"></i> 
                <span>Data Pendaftaran Siswa Baru</span>
              </a>
            </li>
          
          

        </ul>
    </aside>
  </div>
<aside id="sidebar" class="sidebar bg-primary text-white">

    <ul class="sidebar-nav bg-white" id="sidebar-nav ">
  
        <li class="nav-item"> 
            <a class="nav-link text-black" href="{{url('via')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
            <a class="nav-link collapsed text-black" data-bs-target="#pengajuan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pengajuan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('via/Pengajuan')}}" class="text-black">
                        <i class="bi bi-circle"></i><span>Pengajuan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Pengajuan Nav -->
  
        <li class="nav-item">
            <a class="nav-link collapsed text-black" data-bs-target="#agenda-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Agenda</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="agenda-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                  <a href="{{url('via/project')}}" class="text-black">
                    <i class="bi bi-circle"></i><span>Project</span>
                </a> 
                </li>
            </ul>
        </li><!-- End Agenda Nav -->
  
        <li class="nav-item">
            <a class="nav-link collapsed text-black" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="laporan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{url('via/diterima')}}" class="text-black">
                        <i class="bi bi-circle"></i><span>Diterima</span>
                    </a>
                </li>
                <li>
                </li>
            </ul>
        </li><!-- End Laporan Nav -->
  
        <li class="nav-heading text-muted">Pages</li>
  
        <li class="nav-item">
            <a class="nav-link collapsed text-black" href="{{url('via/profil')}}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
  
        <li class="nav-item">
            <a class="nav-link collapsed text-black" href="{{url('login-admin')}}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Logout</span>
            </a>
    </ul>
  
  </aside><!-- End Sidebar -->
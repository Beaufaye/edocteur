 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('patients')}}">
          <i class="bi bi-menu-button-wide"></i><span>Gestion des Patients</span></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('docteurs')}}">
          <i class="bi bi-menu-button-wide"></i><span>Gestion des Docteurs</span></i>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('rendezvous')}}">
          <i class="bi bi-menu-button-wide"></i><span>Gestion des Rendez-vous</span></i>
        </a>
      </li><!-- End Components Nav -->

    </ul>

  </aside><!-- End Sidebar-->
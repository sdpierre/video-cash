<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/')}}">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Inventory</li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/campaigns')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">My campaigns</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/videos')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">My videos</span>
            </a>
          </li>

        </ul>
      </nav>
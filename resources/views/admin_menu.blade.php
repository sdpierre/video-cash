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
            <a class="nav-link" href="{{ url('/advertisers')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Advertisers</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/campaigns')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Campaigns</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/videos')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Videos</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/prizes')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Prizes</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/users')}}">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>

        </ul>
      </nav>
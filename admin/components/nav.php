<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="dashboard.php" class="logo d-flex align-items-center">
    <img src="../assets/img/logo.jpg" style="max-width: 150px; max-height: 55px;"  alt="">
    
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Pesquisar" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->
    <li class="nav-item dropdown pe-3">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../assets/img/vaquinha.png" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
      </a><!-- End Profile Iamge Icon -->
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Vale do Leite</h6>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
          <hr class="dropdown-divider">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="./logout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sair</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed " href="dashboard.php">
      <i class="bi bi-grid"></i>
      <span>Inicio</span>
    </a>
  </li><!-- End Dashboard Nav -->

  

  <li class="nav-heading">Navegação</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="./painel-produtos.php">
    <i class="bi bi-card-list"></i>
      <span>Produtos</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="./painel-noticias.php">
    <i class="bi bi-file-earmark"></i>
      <span>Blog</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="./painel-banners.php">
    <i class="bi bi-card-image"></i>
      <span>Banners</span>
    </a>
  </li>
  <li class="nav-item">
    <div style="width: 100%;">
      <button class="btn btn-toggle dropdown-toggle align-items-center rounded nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Contatos
        </button>
        <div class="collapse" id="dashboard-collapse" >
          <ul class="btn-toggle-nav list-unstyled">
            <li><a href="editar-contato.php?edit_id=1" class="link-dark rounded nav-link collapsed">SAC</a></li>
            <li><a href="editar-contato.php?edit_id=2" class="link-dark rounded nav-link collapsed">Comercial</a></li>
          </ul>
        </div>
      </li>
      </div>
<hr>
  <li class="nav-item">
    <a class="nav-link collapsed" href="./logout.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Sair</span>
    </a>
  </li>
  
  <!-- End Login Page Nav -->
  
</ul>

</aside><!-- End Sidebar-->

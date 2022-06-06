<body>
  
  <div id="app">
    <div class="main-wrapper">
      <nav class="navbar navbar-expand-lg main-navbar" style=" background-image: url('<?php echo base_url('uploads/nav.png') ?>');">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element" style="border-color: green;">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" style="border-color: green;">
            <button class="btn" type="submit" style="border-color: green;"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
           
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
          <?php if($this->session->userdata('nama')){ ?>
          <button class="btn btn-secondary"><a class="nav-link" style="color: white;" href="<?php echo base_url('auth/logout') ?>">Selamat Datang | <?php echo $this->session->userdata('nama') ?> <span class="btn btn-sm btn-danger">Logout</span> </a></button>
        <?php } else{ ?>
          <a class="nav-link" href="<?php echo base_url('auth/login') ?>"><span class="btn btn-sm btn-success">Login</span> </a>
        <?php } ?>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="container text-center mt-3">
           <img  src="<?php echo base_url('uploads/sb.png')?>" style="width: 50px; height: 50px;">
           </div>
          <div class="sidebar-brand">
            <a href="index.html">Sewa Baju</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">              
              <li><a class="nav-link" href="<?php echo base_url('penyewa/dashboard') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tshirt"></i> <span>Baju</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url('kategori/baju_adat') ?>">Baju Adat</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('kategori/baju_nikah') ?>">Baju Pernikahan</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('kategori/baju_pesta') ?>">Baju Pesta/Kondangan</a></li>
                  <li><a class="nav-link" href="<?php echo base_url('kategori/baju_kostum') ?>">Baju Kostum Anak</a></li>
                </ul>
              </li>

              <li><a class="nav-link" href="<?php echo base_url('penyewa/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>

            </ul>

            
        </aside>
      </div>

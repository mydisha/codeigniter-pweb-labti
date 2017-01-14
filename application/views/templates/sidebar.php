<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url(); ?>dashboard" class="simple-text">
                    Pariwisata Lombok
                </a>
            </div>
            <ul class="nav">
                <li class="<?php if ($this->uri->segment(1) === "dashboard") {echo 'active';}?>">
                    <a href="<?php echo base_url(); ?>dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) === "lokasi") {echo 'active';}?>">
                    <a href="<?php echo base_url(); ?>lokasi/index">
                        <i class="ti-user"></i>
                        <p>Data Lokasi</p>
                    </a>
                </li>
                <li class="<?php if ($this->uri->segment(1) === "kategori") {echo 'active';}?>">
                    <a href="<?php echo base_url(); ?>kategori/index">
                        <i class="ti-user"></i>
                        <p>Kategori Lokasi</p>
                    </a>
                </li>
<!--                 <li class="<?php if ($this->uri->segment(1) === "map") {echo 'active';}?>">
                    <a href="table.html">
                        <i class="ti-map"></i>
                        <p>Tampilan Maps</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $title; ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url(); ?>logout">
                                <i class="ti-unlock"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
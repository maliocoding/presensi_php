 <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                              <!--   <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="index.html">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard Example 1
                                    </a>
                                </li> -->
                                  
                                <?php if($_SESSION['jenis']!='mahasiswa'){ ?>
                                <li class="app-sidebar__heading">Main Menu</li>
                               
                                <li  >
                                    <a href="index.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Buat Jadwal
                                    </a>
                                </li>
                 
                             
                                <li  >
                                    <a href="lihat_mahasiswa.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Kelola Data Mahasiswa
                                    </a>
                                </li>
                               
                                 <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Izin Presensi
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="izin.php">
                                                <i class="metismenu-icon">
                                                </i>Tambah izin
                                            </a>
                                            <a href="lihat_izin.php">
                                                <i class="metismenu-icon">
                                                </i>Kelola izin
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                          
                                  <li  >
                                    <a href="laporan.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                       Laporan
                                    </a>
                                </li>
                            <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>   
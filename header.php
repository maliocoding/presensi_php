<?php 
    if($_SESSION['jenis']!='mahasiswa'){
    $user=$_SESSION['user'];
    $query = mysqli_query($con, "select nama_dosen as nama,jenis from dosen where user='$user' ");
    }

    if($_SESSION['jenis']=='mahasiswa'){
    $npm=$_SESSION['npm'];
    $query = mysqli_query($con, "select nama,'Mahasiswa' as jenis from mahasiswa where npm=$npm ");
    }
?>
   <div class="app-header header-shadow">
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
            </div>    

            <div class="app-header__content">
                <div class="app-header-left">
                        

                </div>


   <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/my.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                           
                                            <button type="button" tabindex="0" class="dropdown-item">Profil</button>
                                    
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item" onclick="myFunction()">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php

                                            while ($d=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                                            echo $d['nama'];
                                            $jns=$d['jenis'];
                                         }
                                                            

                                        ?>
                                    </div>
                                    <div class="widget-subheading">
                                        <?php echo $jns; ?>
                                    </div>
                                </div>
                                <!-- <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div> -->
                            </div>
                        </div>
                    </div>       

                </div>
            </div>
        </div>
        <script type="text/javascript">

            function myFunction() {
              var txt;
              var r = confirm("Anda yakin logout?");
              if (r == true) {
                 $.ajax({
                type: "POST",
                url: "logout.php",
                success:function(){
                       
                        document.location = 'login.php';
                      

                    }
              });
              } else {
                
              }
             
            }
            
        
       

              
          
   
          

        </script>
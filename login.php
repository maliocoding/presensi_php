<?php
   require('conn.php');  
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login - SISTEM PRESENSI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.css" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('./assets/images/new-4.jpg');"></div>
                                        <div class="slider-content"><h3>SISTEM PRESENSI</h3>
                                            <p>Tidak ada sistem yang sempurna, Kesempurnaan hanyalah milik Sang Pecipta</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('./assets/images/new-4.jpg');"></div>
                                       <div class="slider-content"><h3>SISTEM PRESENSI</h3>
                                            <p>Tidak ada sistem yang sempurna, Kesempurnaan hanyalah milik Sang Pecipta</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('./assets/images/new-4.jpg');"></div>
                            <div class="slider-content"><h3>SISTEM PRESENSI</h3>
                                            <p>Tidak ada sistem yang sempurna, Kesempurnaan hanyalah milik Sang Pecipta</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div style="margin-bottom: 10%; margin-left: 30%; "><img src="./assets/images/logo-inverse.png" width="40%"></div>

                            <h4 class="mb-0">
                                <span class="d-block"></span>
                                <span>Silahkan Login</span></h4>
                          <!--   <h6 class="mt-3">No account? <a href="javascript:void(0);" class="text-primary">Sign up now</a></h6> -->
                            <div class="divider row"></div>
                            <div>
                                <form  method="post" action="login.php">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="exampleEmail" class="">User</label><input name="user" id="exampleEmail" placeholder="Username" type="text" class="form-control"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="pass" id="examplePassword" placeholder="Password" type="password"
                                            class="form-control"></div>
                                        </div>
                                        
                                    </div>
                                    Login Sebagai:
                              
                                    <div class="position-relative form-check"><label class="form-check-label"><input name="tipe" type="radio" class="form-check-input" value="mahasiswa"> Mahasiswa</label>
                                      </div>
                                    <div class="position-relative form-check"><label class="form-check-label"><input name="tipe" type="radio" class="form-check-input" value="dosen"> Dosen / Petugas BAAK</label>
                                    </div>
                                                       
                                                   
                                    </div>
                                   
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div >
                                            <button class="btn btn-primary btn-lg" type="submit" name="login" value="login">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>

</body>
</html>

<?php 
if(!empty($_POST["login"])) {


   $user=$_POST['user'];
   $pass=md5($_POST['pass']); 
   $tipe=$_POST['tipe'];


   if($tipe=='dosen') {
     $query = mysqli_query($con, "select * from dosen where user='$user' and pass='$pass'");
                $rowcount = mysqli_num_rows($query);
                if ($rowcount>0){
                    
                    while($res=mysqli_fetch_array($query,MYSQLI_ASSOC)){

                        $_SESSION['user']=$res['user']; 
                        $_SESSION['sudahlogin']='udahdong';
                        $_SESSION['jenis']=$res['jenis'];

                        }
                      
                      
                       echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                             
                             
                         
                }else{
                            echo '<script>alert("Gagal login")</script>';
                        }
    }

    if($tipe=='mahasiswa'){
        $query = mysqli_query($con, "select * from mahasiswa where npm='$user' and password='$pass'");
                $rowcount = mysqli_num_rows($query);
                if ($rowcount>0){
                    
                    while($res=mysqli_fetch_array($query,MYSQLI_ASSOC)){

                        $_SESSION['npm']=$res['npm'];
                        $_SESSION['nama']=$res['nama'];
                        $_SESSION['sudahlogin']='udahdong';
                         $_SESSION['jenis']='mahasiswa';
                     

                        }
                      
                      
                       echo "<script type='text/javascript'> document.location = 'laporan_mahasiswa.php'; </script>";
                             
                             
                         
                }else{
                            echo '<script>alert("Gagal login")</script>';
                        }
    }

  
                    
                        
                      
                 


    }
        ?>
    

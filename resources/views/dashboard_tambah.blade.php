<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard_beranda.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
      <div class="row min-vh-100 flex-column flex-md-row">

        <!-- awal navbar -->
        <aside class="col-12 col-md-3 col-xl-2 p-0 sideNav ">
            <div class="logo p-3">
             <a href="#" class="navbar-brand mx-0 font-weight-bold text-nowrap text-light px-4  " ><img src="{{ asset('image/logo_evote.png') }}" width="90px" height="75px"></a>
            </div>
          <nav class="navbar navbar-expand-md navbar-light  flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-column mb-sm-auto mb-0 align-items-start px-2 align-items-sm-start mt-5">
              <li class="nav-item">
                <a href="mainHome.html" class="nav-link align-middle px-0 py-4">
                  <img src="{{ asset('image/icon_home.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="mainDashboardPresensi.html" class="nav-link px-0 align-middle py-4">
                <img src="{{ asset('image/icon_people.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Pengguna</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link px-0 align-middle py-4">
                <img src="{{ asset('image/icon_folder.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Statistik</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="main_matakuliah_pemweb.html" class="nav-link px-0 align-middle py-4">
                  <img src="{{ asset('image/icon_image.png') }}" alt=""> <span class="ms-1  d-sm-inline text-light">Berita</span>
                </a>
              </li>
            </ul>
        </div>
        <button type="button" class="btn btn-lg rounded-3" style="background-color: #FFA800; width:100px;height:40px; color: white;font-size:18px; margin-top:12rem;">Keluar</button>
          </nav>
        </aside>
        <!-- akhir navbar -->

        <div class="col py-3" style="background:#F0F2FA ;">

          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-lg-12">
            <!-- awal header -->
              <div class="container">
                <div class="header row">
                <div class="d-flex bd-highlight">
  <div class="p-2 flex-grow-1 bd-highlight">
  <div class="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
                          <input type="text" class="form-control" placeholder="Have a question? Ask Now">
                       
                        </div>
  </div>
  
  <div class="p-2 bd-highlight">Third flex item

  </div>
</div>

                 
                </div>
              </div>
            <!-- akhir header -->
                <!-- RECENTLY ACCESSED COURSE AWAL -->
                <div class="container mt-5">
                    <h4><b>Tambah Peserta</b></h4>
                        <div class="paralax">
                          <br>
                          <div class="row">
                                <div class="card mt-3 col-md-3 col-sm-3 col-lg-3 mx-auto">
                                    <span class="mt-3 mx-auto"><b>Pemrograman Web(A)</b></span>
                                </div>
                  
                                <div class="card mt-3 col-md-3 col-sm-3 col-lg-3  mx-auto">
                                    <span class="mt-3 mx-auto"><b>Jaringan Komputer(F)</b></span>
                                </div>

                                <div class="card mt-3 col-md-3 col-sm-3 col-lg-3  mx-auto">
                                    <span class="mt-3 mx-auto"><b>Metode Numerik(C)</b></span>
                                </div>
                          </div>
                          <br>
                          
                        </div>
                        <!-- RECENTLY ACCESSED COURSE AKHIR -->
                          
                </div>
                
              </div>

            </div>
          </div>
        </div>
    </div>
</div>



<!-- <footer class="">
<div class="container">

  <div class="d-md-flex bd-highlight">
  <div class="p-2 flex-grow-1 bd-highlight">
    <img src="img/logo_mikrop.png" alt="">
    <img src="img/logo_bytesfest.png" alt="">
    <img src="img/logo_uns.png" alt="">
  </div>

  <div class="p-2 bd-highlight">
<h3>HUBUNGI KAMI</h3>
<span>Jalan Ir.Sutami 36 Kentingan, Jebres,</span>
<br>
<span>Surakarta, Jawa Tengah. Indonesia 57126.</span>
<br>
<span>Telepon 0271-646994 | </span>
<br>
<span>campus@mail.uns.ac.id</span>
<div class="mt-3">
  <img src="img/icon_linkedin.png" alt="" class="px-2">
  <img src="img/icon_fb.png" alt="" class="px-2">
  <img src="img/icon_instagram.png" alt="" class="px-2">
  <img src="img/icon_twitter.png" alt="" class="px-2">
  <img src="img/icon_gmail.png" alt="" class="px-2">
</div>
  </div>
</div>

</div>

</footer> -->

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
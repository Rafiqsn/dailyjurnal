<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Rafiq</title>
    <link rel="icon" href="img/logo.webp" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        

    <nav id="nav"class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-danger-subtle">
         <div class="container">
         <a class="navbar-brand" >Flowerion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                  <li class="nav-item ">
                     <a class="nav-link" aria-current="page" href="#hero">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#aboutme">About Me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php" target="_blank">Login</a>
                  </li>
                  <li class="nav-item ms-3 ">
                    <button id="light" class="btn "><i class="bi bi-sun"></i></button>
                   <button id="dark" class="btn "><i class="bi bi-moon"></i></button>
                  </li>
              </div>
        </div>
     </nav>



    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start malam" >
            <div class="container">
                <div class=" d-sm-flex  flex-sm-row-reverse align-items-center ">
                    <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="img-fluid" width="500">
                    <div class="m-5">
                        <h1 class="fw-bold display-4 ">
                            Macam - Macam Bunga &nbsp di Indonesia
                        </h1>
                        <h5 class="lead">
                            Semua dengan keindahan karakteristik yang dimiliki, menaungi ciptaan tuhan dengan ciri khas yang berbeda beda membuat daya tarik dengan sendirinya, bahkan adanya bunga cantik tidak selalu berjiwa cantik.
                        </h5>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                      </div>
                </div>
            </div>
    </section>
    
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
    
  </div>
</section>
<!-- article end -->

    <section id="gallery" class="text-center p-5 bg-danger-subtle malam">
        <div class="container">
        <h1 class="fw-bold display-4 pb-3 mb-5">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
        
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </section >

      
    <section id="schedule" class="text-center p-5 ">
      

        <h1 id=""class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="container d-flex flex-wrap justify-content-evenly">

        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Senin</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4">Probabilitas dan Stastika 12.30-15.00 | H.4.7 </li>
            <li class="list-group-item p-5">Rekayasa Perangkat Lunak 12.30-15.00 | H.4.7</li>
          </ul>
          
        </div>

        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Selasa</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4"> &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp Sistem Operasi &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 09.30-12.00  | H.3.11</li>
            <li class="list-group-item p-5">Logika Informatika 15.30-18.00 | H.4.5</li>
          </ul>
        </div>


        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Rabu</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4">Probabilitas dan Stastika &nbsp 12.30-15.00 | H.4.7</li>
            <li class="list-group-item p-5">Rekayasa Perangkat Lunak 12.30-15.00 | H.4.7</li>
          </ul>
        </div>

        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Kamis</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4">Probabilitas dan Stastika 12.30-15.00 | H.4.7 
            </li>
            <li class="list-group-item p-5">Rekayasa Perangkat Lunak 12.30-15.00 | H.4.7</li>
          </ul>
        </div>

        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Jumat</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4">Probabilitas dan Stastika 12.30-15.00 | H.4.7</li>
            <li class="list-group-item p-5">Free</li>
          </ul>
        </div>
        <div class="card m-2" style="width: 18rem;">
          <div class="card-body bg-danger text-white">
            <h5 class="card-title">Sabtu</h5>
          </div>
          <ul class="list-group">
            <li class="list-group-item p-4">Probabilitas dan Stastika 12.30-15.00 | H.4.7 </li>
            <div class="list-group-item p-5">Free</dicv>
          </ul>
        </div>

      </div>
    </section>

    <section id="aboutme" class="bg-danger-subtle  text-center text-sm-start ">
    <div class="container p-4">
      <div class=" d-sm-flex  flex-sm-row align-items-center justify-content-center">
          <img src="https://prosettings.net/cdn-cgi/image/dpr=1%2Cf=auto%2Cfit=contain%2Cgravity=top%2Cheight=400%2Cq=99%2Csharpen=1%2Cwidth=400/wp-content/uploads/spoit.png" id="img" class="rounded-circle" width="500">
          <div class="m-5 text-sm-start " id="text">
            <h5 class="lead">
                  A11.2023.15013
              </h5>
              <h3 class="fw-bold display-6 ">
                 Rafiq Susetya Nugraha
              </h3>
              <h5 class="lead">
                Program Studi Teknik Informatika
            </h5>
            <h5 class="Bold">
              Universitas Dian Nuswantoro
            </h5>
      </div>
  </div>
</section>



    <footer id="footer"class="text-center p-5 ">
      <div>
        <a href="https://www.instagram.com/rafiq.sn/profilecard/?igsh=MXZoNzE4ZXg2NTAzeQ=="><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/qr/PR3WENRLWKDGD1"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        <a href="https://youtube.com/@fufu6148?si=CjeoV-6phDLpqOIQ"><i class="bi bi-youtube h2 p-2 text-dark"></i></a>
      </div>
      <div >
        Rafiq Susetya Nugraha &copy; 2024
      </div>
    </footer>


    <script type="text/javascript">
      document.getElementById("img").onclick = function(){
        if (document.getElementById("text").style.display=="none"){
             document.getElementById("text").style.display="inline"
            }else{document.getElementById("text").style.display="none"}
      }


        window.setTimeout("tampilWaktu()",1000);

        function tampilWaktu(){
          var waktu = new Date();
          var bulan = waktu.getMonth()+1;

        
        setTimeout("tampilWaktu()",1000);
        document.getElementById("tanggal").innerHTML=
          waktu.getDate()+ "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
        }





        document.getElementById("dark").onclick = function(){
        document.body.classList.remove("bg-white")
        document.body.classList.add("bg-secondary")
        document.body.classList.add("text-white")
        document.getElementById("nav").classList.remove("bg-danger-subtle")
        document.getElementById("nav").classList.add("bg-secondary")


        const a = document.getElementsByClassName("malam")
        for (let i=0 ; i<a.length;i++){
          a[i].classList.remove("bg-danger-subtle")
          a[i].classList.remove("text-dark")
          a[i].classList.add("bg-dark")
          a[i].classList.add("text-white")
          

        }
        }

        document.getElementById("light").onclick = function(){
        document.body.classList.remove("text-white")
        document.body.classList.add("text-black")
        document.body.classList.add("bg-white")
        document.getElementById("nav").classList.remove("bg-secondary")
        document.getElementById("nav").classList.add("bg-danger-subtle")
        document.getElementById("footer").classList.remove("text-white")
        document.getElementById("footer").classList.add("text-black")


        const a = document.getElementsByClassName("malam")
        for (let i=0 ; i<a.length;i++){
          a[i].classList.remove("bg-dark")
          a[i].classList.remove("text-white")
          a[i].classList.add("bg-danger-subtle")
          a[i].classList.add("text-dark")
          

        }
        }


















        
    </script>


















  </body>
  <style>
    /*.rounded-circle{
      width: 400px;
      height: 400px;
    
    }

  </style>*/
</html>


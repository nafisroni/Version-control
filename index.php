<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- punya ku -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/PANDAWA.png">
    <title>Pandawa Roleplay</title>
    
    </head>
    <body>
<!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top m-2">
        <div class="container">
        <img class="me-2" src="img/PANDAWA.png" alt="pandawa logo" width="40" >
        <br>
        <a class="navbar-brand fw-bold"> <span class="text-warning">PANDAWA</span> ROLEPLAY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-6" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="beranda nav-link active" href="#beranda">TENTANG</a>
            </li>
            <li class="nav-item">
                <a class="tentang nav-link" href="#tentang">STATISTIK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="landingpage/index.html">SYSTEM REQUIREMENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donasi/index.html">DONASI</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Akhir NAVBAR -->
    <!-- JUMBOTRON -->
    <section id="beranda">
    <div class="jumbotron text-center">
            <img src="img/logokuning.png" alt="PANDAWA" width="300px" />        
                <p class="lead text-light"></p>
    <br>
                <h3 class="statcard-number">
                        <input type="text" hidden value= "<?php echo$wa_url?>" class="no-style" onclick="this.select()"  id="ip"/>
                        <a href="https://wa.me/<?php echo$wa_url ?>" class="btn btn-success" data-aos="fade-right" data-aos-duration="1500"> WHATSAPP</a>
                    </h3>
    </div>
    </section>
    <br>
    <br>
    <!-- AKHIR JUMBOTRON -->
    <section id="tentang" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
        <div class="tentang row justify-content-center text-center" >
            <h3 class="text-warning mb-4 fs-2" style="margin-top: 1em;" data-aos="fade-up" data-aos-offset="320" data-aos-delay="300">TENTANG KOTA PANDAWA</h3>
            <div class="col-md-8">
                <p class="text-light mb-4" data-aos="fade-right" data-aos-offset="320" data-aos-duration="1500">Merupakan Komunitas Game Online dari GTA 5 Modifikasi untuk bermain roleplay.
                    ROLEPLAY adalah permainan memerankan sebuah karakter seperti layaknya di dunia nyata dan bertemu dengan player lain dengan cerita kehidupan yang kita tentukan sendiri. Seperti di dunia nyata, kadang hidup kita membosankan, terkadang juga hidup kita penuh drama.</p>
            </div>
            <div class="col-md-4 mb-2 ">
                <ul class="list-group list-group-flush">
                <li class="list-group-item bg-transparent" data-aos="fade-left" data-aos-offset="300" data-aos-duration="800">
                        <a
                        class="btn btn-secondary btn-lg btn-floating shadow"
                        href="#!"
                        role="button"
                        ><i class="fab fa-instagram"> INSTAGRAM</i
                        ></a>
                </li>
                <li class="list-group-item bg-transparent" data-aos="fade-left" data-aos-offset="300" data-aos-duration="900">
                        <a
                        class="btn btn-primary btn-lg btn-floating shadow"
                        href="#!"
                        role="button"
                        ><i class="fab fa-instagram"> DISCORD</i
                        ></a>
                    </li>
                <li class="list-group-item bg-transparent" data-aos="fade-left" data-aos-offset="200" data-aos-duration="1000">
                        <a
                        class="btn btn-danger btn-lg btn-floating shadow"
                        href="#!"
                        role="button"
                        ><i class="fab fa-youtube"> YOUTUBE</i
                        ></a>
                    </li>
            </ul>
            </div>
        </div>
    </div>
    </section>

    <br>
    <!-- STATISTIK KOTA -->
    <div class=" container">
        <div class="row text-center mb-3">
            <div class="col mt-3">
            <h3 class="text-warning fs-2" data-aos="fade-up" data-aos-offset="320" data-aos-delay="300"> STATISTIK KOTA</h3>
            </div>
            <hr class="bg-warning">
        </div>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <a href="status/index.php" class="btn btn-info d-grid gap-2 col-3 mx-auto text-center" data-aos="fade-down" data-aos-offset="200" data-aos-delay="300" >STATUS KOTA</a>
                </div>
            </div>
        </div>
        <div class="row fw-bold">
            <div class="col-xl-4 col-md-2 mb-4 mt-2 " data-aos="flip-left" data-aos-duration="1000">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class=" font-weight-bold text-primary text-uppercase mb-1">
                                    Penduduk</div>
                                <div class="text-gray-800">400</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-2 mb-4 mt-2" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Kendaraan</div>
                                <div class="text-gray-800">100</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-car fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-2 mb-4 mt-2" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Banned Player</div>
                                <div class="text-gray-800">0</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ban fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container mt-4">
    <div class="card">
        <div class="row no-gutters">
                <div class="col-md-12 ">
                    <div class="rating-progress-bars p-3">
                        <div class="progress-1 align-items-center">
                            <div class="progress mb-2" style="height:40px">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 12%;" aria-valuenow="16" data-aos="fade-right"> POLISI: 12 </div>
                            </div>
                            <div class="progress mb-2" style="height:40px">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="16" data-aos="fade-right" data-aos-delay="100"> AMBULANCE: 10 </div>
                            </div>
                            <div class="progress mb-2" style="height:40px">
                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 8%" aria-valuenow="16" data-aos="fade-right" data-aos-delay="200"> MEKANIK: 8 </div>
                            </div>
                            <div class="progress" style="height:40px">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="16" data-aos="fade-right" data-aos-delay="300"> WARGA: 400 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<!-- End of Main Content -->
    <!-- AKHIR STATISTIK -->
<br>
    <footer class="bg-dark text-center text-white" data-aos="fade-down" data-aos-delay="100">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook
            <a
            class="btn btn-primary btn-floating m-1 rounded-circle"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
            ></a> -->
    
            <!-- Twitter -->
            <a
            class="btn btn-secondary btn-floating m-1 fs-4 rounded-circle"
            href="https://www.youtube.com/channel/UCfjSj3eJmVRrBpQUMHHgd9w"
            role="button"
            data-aos="fade-up" data-aos-delay="100"
            ><i class="fab fa-youtube"></i
            ></a>
    
            <!-- Google -->
            <a
            class="btn btn-secondary btn-floating m-1 fs-4 rounded-circle"
            href="https://www.instagram.com/pandawarp.id/"
            role="button"
            data-aos="fade-up" data-aos-delay="100"
            ><i class="fab fa-google"></i
            ></a>
    
            <!-- Instagram -->
            <a
            class="btn btn-secondary btn-floating m-1 fs-4 rounded-circle"
            href="https://www.instagram.com/pandawarp.id/"
            role="button"
            data-aos="fade-up" data-aos-delay="100"
            ><i class="fab fa-instagram"></i
            ></a>

            <!-- Discord -->
            <a
            class="btn btn-secondary btn-floating m-1 fs-4 rounded-circle"
            href="https://discord.gg/UR9xHGRwcN"
            role="button"
            data-aos="fade-up" data-aos-delay="100"
            ><i class="fab fa-discord"></i
            ></a>
        </section>
        <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #000000">
        © 2022 Copyright:
        <a class="text-light" href="https://www.instagram.com/nafisroni_/">PANDAWA ROLEPLAY</a>
        </div>
        <!-- Copyright -->
    </footer>



    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true, // whether animation should happen only once - while scrolling down
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/TextPlugin.min.js"></script>

    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {duration:1, delay:0.5, text:'FIVEM | SERVER INDONESIA' });
        gsap.from('.jumbotron img', {duration:1 , rotateY: 360, opacity:0});
        gsap.from('.jumbotron p', {duration:1, x:-50, opacity:0 , delay: 0.5 });
        // gsap.from('.jumbotron p', {duration:1, y:-100, opacity:0, ease:'slow' });

</script>
    
    <!-- JS files: jQuery pertama, lalu Popper.js, selanjutnya Bootstrap JS, lalu Font Awesome JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/206142bfe3.js" crossorigin="anonymous"></script>
<script src="active.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BisnisKu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Custom -->
    <style>
        body {
            background-image: url("./assets/img/white-brick.jpg");
            background-color: #cccccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-light border border-dark border-3">


            <a class="navbar-brand px-5" href="/">

                <img src="./assets/img/BisnisKu.png" alt="" height="75px">
                <span class="text-dark px-5">Rumah Kost, Ayunda Food, dan Ayunda Store</span>
            </a>


            <!-- Navbar Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Link -->
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <div class="btn-group btn-group-sm px-2 m-1">
                        <button id="RumahKost" type="button" class="btn btn-light border-dark">
                            <b>Rumah Kost Nanda</b>
                        </button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="RumahKost">
                            <li><a class="dropdown-item" href="#">Fasilitas Bersama</a></li>
                            <li><a class="dropdown-item" href="#">Lokasi Dekat Dengan</a></li>
                        </ul>
                    </div>

                    <div class="btn-group btn-group-sm px-2 m-1">
                        <button id="AyundaFood" type="button" class="btn btn-light border-dark">
                            <b>Ayunda Food</b>
                        </button>
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="AyundaFood">
                            <li><a class="dropdown-item" href="#">Menu</a></li>
                            <li><a class="dropdown-item" href="#">Pesan Yuk</a></li>
                        </ul>
                    </div>

                    <div class="btn-group btn-group-sm px-2 m-1">
                        <button id="AyundaStore" type="button" class="btn btn-light border-dark">
                            <b>Ayunda Store</b>
                        </button>
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="AyundaStore">
                            <li><a class="dropdown-item" href="#">Barang</a></li>
                            <li><a class="dropdown-item" href="#">Jasa</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <div>



            <div class="card m-2">
                <div class="card-body">
                    <iframe width="100%" height="200" frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?q=rumah%20kost%20nanda&key=AIzaSyBTC_fHkXkD66HnDeTKqiWm3FvLUr4RnF8"
                        allowfullscreen></iframe>
                </div>


            </div>
        </div>

        <!-- The Business -->
        <div class="m-3">
            <div class="">
                <div class="row">
                    <div class=" col">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="./assets/img/RumahKost.png" class="card-imgfooter" alt="...">
                            <div class="card-footer bg-info ">
                                <div class="text-center">
                                    <a href="rumahKost"
                                        class="btn btn-info border-light text-light">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mx-auto" style="width: 18rem;">
                            <img src="./assets/img/AyundaFood.png" class="card-img-top" alt="...">
                            <div class="card-footer bg-success">
                                <div class="text-center">
                                    <a href="ayundaFood" class="btn btn-success border-light">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card d-grid mx-auto" style="width: 18rem;">
                            <img src="./assets/img/AyundaStore.png" class="card-img-top" alt="...">
                            <div class="card-footer bg-danger">
                                <div class="text-center">
                                    <a href="ayundaStore" class="btn btn-danger border-light">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <nav class="navbar navbar-expand-lg bg-light border border-dark border-3">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-5 mb-5 mb-lg-0 p-2">
                            <h4 class="text-uppercase mb-4 ">Lokasi</h4>
                            <p class="lead mb-0">
                                Kramat Sentiong Gg. Mesjid No.F89
                                <br>
                                RT.03 / RW.06 Kel. Kramat Kec. Senen
                                <br />
                                Jakarta Pusat, 10450
                            </p>
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 mb-5 mb-lg-0 p-2">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i
                                    class="fab fa-fw fa-facebook-f"></i></a>
                            <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i
                                    class="fab fa-fw fa-twitter"></i></a>
                            <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i
                                    class="fab fa-fw fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i
                                    class="fab fa-fw fa-dribbble"></i></a>
                        </div>
                        <!-- Footer About Text-->
                        <div class="col-lg-3 p-2">
                            <h4 class="text-uppercase mb-4">Tentang Kami</h4>
                            <p class="lead mb-0">
                                Usaha Mandiri Keluarga
                                <br>
                                Rumah Kost Nanda, Ayunda Food, dan Ayunda Store
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>
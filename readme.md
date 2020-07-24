<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Srengengewetan</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/bootstrap.css">
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/style3.css" />
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/bootstrap-select.min.css">

    <!-- JQUERY -->
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/gijgo.min.css"/>

    <!-- DATATABLES -->
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="https://github.com/setyakomero/srengengewetan/blob/master/public/css/buttons.bootstrap4.min.css">
    
    <!-- JS -->
    <!-- JQUERY -->
    <script type="text/javascript" src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/gijgo.min.js"></script>

</head>
<body style="background-image: url(https://github.com/setyakomero/srengengewetan/blob/master/public/img/background/bg.png);">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <style type="text/css">
                    .logo{
                        background-color: #3d2c19;
                        border-bottom-right-radius: 25px;
                        border-bottom-left-radius: 25px;
                    }
                </style>
                <div class="logo col-md-2 pt-2 pb-3">
                    <div class="mx-auto" style="max-width: 150px;">
                        <img class="img-fluid" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/logo/sw.png">
                    </div>
                </div>
                <div class="col-md-10">
                    <style>
                        .navbar{ background-color: transparent; }
                    </style>
                    <nav class="navbar navbar-expand-lg navbar-dark m-0 p-0">
                        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse font-weight-bold" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img class="d-block w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/banner/header.png">
            </div>
        </div>
    </div>

    
    <div class="container">
        <div class="row mb-3">
            <div class="mx-auto">
                <p class="h2 text-white">Tentang Kami</p>
            </div>
            <div class="col-12">
                <p class="text-justify text-white" style="font-size: 13.5px;">
                    Restoran Srengenge Wetan didirikan sebagai wujud dedikasi dan apresiasi kepada para jagoan-jagoan  masak zaman dahulu seperti ibu-ibu rumah tangga dan pembantu-pembantu rumah tangga yang telah meracik bumbu-bumbu alami dari aneka ragam rempah-rempah di Indonesia sehingga bisa tercipta makanan dengan cita rasa yang tinggi dan khas dari Banyuwangi. Resto Srengenge Wetan adalah restoran khas Banyuwangi yang tetap mempertahankan standar resep tradisional untuk kenikmatan pelanggannya.Restoran ini Didirikan tahun 2017 dan bertempat tepat pada titik 0 Kilometer di Jl. PB. Sudirman No. 175 - 2 - Banyuwangi. Suasana restoran yang nyaman juga bisa dijadikan tempat untuk berbagai function, acara keluarga bahkan acara untuk perusahaan. Resto Srengenge Wetan adalah tempat yang tepat untuk menikmati kelezatan masakan khas Banyuwangi dalam suasana yang nyaman dan penuh kehangatan.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 bg-white">
        <div class="container">
            <div class="row">
                <style>
                    .carousel-control-prev-icon,
                    .carousel-control-next-icon{
                        height: 100px;
                        width: 100px;
                        background-size: 100%, 100%;
                        background-image: none;
                    }

                    .carousel-control-next-icon:after{
                        content: '>';
                        font-size: 55px;
                        color: black;
                    }

                    .carousel-control-prev-icon:after{
                        content: '<';
                        font-size: 55px;
                        color: black;
                    }
                </style>
                <div class="col-12 mt-3">
                    <p class="promo h2 text-dark">PROMO</p>
                </div>
                <div class="col-12 p-3">
                    <div id="carouselPromo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark">Live Music</h5>
                                        <p class="text-justify text-dark" style="font-size: 12px;">
                                            This is content for First slide
                                        </p>
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div style="text-align: center; height: 400px;">
                                            <img style="max-width: 100%; height: 100%;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/001.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark">Chinese New Year</h5>
                                        <p class="text-justify text-dark" style="font-size: 12px">
                                            This is content for Second slide
                                        </p>
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div style="text-align: center; height: 400px;">
                                            <img style="max-width: 100%; height: 100%;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/002.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark">Festival Rujak Soto</h5>
                                        <p class="text-justify text-dark" style="font-size: 12px">
                                            This is content for Third slide
                                        </p>
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div style="text-align: center; height: 400px;">
                                            <img style="max-width: 100%; height: 100%;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/003.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="text-dark">September Ceria</h5>
                                        <p class="text-justify text-dark" style="font-size: 12px">
                                            This is content for Fourth slide
                                        </p>
                                    </div>
                                    <div class="col-md-8 p-0">
                                        <div style="text-align: center; height: 400px;">
                                            <img style="max-width: 100%; height: 100%;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/004.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPromo" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPromo" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselPromo" data-slide-to="0" class="active">
                                <img class="d-block w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/001.png">
                            </li>
                            <li data-target="#carouselPromo" data-slide-to="1">
                                <img class="d-block w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/002.png">
                            </li>
                            <li data-target="#carouselPromo" data-slide-to="2">
                                <img class="d-block w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/003.png">
                            </li>
                            <li data-target="#carouselPromo" data-slide-to="3">
                                <img class="d-block w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/promo/004.png">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        
    </div>

    <div class="container-fluid p-0" style="background-color: #49392e;">
        <style type="text/css">
            .bg-menu{
                -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, 
                from(rgba(0,0,0,1)), to(rgba(0,0,0,0)));
            }
        </style>
         <div class="col-12 p-0 bg-white bg-menu" style="overflow: hidden; max-height: 175px;">
            <img class="w-100" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/background/bg-menu.png">
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-6">
                    <img class="d-block w-100" style="max-width: 250px;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/menu/001.png">
                </div>
                <div class="col-6">
                    <h5 class="text-left text-white">RUJAK SOTO</h5>
                    <p class="text-left text-white" style="font-size: 12px;">
                        “Rujak dicampur dengan kuah soto
                        memakai daging sapi dan telur.
                        ( Makanan khas Banyuwangi )
                        Vegetables with rujak spices
                        poured with soto soup beef and egg.
                        ( Typical food of Banyuwangi )
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <h5 class="text-right text-white">PLECING AYAM KAMPUNG</h5>
                    <p class="text-right text-white" style="font-size: 12px;">
                        “Ayam Kampung yang ditaburi dengan
                        bumbu, rempah dan sambal ijo
                        ( Makanan khas Banyuwangi )
                        “Spicy chicken & rice with a side
                        dish of fresh vegetables & stir
                        ( Typical food of Banyuwangi )
                    </p>
                </div>
                <div class="col-6">
                    <img class="d-block w-100" style="max-width: 250px;" src="https://github.com/setyakomero/srengengewetan/blob/master/public/img/menu/002.png">
                </div>
            </div>
        </div>
    </div>

    <div class="overlay"></div>
    <!-- JQUERY -->
    <script type="text/javascript" src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- POPPER -->
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/popper.min.js"></script>

    <!-- BOOTSTRAP -->
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/bootstrap.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/bootstrap-select.min.js"></script>

    <!-- FONTAWESOME -->
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/solid.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/fontawesome.js"></script>

    <!-- DATATABLES -->
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/jszip.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/pdfmake.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/vfs_fonts.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/buttons.html5.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/buttons.print.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/buttons.colVis.min.js"></script>
    <script type="text/javascript"  src="https://github.com/setyakomero/srengengewetan/blob/master/public/js/fnPagingInfo.js"></script>
    <!-- <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>

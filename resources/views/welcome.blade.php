<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Halaman Utama E-KPU</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/swiper.css" rel="stylesheet">
    <link href="{{ asset('zinc') }}/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img') }}/favicon/laravel.ico">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html">Aplikasi E-KPU</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li> -->
                </ul>
                <!-- @if (Route::has('login'))
                @auth -->
                <!-- <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ url('/home') }}">Home</a>
                </span> -->
                <!-- @else -->
                <!-- <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('login') }}">Masuk Akun</a>
                </span> -->
                <!-- @if (Route::has('register'))
                <span class="nav-item">
                    <a class="btn-solid-sm" href="{{ route('register') }}">Daftar Akun</a>
                </span>
                @endif -->
                <!-- @endauth
                @endif -->
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7" style="background: #ff540012;border-radius: 30px;height: 400px;">
                    <div class="text-container">
                        <p class="p-large" style="text-align: center; margin-top: 15px;color: black; font-style: bold;">
                            <b> Pencarian Data Pemilih Kab/Kota Malang Jawa Timur</b>
                            </br>
                            <font style="font-size: 13px;">
                                Data sinkronasi dari sistem</font>
                        </p>
                        <!-- //form input nik  -->
                        <!-- //{% csrf_token %}  -->
                        <!-- //action="{{ url('/cari') }}"  -->
                        @csrf
                        <form id="form" method="POS" action="{{ url('/cari') }}">
                            <textarea name="nik" id="nik" style="height: 150px;width: 580px;   background: transparent;
                            border-radius: 5px;" cols="40" rows="2" placeholder="Masukan nomor Induk Kependudukan"></textarea>
                            <!-- //buton pencarian icon search  -->
                            @error('nik')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <button type="submit" style=" margin-top: 10px; background: #009fff;
                            border-radius: 5px; height: 40px; width: 580px; color: white; font-size: 15px;">
                                <i class="fas fa-search"></i> Cari Data Pemilih
                            </button>
                        </form>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('zinc') }}/images/header-illustration.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <!-- //script button cari  -->
    <!-- //script jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('#form').on('submit', function(e) {
        //         e.preventDefault();
        //         var nik = $('textarea').val();
        //         console.log(nik);
        //         $.ajax({
        //             type: "GET",
        //             url: "{{ url('/cari') }}",
        //             data: {
        //                 nik: nik
        //             },
        //             success: function(response) {
        //                 console.log(response);
        //                 if (response.status == 200) {
        //                     alert(response.message);
        //                 } else {
        //                     alert(response.message);
        //                 }
        //             }
        //         });
        //     });
        // });
    </script>



    <!-- Details 1 -->
    <div id="details" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="
                        https://williamsinstitute.law.ucla.edu/wp-content/uploads/WI-voting-2a_s.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2><span>Aplikasi E-KPU</span><br> </h2>
                        <p>
                            aplikasi web mempermudah anda menemukan daftar pemilih berdasarkan nomor induk kependudukan yang terimpan di dalam system,

                        </p>
                        <a href="{{ url('/') }}" class="btn-solid-reg">Cek Nik Sekarang</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->


    <!-- Details Modal -->
    <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="col-lg-8">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('zinc') }}/images/details-modal.jpg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-4">
                        <h3>Goals Setting</h3>
                        <hr>
                        <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit
                            semper magna ac tum nico vela spider</p>
                        <h4>User Feedback</h4>
                        <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus
                            posuere nisi. Vivamus feugiat</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-chevron-right"></i>
                                <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                            </li>
                        </ul>
                        <a id="modalCtaBtn" class="btn-solid-reg" href="#">Details</a>
                        <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of modal-content -->
        </div> <!-- end of modal-dialog -->
    </div> <!-- end of modal -->
    <!-- end of details modal -->


    <!-- end of projects -->

    <div class="mt-5 mb-5"></div>

    <!-- Footer -->
    <div class="footer bg-gray mt-5">
        <img class="decoration-city" src="{{ asset('zinc') }}/images/decoration-city.svg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray mt-5">
        <div class="container">
            <div class="row">
                <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Copyright © <a href="#">Eko Muchamad Haryono</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-3">
                    <p class="p-small statement">Distributed By: <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="{{ asset('zinc') }}/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="{{ asset('zinc') }}/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('zinc') }}/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('zinc') }}/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="{{ asset('zinc') }}/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="{{ asset('zinc') }}/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
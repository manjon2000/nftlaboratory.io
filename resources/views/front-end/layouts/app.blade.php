<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu colección NFT, aprende todo sobre el mundo NFT.</title>

    {{-- Icono --}}
        <link rel="icon" type="image/x-icon" href="{{ asset('images/NFT-LABORATORY.png') }}" >
    {{-- End icono --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=<?= time()?>">
    <!-- End Styles -->

    <!-- Script -->
    <script src="https://kit.fontawesome.com/aba09469eb.js" crossorigin="anonymous"></script>
    <!-- End Script -->
    @yield('swiper-head')
    @yield('style-custom')
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar-container">
        <!-- Navbar Mobile -->
        <div class="navbar-content_mobile">
            <div class="navbar-mobile_logo">
                <img src="{{ asset('images/NFT-LABORATORY.png') }}" width="75">
            </div>
            <div class="navbar-mobile_menu">
                <div class="navbar-mobile_close" id="close-menu">
                    <i class="fas fa-times"></i>
                </div>
                <ul class="list-menu_mobile">
                    <li class="image-item"><img src="{{ asset('images/NFT-LABORATORY.png') }}" width="100" alt=""></li>
                    <li class="link-items"><a href="{{ route('home') }}">Inicio</a></li>
                    <li class="link-items"><a href="{{ route('services') }}">Servicios</a></li>
                    <!-- <li class="link-items"><a href="">Blog</a></li> -->
                    <li class="link-items"><a href="{{ route('contact') }}">Contacto</a></li>
                    <ul class="list-menu_rrss">
                        <li class="rrss-items">
                            <a class="twitter" href="https://twitter.com/home">

                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="rrss-items">
                            <a target="_blank"class="instagram" href="https://www.instagram.com/nftlaboratory.io/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="rrss-items">
                            <a target="_blank" class="facebook"href="https://www.tiktok.com/@nftlaboratory.io">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li target="_blank" class="rrss-items">
                            <a target="_blank" class="facebook" href="https://www.facebook.com/NFTLaboratory.io">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="navbar-mobile_open-menu" id="open-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="navbar-content_desktop">
            <div class="links-items_desktop">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('services') }}">Servicios</a>
                <!-- <a href="#">Blog</a> -->
                <a href="{{ route('contact') }}">Contacto</a>
            </div>
            <div class="logo_desktop">
                <img src="{{ asset('images/NFT-LABORATORY.png') }}" width="75">
            </div>
            <div class="navbar-content-info_desktop">
                <div class="navbar-content_rrss_desktop">
                    <div class="rrss_item">
                        <a target="_blank" href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a target="_blank" href="https://www.instagram.com/nftlaboratory.io/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a target="_blank" href="https://www.tiktok.com/@nftlaboratory.io"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a href="https://www.facebook.com/NFTLaboratory.io"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                <div class="navbar-content-btn_contact">
                    <a href="{{ route('contact') }}">Contactanos</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    @yield('header')
    <!-- End Header -->

    <!-- Main Content -->
    <main role="main" class="main-container">
       @yield('main-content')
    </main>
    <!-- End Main Content -->

    <!-- Footer -->
    <footer class="footer-container">
        <section class="footer-content">
            <article class="footer-logo">
                <img src="{{ asset('images/NFT-LABORATORY.png') }}" width="75">
            </article>
            <article class="footer-politic">
                <div class="footer-politic-link">
                    <a href="{{ route('privacidad') }}">Política de Privacidad</a>
                </div>
                <div class="footer-copyright">
                    <p>Copyright © 2022. Todos los derechos reservados.</p>
                </div>
            </article>
            <article class="footer-rrss">
                <div class="footer-content-rrss">
                    <div class="rrss_item">
                        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a href="https://www.instagram.com/nftlaboratory.io/"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a href="https://www.tiktok.com/@nftlaboratory.io"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                    <div class="rrss_item">
                        <a href="https://www.facebook.com/NFTLaboratory.io"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </article>
        </section>
    </footer>
    <!-- End Footer -->


    <!-- Script end body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="{{ asset('js/app.js') }}?v=<?= time()?>"></script>
    @yield('swiper')
    <!-- End Script end body -->

</body>

</html>

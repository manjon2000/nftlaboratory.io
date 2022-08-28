@extends('front-end.layouts.app')

{{-- @section('style-custom')
    <style>
        .header-container
        {
            background-color: rgba(0, 0, 0, 0.651);
            background-image: url({{ asset('images/bg-header-1.webp') }});
            background-blend-mode: overlay;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endsection --}}

@section('swiper-head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js'></script>
@endsection

@section('header')
<header class="header-container">
    <section class="header-content">
        <article class="header-info">
            <div class="header_title">
                <h2>NFT LABORATORY</h2>
            </div>
            <div class="header_description">
                <p>
                    Somos una empresa especializada en el sector NFT, te ayudaremos a crear y lanzar tu propia
                    colección NFT, a sumergirte de forma segura y correcta en esta nueva tecnología y mucho más !

                </p>
            </div>
            <div class="header_button">
                <a href="./contacto.html">Contactanos</a>
            </div>
        </article>
        <article class="header-slider_service_3d">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="picture-icon">
                            <img src="{{ asset('images/servicios/Smart contract.png') }}" alt="">
                        </div>
                        <div class="title">
                            <h3>Smart Contract</h3>
                        </div>
                        <div class="desc">
                            <p>Desarrollamos, creamos y programamos tu smart contract adaptado a las utilidades
                                necesarias de tu proyecto.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="picture-icon">
                            <img src="{{ asset('images/servicios/Programacion Blockchain.png') }}" alt="">
                        </div>
                        <div class="title">
                            <h3>Programación blockchain</h3>
                        </div>
                        <div class="desc">
                            <p>Nuestro equipo de programación Blockchain programara en el nuevo lenguaje Solidity
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="picture-icon">
                            <img src="{{ asset('images/servicios/Arte NFT.png') }}" alt="">
                        </div>
                        <div class="title">
                            <h3>Diseño & Arte NFT</h3>
                        </div>
                        <div class="desc">
                            <p>Diseñaremos, dibujaremos y prepararemos todo el Arte de tu colección NFT, desde 2D a
                                3D creando verdaderas obras de arte</p>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination"></div>

            </div>
        </article>
    </section>
    <!-- <article class="clip-path_header"></article> -->
</header>
@endsection

@section('main-content')
    <section class="work-with-us load-hidden">
        <article class="work-with-us_content load-hidden">
            <div class="work-with-us_title load-hidden">
                <h3>Trabaja con Nosotros</h3>
            </div>
            <div class="work-with-us_description load-hidden">
                <p>
                    ¿Por qué deberías confiar en NFT laboratory? Pondremos a tu disposición un equipo de
                    profesionales expertos en el sector NFT que te ayudará y trabajará en tu proyecto aportando todo
                    nuestro conocimiento para realizar todas las acciones necesarias y convertir tu colección NFT en
                    una colección exitosa.
                    <br /><br />
                    Podemos ayudarte y guiarte en el sector NFT con los siguientes servicios
                </p>
            </div>
        </article>
        <article class="work-with-us-image load-hidden">
            <img src="{{ asset('images/home/27.png') }}" alt="">
        </article>
    </section>
    <section class="services-container">
        <article class="section-content">
            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Smart contract.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Smart Contract</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Desarrollamos, creamos y programamos tu smart contract adaptado a las utilidades necesarias
                        de tu proyecto.
                    </p>
                </div>
            </div>

            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Programacion Blockchain.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Programación blockchain</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Nuestro equipo de programación Blockchain programara en el nuevo lenguaje Solidity.
                    </p>
                </div>
            </div>

            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Comunidad.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Creación de comunidad</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Crearemos una comunidad sólida y leal para tu proyecto aplicando las debidas estrategias
                        para conseguir una comunidad sana y fructífera

                    </p>
                </div>
            </div>

            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Marketing.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Marketing sector Blockchain</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Planeamos y ejecutamos las estrategias de marketing especializadas en el sector blockchain
                        para el lanzamiento exitoso de tu proyecto
                    </p>
                </div>
            </div>


            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Lanzamiento.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Lanzamiento de colecciones NFT</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Desarrollaremos paso a paso el plan, timings, y proceso de todo el lanzamiento de tu
                        colección NFT
                    </p>
                </div>
            </div>

            <!-- Service items -->
            <div class="service-item load-hidden">
                <div class="service-image">
                    <img src="{{ asset('images/servicios/Creación.png') }}" alt="">
                </div>
                <div class="service-title">
                    <h3>Creación de colecciones NFT</h3>
                </div>
                <div class="service-desc">
                    <p>
                        Crearemos todas las piezas, accesorios, variantes, rarezas y todos los elementos
                        imprescindibles de tu colección NFT a medida de tu proyecto

                    </p>
                </div>
            </div>
        </article>
        <article class="btn-view-all-services">
            <div class="button-action load-hidden">
                <a href="./services.html">Ver todos los servicios </a>
            </div>
        </article>
    </section>
    <section class="contact-the-team">
        <article class="contact-the-team-content">
            <div class="contact-the-team-title load-hidden">
                <h2>Contacta ahora con el equipo de NFT laboratory y evaluaremos cómo podemos ayudarte</h2>
            </div>
            <div class="button-action-2 load-hidden">
                <a href="./contacto.html">Contactar</a>
            </div>
        </article>
        <article class="contact-the-team-image load-hidden">
            <img src="{{ asset('images/home/28.png') }}" alt="">
        </article>
    </section>
@endsection


@section('swiper')
<script defer>
    var swiper = new Swiper(".swiper-container", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: -30,
            depth: 100,
            modifier: 1,
            slideShadows: true
        },
        pagination: {
            el: ".swiper-pagination"
        }
    });
</script>
@endsection
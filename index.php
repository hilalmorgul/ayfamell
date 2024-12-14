<?php 
    include('header.php')
?>

        <section class="main-slider clearfix">
            <div
                class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'
            >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/backgrounds/slider3.webp);"></div>
        
                        <div class="main-slider__overly"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">
                                            Doğanın İçinde <br />
                                            AyFaMel
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/backgrounds/slider3.webp);"></div>
                       
                        <div class="main-slider__overly"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">
                                                Huzurun Adresi <br />
                                                AyFaMel
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-one">
            <div class="about-one__img-two">
            <img src="assets/images/resources/470.webp" alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/470.webp" alt="" />
                                </div>
                                <div class="about-one__shape-1 shape-mover">
                                    <img src="assets/images/shapes/about-one-shape-1.png" alt="" />
                                </div>
                                <div class="about-one__big-text">Ayfamel</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">AyFaMel</span>
                                <h2 class="section-title__title">Hakkımızda</h2>
                            </div>
                            <p class="about-one__text-1">Doğa ile iç içe huzurun adresi</p>
                            <p class="about-one__text-2">
                            AyFaMel olarak, doğanın içinde huzur ve konforu bir araya getiren eşsiz bir tatil deneyimi sunmayı hedefliyoruz. 6000 m² alan içerisinde, 400 m² ve 600 m² bahçelere sahip bir adet Luxury Delux model, yedi adet luxury bungalov ve bir adet villa ile misafirlerimize konforlu konaklama seçenekleri sunuyoruz.                            
                        </p>
        
                            <div class="about-one__btn-box">
                                <div class="about-one__shape-2 float-bob-x">
                                    <img src="assets/images/shapes/about-one-shape-2.png" alt="" />
                                </div>
                                <a href="hakkimizda.php" class="about-one__btn thm-btn">Daha Fazla</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="counter-one">
            <div class="counter-one__bg float-bob-x" style="background-image: url(assets/images/backgrounds/counter-one-bg-img-1.png);"></div>
            <div class="container">
                <div class="row">
                     <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.webp);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-world"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.html">Merkezi Konum</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.webp);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-home-automation"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.html">İnternet</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.webp);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-electric-appliance"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.html">Lüks & Konfor</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                        <div class="services-one__single">
                            <div class="services-one__single-inner">
                                <div class="services-one__single-bg"
                                    style="background-image: url(assets/images/backgrounds/services-one-single-bg.webp);">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-swimming-pool"></span>
                                </div>
                                <h3 class="services-one__title"><a href="services.html">Yüzme Havuzu</a></h3>
                                <p class="services-one__text">There are many new ways of text.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="why-choose-one">
            <div class="why-choose-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/services.webp);"></div>
            <div class="why-choose-one__shape-2 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                <img src="assets/images/shapes/services-one-shape-1.png" alt="" style="opacity:0.4"/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-one__left">
                            <div class="why-choose-one__inner">
                                <div class="why-choose-one__video-link">
                                    <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                        <div class="why-choose-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                    <div class="why-choose-one__shape-1 float-bob-x">
                                        <img src="assets/images/shapes/why-choose-one-shape-1.png" alt="" />
                                    </div>
                                </div>
                                <h3 class="why-choose-one__title">
                                  Tanıtım Videomuzu <br >İzlediniz mi?
                                </h3>
                            </div>
                        </div>
                    </div>
             
                </div>
            </div>
        </section>

        <section class="apartment-one">
            <div class="apartment-one__bg" style="background-image: url(assets/images/backgrounds/apartment-one-bg.webp);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">AyFaMel</span>
                    <h2 class="section-title__title">Konseptlerimiz</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="apartment-one__single">
                            <div class="apartment-one__img-box">
                                <div class="apartment-one__img">
                                    <img src="assets/images/resources/1.webp" alt="" />
                                </div>
                                <div class="apartment-one__content">
                                    <div class="apartment-one__title-box">
                                        <h3 class="apartment-one__title">
                                            <a href="konsept.php">
                                                Studio <br />
                                                apartment
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="apartment-one__arrow">
                                        <a href="konsept.php"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                                <div class="apartment-one__btn-box">
                                    <a href="konsept.php" class="thm-btn apartment-one__btn">120 m2</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="apartment-one__single">
                            <div class="apartment-one__img-box">
                                <div class="apartment-one__img">
                                    <img src="assets/images/resources/2.webp" alt="" />
                                </div>
                                <div class="apartment-one__content">
                                    <div class="apartment-one__title-box">
                                        <h3 class="apartment-one__title">
                                            <a href="konsept.php">
                                                Luxury <br />
                                                apartment
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="apartment-one__arrow">
                                        <a href="konsept.php"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                                <div class="apartment-one__btn-box">
                                    <a href="konsept.php" class="thm-btn apartment-one__btn">120 m2</a>
                                </div>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="apartment-one__single">
                            <div class="apartment-one__img-box">
                                <div class="apartment-one__img">
                                    <img src="assets/images/resources/3.webp" alt="" />
                                </div>
                                <div class="apartment-one__content">
                                    <div class="apartment-one__title-box">
                                        <h3 class="apartment-one__title">
                                            <a href="konsept.php">
                                                Deluxe <br />
                                                apartment
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="apartment-one__arrow">
                                        <a href="konsept.php"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                                <div class="apartment-one__btn-box">
                                    <a href="konsept.php" class="thm-btn apartment-one__btn">120 m2</a>
                                </div>
                            </div>
                        </div>
                    </div>
         
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="apartment-one__single">
                            <div class="apartment-one__img-box">
                                <div class="apartment-one__img">
                                    <img src="assets/images/resources/4.webp" alt="" />
                                </div>
                                <div class="apartment-one__content">
                                    <div class="apartment-one__title-box">
                                        <h3 class="apartment-one__title">
                                            <a href="konsept.php">
                                                one room <br />
                                                apartment
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="apartment-one__arrow">
                                        <a href="konsept.php"><span class="icon-right-arrow"></span></a>
                                    </div>
                                </div>
                                <div class="apartment-one__btn-box">
                                    <a href="konsept.php" class="thm-btn apartment-one__btn">120 m2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-three">
            <div class="container">
                <div class="gallery-three__title">
                    <h3>Galeri</h3>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-1.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
     
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-2.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-3.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-4.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
           
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-5.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="gallery-three__single">
                            <div class="gallery-three__img">
                                <img src="assets/images/resources/gallery-3-6.jpg" alt="">
                                <div class="gallery-three__img-icon">
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php 
    include('footer.php')
?>
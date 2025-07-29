 @extends('layouts.app')
 <!-- ==============================
Hero Area
============================== -->
@section('content')
    <div class="th-hero-wrapper hero-5 overlay-5" id="hero" data-bg-src="assets/img/bg/hero_bg_5_1.jpg">
        <div class="swiper th-slider hero-slider-5" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style5 hero-style1 z-index-2">
                                <span class="sub-title style1 text-white" data-ani="slideinleft" data-ani-delay="0.2s">Fortify, Protect, Empower</span>
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.5s">
                                    Elevate your cybersecurity posture at Indepth  <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">
                                        <span> Solution</span> <span class="title-line d-none d-md-block">
                                            <svg width="388" height="92" viewBox="0 0 388 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="line-1" d="M26.1083 16.1786C67.9411 7.45203 126.997 2 192.5 2C259.892 2 320.457 7.77109 362.461 16.9403C374.082 19.4769 382.69 29.0865 384.844 40.9343C387.658 56.4147 378.729 71.4569 363.618 74.8053C321.574 84.1218 260.515 90 192.5 90C126.136 90 66.3907 84.4036 24.4701 75.4762C8.0022 71.9691 -1.1998 55.0857 3.19829 38.5437C6.18283 27.3183 14.8629 18.5244 26.1083 16.1786Z" stroke="#4d0aa4" stroke-width="4" />
                                            </svg>
                                        </span>
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">
                                    InDepth Solutions: Fortifying your digital fortress with comprehensive Data Protection, cutting-edge IT Services, and empowering knowledge through specialized Training. </p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="contact" class="th-btn style2 th-icon th-radius">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="th-hero-image">
                            <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src=" {{ ('assets/img/hero/hero_5_1_1.jpg') }}" alt="">
                            </div>
                            <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                                <img src="{{ asset('assets/img/hero/hero_5_2_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="hero-5-shape-box">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src="{{ asset('assets/img/shape/hero-5-shape-1.png') }}" alt="">
                            </div>
                            <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.9s">
                                <img src="{{ asset('assets/img/shape/hero-5-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style5 hero-style1 z-index-2">
                                <span class="sub-title style1 text-white" data-ani="slideinleft" data-ani-delay="0.2s">Defend, Detect, Protect</span>
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.5s">
                                    Ensure the Security of your <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">
                                        <span> connection</span> <span class="title-line d-none d-md-block">
                                            <svg width="388" height="92" viewBox="0 0 388 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="line-1" d="M26.1083 16.1786C67.9411 7.45203 126.997 2 192.5 2C259.892 2 320.457 7.77109 362.461 16.9403C374.082 19.4769 382.69 29.0865 384.844 40.9343C387.658 56.4147 378.729 71.4569 363.618 74.8053C321.574 84.1218 260.515 90 192.5 90C126.136 90 66.3907 84.4036 24.4701 75.4762C8.0022 71.9691 -1.1998 55.0857 3.19829 38.5437C6.18283 27.3183 14.8629 18.5244 26.1083 16.1786Z" stroke="#4d0aa4" stroke-width="4" />
                                            </svg>
                                        </span>
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">
                                    Cybersecurity refers to the practice of protecting systems, networks, and data from cyber threats, unauthorized access. </p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="contact" class="th-btn style2 th-icon th-radius">Discover More <i class="fa-light fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="th-hero-image">
                            <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src="{{ asset('assets/img/hero/hero_5_1_1.jpg') }}" alt="">
                            </div>
                            <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                                <img src="{{ asset('assets/img/hero/hero_5_2_1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="hero-5-shape-box">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src="{{ asset('assets/img/shape/hero-5-shape-1.png') }}" alt="">
                            </div>
                            <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.9s">
                                <img src="{{ asset('assets/img/shape/hero-5-shape-2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style5 hero-style1 z-index-2">
                                <span class="sub-title style1 text-white" data-ani="slideinleft" data-ani-delay="0.2s">Defend, Detect, Protect</span>
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.5s">
                                    Ensure the Security of your <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">
                                        <span> connection</span> <span class="title-line d-none d-md-block">
                                            <svg width="388" height="92" viewBox="0 0 388 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path class="line-1" d="M26.1083 16.1786C67.9411 7.45203 126.997 2 192.5 2C259.892 2 320.457 7.77109 362.461 16.9403C374.082 19.4769 382.69 29.0865 384.844 40.9343C387.658 56.4147 378.729 71.4569 363.618 74.8053C321.574 84.1218 260.515 90 192.5 90C126.136 90 66.3907 84.4036 24.4701 75.4762C8.0022 71.9691 -1.1998 55.0857 3.19829 38.5437C6.18283 27.3183 14.8629 18.5244 26.1083 16.1786Z" stroke="#4d0aa4" stroke-width="4" />
                                            </svg>
                                        </span>
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.7s">
                                    Cybersecurity refers to the practice of protecting systems, networks, and data from cyber threats, unauthorized access. </p>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.9s">
                                    <a href="contact" class="th-btn style2 th-icon th-radius">Discover More <i class="fa-light fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="th-hero-image">
                            <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src=" assets/img/hero/hero_5_1_1.jpg" alt="">
                            </div>
                            <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                                <img src=" assets/img/hero/hero_5_2_1.jpg" alt="">
                            </div>
                        </div>
                        <div class="hero-5-shape-box">
                            <div class="hero-shape-1" data-ani="slideinleft" data-ani-delay="0.8s">
                                <img src="assets/img/shape/hero-5-shape-1.png" alt="">
                            </div>
                            <div class="hero-shape-2" data-ani="slideinleft" data-ani-delay="0.9s">
                                <img src="assets/img/shape/hero-5-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div>

        </div>
    </div>
    <!--======== / Hero Section ========--><!--==============================
feature Area  
==============================-->
    <div class="featured-area " id="feature-area">
        <div class="container">
            <div class="featured-wrapp-3">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6 col-xl-4">
                        <div class="feature-item d-sm-flex align-content-center text-center text-sm-start wow fadeInUp">
                            <div class="feature-item_icon">
                                <img src="{{ asset('assets/img/icon/fea-3-1.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title text-anime-style-2">Block to all Hackers</h3>
                                <p class="feature-item_text text-anime-style-3">Cybersecurity refers to the practice of
                                    protecting computer systems,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="feature-item d-sm-flex align-content-center text-center text-sm-start wow fadeInDown">
                            <div class="feature-item_icon">
                                <img src="{{ asset('assets/img/icon/fea-3-2.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Stop account takeovers</h3>
                                <p class="feature-item_text">This adds an extra layer of security by users
                                    to provide a second form of verification</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="feature-item d-sm-flex align-content-center text-center text-sm-start wow fadeInUp">
                            <div class="feature-item_icon">
                                <img src="{{ asset('assets/img/icon/fea-3-3.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Privet internet connection</h3>
                                <p class="feature-item_text">It seems like you're referring to a private
                                    internet connection. If you mean ensuring</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--==============================
Servce Area  
==============================-->
    <section class="service-area overflow-hidden space-bottom" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="title-area service-title-box mb-50 text-center">
                        <span class="sub-title text-anime-style-2">Our Services</span>
                        <h2 class="sec-title  text-anime-style-3">What we can offer your business.</h2>
                    </div>
                </div>
            </div>
            <div class="service-wrapper">
                <div class="slider-area slider-drag-wrap">
                    <div class="swiper th-slider has-shadow" id="serviceSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="service-details">
                                            <img src="{{ asset('assets/img/service/service_img_5_1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Data Protection</a>
                                        </h3>
                                        <p class="service-box_text">We employ a multifaceted and comprehensive approach to 
                                            ensure the confidentiality, integrity, and availability of your sensitive information.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">IT Services</a>
                                        </h3>
                                        <p class="service-box_text">Our comprehensive IT Services encompass a spectrum of offerings, 
                                            ranging from system integration to network management.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_3.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">IT Audit</a>
                                        </h3>
                                        <p class="service-box_text">Our expert auditors meticulously review your infrastructure, policies, 
                                            and processes to identify vulnerabilities and potential areas of improvement.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Penetration Testing</a>
                                        </h3>
                                        <p class="service-box_text">Our skilled ethical hackers conduct controlled 
                                            and targeted attempts to exploit vulnerabilities in your systems, networks, or applications.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Vulnerability Management</a>
                                        </h3>
                                        <p class="service-box_text">Our systematic process involves continuous scanning, prioritization, 
                                            and patching of vulnerabilities.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Data Protection</a>
                                        </h3>
                                        <p class="service-box_text">Assessing current IT infrastructure and aligning it with business goals. Developing a roadmap.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_3.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Impact Assessment</a>
                                        </h3>
                                        <p class="service-box_text">This includes analyzing the impact on operations, reputation, and financial stability.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="">
                                            <img src="{{ asset('assets/img/service/service_img_5_4.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="">Specialized Training</a>
                                        </h3>
                                        <p class="service-box_text">Our training covers a range of topics, including threat awareness, 
                                            secure coding practices, and incident response.</p>
                                        <a class="th-btn style4" href="">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img src="assets/img/service/service_img_5_1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="service-details.html">Server Security</a>
                                        </h3>
                                        <p class="service-box_text">Assessing current IT infrastructure and aligning it with business goals. Developing a roadmap.</p>
                                        <a class="th-btn style4" href="service-details.html">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="service-box service-style-1">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img src="assets/img/service/service_img_5_2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="service-content sv-content6">
                                        <h3 class="box-title">
                                            <a href="service-details.html">Network Security</a>
                                        </h3>
                                        <p class="service-box_text">Assessing current IT infrastructure and aligning it with business goals. Developing a roadmap.</p>
                                        <a class="th-btn style4" href="service-details.html">
                                            Read More <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->

                            <div class="slider-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--==============================
Category Area  
==============================-->
    <!-- <section class="choose-area5 space space-extra">
        <div class="container container-choose">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-8 col-lg-7 col-md-9">
                    <div class="title-area text-center">
                        <span class="sub-title text-anime-style-2">Why Choose to Us</span>
                        <h2 class="sec-title text-anime-style-3">Shielding Businesses from Cyber Risks, 24/7.</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow chooseSlider" id="chooseSlider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"},"1600":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_1.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Your Files are Protected</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_2.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Secure Payments</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_3.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">SIEM Threat Detection</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_4.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Identifying Threats</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_5.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Free Delivery Services</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_1.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Your Files are Protected</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_2.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Secure Payments</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_3.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">SIEM Threat Detection</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_4.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Identifying Threats</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="choose-card style5 text-center">
                                <div class="box-img global-img mb-30">
                                    <img src="assets/img/choose/choose_2_5.jpg" alt="Image">
                                </div>
                                <h3 class="box-title"><a href="service-details.html">Free Delivery Services</a></h3>
                                <p class="sec-text">Technology continues to evolve, the future of cybersecurity will likely be shaped by emerging trends such.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--==============================
About Area  
==============================-->
    <div class="bg-smoke position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4 ab5-imgbox space-bottom text-end">
                        <div class="img1 reveal">
                            <img src="{{ asset('assets/img/normal/about_4_1.jpg') }}" alt="About">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('assets/img/normal/about_4_2.jpg') }}" alt="About">
                            <a href="https://www.youtube.com/watch?v=pQpFebyALV0" class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ab5-wrapp mt-40">
                        <div class="title-area">
                            <span class="sub-title style1 text-anime-style-2">About Us</span>
                            <h2 class="sec-title text-anime-style-2">Our company is here to help you.</h2>
                            <p class="sec-text mb-30 wow fadeInUp" data-wow-delay=".2s">Welcome to InDepth Solutions, where technology meets
                                 trust. As a premier tech-oriented company, we specialize in comprehensive data protection and related services.
                                  With a commitment to excellence, we bring a wealth of experience in 
                                IT Audit, penetration testing, and cutting-edge solutions that fortify your digital landscape.</p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item ab5-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="about-item_img"><img src="{{ asset('assets/img/icon/shield.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">High Quality Service</h5>
                                    <p class="about-item_text">Our Expertise includes IT Audit, penetration testing, and cutting-edge 
                                        digital solutions designed to secure and strengthen your digital infrastructure.</p>
                                </div>
                            </div>
                            <div class="about-item ab5-item wow fadeInUp" data-wow-delay=".4s">
                                <div class="about-item_img"><img src="{{ asset('assets/img/icon/shield.svg') }}" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Database Security</h5>
                                    <p class="about-item_text">Welcome to InDepth Solutions where technology meets trust. We are a premier 
                                        tech-oriented company specializing in comprehensive data protection and related services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35 wow fadeInUp" data-wow-delay=".5s"><a href="about" class="th-btn th-radius th-icon">Learn More <i class="fa-light fa-arrow-right-long"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%">
            <img src="{{ asset('assets/img/shape/about-5-shape.png') }}" alt="">
        </div>
    </div>

    <!--==============================
Brand Area  
==============================-->
    <div class="brand-area overflow-hidden space">
        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/1.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/1.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/2.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/2.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/3.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/3.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/4.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/4.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/5.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/5.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/6.png" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/6.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area5 bg-smoke overflow-hidden space" id="testi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="testi-image-wrapp">
                        <div class="testi-img">
                            <img src="{{ asset('assets/img/testimonial/testi-img-1.jpg') }}" alt="">
                        </div>
                        <div class="testi-img style2">
                            <img src="{{ asset('assets/img/testimonial/testi-img-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area testi5-titlebox mb-40 mt-40">
                        <span class="sub-title text-anime-style-2">Testimonial</span>
                        <h2 class="sec-title text-anime-style-3">What Client Say About us</h2>
                    </div>
                    <div class="swiper th-slider testiSlide5" id="testiSlide5" data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid2-thumb"}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“InDepth Solutions has been an invaluable resource for our organization's cybersecurity needs.”</p>
                                        <h6 class="box-title">Extreme Nigeria</h6>
                                        <span class="box-desig"></span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“We highly recommend Indepth Solutions to any organization seeking reliable IT services and innovative solutions.”</p>
                                        <h6 class="box-title">Sandra Olagoke</h6>
                                        <span class="box-desig"></span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“Indepth Solutions team's technical expertise and responsive support have been instrumental in driving our digital transformation.”</p>
                                        <h6 class="box-title">Joshua Nwafor</h6>
                                        <span class="box-desig"></span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“Cybersecurity is more critical than ever in a world increasingly reliant on digital technologies. By investing in robust cybersecurity measures, individuals and organizations can protect themselves from threats and secure their digital assets for the future.”</p>
                                        <h6 class="box-title">Jesmen</h6>
                                        <span class="box-desig">Graphics Designer</span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <!-- <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“Cybersecurity is more critical than ever in a world increasingly reliant on digital technologies. By investing in robust cybersecurity measures, individuals and organizations can protect themselves from threats and secure their digital assets for the future.”</p>
                                        <h6 class="box-title">Sarah Rahman</h6>
                                        <span class="box-desig">It Officer</span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <!-- <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“Cybersecurity is more critical than ever in a world increasingly reliant on digital technologies. By investing in robust cybersecurity measures, individuals and organizations can protect themselves from threats and secure their digital assets for the future.”</p>
                                        <h6 class="box-title">Angelina Rose</h6>
                                        <span class="box-desig">Back-End Developer</span>
                                        <div class="box-review">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="swiper th-slider testi-grid2-thumb" id="testiSlide6" data-slider-options='{"effect":"slide","slidesPerView":"6","spaceBetween":2,"loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-img">
                                    <img src="{{ asset('assets/img/testimonial/testi_4_1.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img">
                                    <img src="{{ asset('assets/img/testimonial/testi_4_2.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img">
                                    <img src="{{ asset('assets/img/testimonial/testi_4_3.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img">
                                    <img src="{{ asset('assets/img/testimonial/testi_4_4.png') }}" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide5, #testiSlide6" class="slider-arrow default"><img src="assets/img/icon/right-arrow2.svg" alt=""></button>
                            <button data-slider-next="#testiSlide5, #testiSlide6" class="slider-arrow default"><img src="assets/img/icon/left-arrow2.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Team Area  
==============================-->
    <section class="team-area space bg-smoke" data-bg-src="assets/img/bg/team_bg_1.png">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title text-anime-style-2">Our Team Members</span>
                <h2 class="sec-title text-anime-style-3">Meet Our Expert Members</h2>
            </div>
            <div class="slider-area team-slider-1">
                <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Mr. Abiodun Adedeji (FCA)</a></h3>
                                        <span class="team-desig"></span>
                                        <!-- <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">BANKOLE, Adewale Victor (BSc)</a></h3>
                                        <span class="team-desig"></span>
                                        <!-- <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">Backend Engineer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">Python Developer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_1.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Jacob Jones</a></h3>
                                        <span class="team-desig">PHP Developer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_2.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Jane Cooper</a></h3>
                                        <span class="team-desig">Django Developer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_3.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Guy Hawkins</a></h3>
                                        <span class="team-desig">JavaScrip Developer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Item -->
                        <!-- <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img">
                                    <img src="assets/img/team/team_1_4.jpg" alt="Team">
                                </div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="team-guider-details.html">Jenny Wilson</a></h3>
                                        <span class="team-desig">App Developer</span>
                                        <div class="th-social">
                                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                            <a target="_blank" href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section> 
    
    <!--==============================
Cta Area  
==============================-->
    <!-- <div class="cta-4 position-relative overflow-hidden">
        <div class="cta-sec5 bg-title" data-bg-src="assets/img/bg/cta_bg_3.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="space">
                            <div class="title-area cta-4_title-box mb-40">
                                <span class="sub-title style1 text-white mb-10 text-anime-style-2">You Are Work With Us</span>
                                <h2 class="sec-title text-white text-anime-style-3">Still Confused About Our Features?</h2>
                                <h2 class="duration-title text-white text-anime-style-3">Get a Free Trial 7 Days</h2>
                                <p class="text-white wow fadeInUp" data-wow-delay=".3s">Automating threat detection and response to keep pace with evolving threats.</p>
                            </div>
                            <div class="btn-group cta-4-action wow fadeInUp" data-wow-delay=".4s">
                                <a href="contact.html" class="th-btn th-icon">Contact With Us <i class="fa-light fa-arrow-right-long"></i></a>
                                <a href="contact.html" class="th-btn style6 th-icon">Download App <i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="app-mockup movingX">
                            <img src="assets/img/normal/app_mockup.png" alt="app mockup">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%"><img src="assets/img/normal/cta-left-img.png" alt="">
            </div>
        </div>
    </div> -->
    
    <!--==============================
Counter Area  
==============================-->
    <!-- <div class="counter-sec2 space overflow-hidden">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">12</span></h3>
                            <h6 class="counter-title">Years Experience</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">97</span>%</h3>
                            <h6 class="counter-title">Retention Rate</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                            <h6 class="counter-title">Project Completed</h6>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">19</span>k</h3>
                            <h6 class="counter-title">Happy Clients</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup jump d-none d-xl-block" data-bottom="5%" data-left="-10%">
                <img src="assets/img/shape/shape_5.png" alt="shape">
            </div>
        </div>

    </div> -->
    
    
    
    <!--==============================
Contact Area  
==============================-->
    <div class="bg-top-center space-top overflow-hidden" data-bg-src="assets/img/bg/contact_bg_3.jpg">
        <div class="container">
            <div class="row gy-4 justify-content-between flex-row-reverse">
                <div class="col-lg-6">
                    <div class="pt-25 ps-xl-5 ms-xl-4">
                        <div class="title-area contact-4-titlebox mb-10">
                            <span class="sub-title text-white text-anime-style-2">Get in touch</span>
                            <h2 class="sec-title text-white text-anime-style-3">We Are Offering 14 <br> Days Free Trial</h2>
                            <p class="text-white mb-0 wow fadeInUp" data-wow-delay=".3s">We’love to hear from you. Our friendly team <br>is always here to chat </p>
                            <a href="#" class="th-btn style7 th-icon">Try 14 Days Free Trial <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-area2 pe-xl-5">
                        <form action="mail.php" method="POST" class="contact-form2 ajax-contact">
                            <div class="row">
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" name="name" id="name3" placeholder="First Name">
                                    <img src="{{ asset('assets/img/icon/user.svg') }}" alt="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="email" class="form-control" name="email3" id="email3" placeholder="Your Mail">
                                    <img src="{ asset('assets/img/icon/mail.svg') }}" alt="">
                                </div>
                                <div class="form-group col-12">
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Select Tour Type" selected disabled>Select subject</option>
                                        <option value="Python Development">Python Development</option>
                                        <option value="UiXi Desing">UiXi Desing</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="WordPress Development">WordPress Development</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                    <img src="{{ asset('assets/img/icon/chat.svg') }}" alt="">
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                        <div class="form-btn-wrapp form4-btn-wrapp">
                            <div class="form-btn">
                                <button class="th-btn white-btn th-radius">Send Message <img src="assets/img/icon/plane3.svg" alt=""></button>
                            </div>
                            <div class="contact-info">
                                <p class="contact-info_link"><a href="tel:+0123456789">+012 345 6789</a></p>
                                <div class="contact-info_icon">
                                    <a href="tel:+0123456789"><img src="assets/img/icon/call.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Blog Area  
==============================-->
    <!-- <section class="overflow-hidden space">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anime-style-2">News & Blog</span>
                        <h2 class="sec-title text-anime-style-3">Cyber News and Insights</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn wow fadeInUp" data-wow-delay=".4s">
                        <a href="blog.html" class="th-btn style4 th-radius th-icon">See More Articles <i class="fa-light fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gx-24 gy-30">
                <div class="col-xl-8">
                    <div class="blog-grid2 style2 th-ani">
                        <div class="blog-img global-img">
                            <img src="assets/img/blog/blog_5_1.jpg" alt="blog image">
                        </div>
                        <div class="blog-grid2_content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html">Sep 09, 2025</a>
                                <a href="blog.html">6 min read</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">The Security Risks of
                                    Changing Package Owners</a></h3>
                            <a href="blog-details.html" class="th-btn style4 th-radius th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                    <div class="blog-grid2 th-ani style2 mt-24">
                        <div class="blog-img global-img">
                            <img src="assets/img/blog/blog_5_2.jpg" alt="blog image">
                        </div>
                        <div class="blog-grid2_content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html">Sep 10, 2025</a>
                                <a href="blog.html">8 min read</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">The Security Risks of
                                    Changing Package Owners</a></h3>
                            <a href="blog-details.html" class="th-btn style4 th-radius th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="blog-grid2 th-ani">
                        <div class="blog-img global-img">
                            <img src="assets/img/blog/blog_5_3.jpg" alt="blog image">
                        </div>
                        <div class="blog-grid2_content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html">Sep 05, 2025</a>
                                <a href="blog.html">6 min read</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">The Security Risks of Changing
                                    Package Owners</a></h3>
                            <a href="blog-details.html" class="th-btn style4 th-radius th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <!--==============================
gallery-thumb Area  
==============================-->

    <!-- <div class="sidebar-gallery-area space-bottom">
        <div class="container-fluid">
            <div class="title-area text-center">
                <span class="sub-title text-anime-style-2">We Are On Instagram</span>
                <h2 class="sec-title text-anime-style-3">Follow With Us</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_1.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_3.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_4.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_5.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_6.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_3.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_4.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_5.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="gallery-thumb2">
                                <img src="assets/img/gallery/gallery_9_2.jpg" alt="Gallery Image">
                                <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    @endsection
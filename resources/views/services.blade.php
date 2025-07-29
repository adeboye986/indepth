@extends('layouts.pages')

@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Our Services</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
Servce Area  
==============================-->
    <section class="position-relative bg-top-center overflow-hidden space-top" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area service-title-box text-center">
                        <span class="sub-title mb-15  text-anime-style-2">What We’re Offering</span>
                        <h2 class="sec-title  text-anime-style-3">Comprehensive cybersecurity solutions tailored to your unique business needs.</h2>
                        <p class="sec-text mb-50 wow fadeInUp" data-wow-delay=".3s"></p>
                    </div>
                </div>
            </div>
            <div class="service-area">
                <div class="row gy-30 justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="assets/img/service/sv-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="service-details.html">Data Protection</a>
                                </h3>
                                <p class="service-box_text">We employ a multifaceted and comprehensive approach to ensure the 
                                    confidentiality, integrity, and availability of your sensitive information.</p>
                                <!-- <a class="th-btn style4" href="">
                                    <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="assets/img/service/sv-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="service-details.html">IT Services</a>
                                </h3>
                                <p class="service-box_text">Our comprehensive IT Services encompass a spectrum of offerings, 
                                    ranging from system integration to network management.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="assets/img/service/sv-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="service-details.html">IT Audit</a>
                                </h3>
                                <p class="service-box_text">Our expert auditors meticulously review your infrastructure, 
                                    policies, and processes to identify vulnerabilities and potential areas of improvement.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-4.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Penetration Testing</a>
                                </h3>
                                <p class="service-box_text">Our skilled ethical hackers conduct controlled and targeted 
                                    attempts to exploit vulnerabilities in your systems, networks, or applications.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-5.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Vulnerability Management</a>
                                </h3>
                                <p class="service-box_text">Our systematic process involves continuous scanning, prioritization, 
                                    and patching of vulnerabilities.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-6.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Impact Assessment</a>
                                </h3>
                                <p class="service-box_text">This includes analyzing the impact on operations, 
                                    reputation, and financial stability.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img src="assets/img/service/sv-7.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="service-details.html">Specialized Training</a>
                                </h3>
                                <p class="service-box_text">Our training covers a range of topics, including threat awareness, 
                                    secure coding practices, and incident response.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Web Design</a>
                                </h3>
                                <p class="service-box_text">Secure, responsive, and user-friendly websites that 
                                    elevate your brand and protect your digital presence.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Speed Optimised</a>
                                </h3>
                                <p class="service-box_text">We fine-tune every element for optimal performance 
                                    without compromising security.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Cloud Service</a>
                                </h3>
                                <p class="service-box_text">We ensure seamless migration, robust protection, 
                                    and continuous optimization of your cloud infrastructure.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Development</a>
                                </h3>
                                <p class="service-box_text">We create robust, scalable applications that drive your 
                                    business forward while safeguarding your digital assets.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Online Marketing</a>
                                </h3>
                                <p class="service-box_text">Our team of experts combine cutting-edge marketing techniques with robust 
                                    privacy protection to maximize your ROI while safeguarding your brand.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Digital Branding</a>
                                </h3>
                                <p class="service-box_text">Craft a powerful, secure online identity that resonates with your audience. 
                                    We build and protect your digital brand, ensuring consistency and trust across all platforms.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Mobile App</a>
                                </h3>
                                <p class="service-box_text">Secure, intuitive mobile applications that engage users and protect data. 
                                    We develop custom apps with robust security features, ensuring seamless performance across devices.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="service-box service-style-1">
                            <div class="service-img">
                                <a href="">
                                    <img src="assets/img/service/sv-8.jpg" alt="">
                                </a>
                            </div>
                            <div class="service-content">
                                <h3 class="box-title">
                                    <a href="">Strategic IT Planning</a>
                                </h3>
                                <p class="service-box_text">We will work closely with you to understand your business goals and objectives, and then 
                                    develop a comprehensive IT strategy that aligns with your long-term growth plans.</p>
                                <!-- <a class="th-btn style4" href="service-details.html">
                                    Read More <i class="fa-light fa-arrow-right-long"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section><!--==============================
Cta Area  
==============================-->
    <div class="position-relative overflow-hidden space">
        <div class="cta-sec6 theme-bg position-relative overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="cta-area6 text-center text-md-start space position-relative">
                            <div class="title-area mb-40">
                                <h2 class="sec-title text-white pe-xl-5 me-xl-4 mt-n3 text-anime-style-2">
                                    <span class="discount-text">OUR APPROACH</span>Helping You Succeed
                                </h2>
                                <p class="text-white wow fadeInUp" data-wow-delay=".3s">At Indepth Solutions Consulting Ltd, we're dedicated to your success. We take a personalized, collaborative approach, working closely with you to understand your unique needs and deliver tailored solutions. 
                                    Our mission is to be your trusted partner, committed to driving your business forward.</p>
                            </div>
                            <div class="btn-group wow fadeInUp" data-wow-delay=".4s">
                                <a href="contact.html" class="th-btn style5 th-radius th-icon">Contact With Us <i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                            <div class="cta6-shape">
                                <img src="assets/img/shape/cta6-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup" data-bottom="0%" data-right="0">
                <img src="assets/img/normal/cta-img-6.jpg" alt="">
            </div>
        </div>
    </div><!--==============================
Brand Area  
==============================-->
    <div class="brand-sec space-bottom">
        <div class="container th-container4">
            <p class="sec-note text-center mb-60">Meet our partners</p>
            <div class="swiper th-slider brandSlider1" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1300":{"slidesPerView":"6"},"1400":{"slidesPerView":"7"}}}'>
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
                    <!-- <div class="swiper-slide">
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
    
    @endsection
@extends('layouts.pages') 
@section('title', 'Contact Us')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="contact-area space space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="contact-wrapp2 mb-60 smoke-bg">
                <div class="contact-infobox-top">
                    <div class="row align-items-center justify-content-between text-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="contact-shape-left text-sm-start">
                                <img src="assets/img/shape/contact-shape_2_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="title-area contact-titlebox2 text-center">
                                <span class="sub-title">Work With Us</span>
                                <h3 class="sec-title">Contact Us</h3>
                                <p class="sec-text">if you are interested in talking to us about a project, 
                                    please send us a message.</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="contact-shape-right text-sm-end">
                                <img src="assets/img/shape/contact-shape_2_2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-infobox-bottom d-xl-flex align-items-center justify-content-between">
                    <div class="about-contact-grid inner-style">
                        <span class="about-contact-icon">
                            <i class="fa-solid fa-headphones-simple"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text">Call Us For Query</span>
                            <p class="about-contact-details-text">
                                <a href="tel:+256698253158">(+234) 8159740933</a>
                            </p>
                        </div>
                    </div>
                    <div class="about-contact-grid inner-style">
                        <span class="about-contact-icon">
                            <i class="fa-light fa-envelope-open-text"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text">Email Us Anytime</span>
                            <p class="about-contact-details-text">
                                <a href="mailto:info@atek.com">hello@indepthsolution.ng</a>
                            </p>
                        </div>
                    </div>
                    <div class="about-contact-grid inner-style">
                        <span class="about-contact-icon">
                            <i class="fa-thin fa-map-location-dot"></i>
                        </span>
                        <div class="about-contact-details">
                            <span class="sec-text">Visit Our Office</span>
                            <p class="about-contact-details-text">
                                <a href="#">SW9/780A PDOA House, Baale Street, Elewura, Challenge, Ibadan, Oyo state, Nigeria</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapp2">
                <div class="row">
                    <div class="col-xl-7 order-1 order-xl-0">
                        <div class="contact-formbox">
                            <form action="mail.php" method="POST" class="contact-form ajax-contact">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" class="form-control" name="name" id="name3" placeholder="Your Name">
                                        <img src="assets/img/icon/user.svg" alt="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                        <img src="assets/img/icon/mail.svg" alt="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input type="text" class="form-control" name="number" id="number" placeholder="Phone Number">
                                        <img src="assets/img/icon/call.svg" alt="">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject">
                                            
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                        <img src="assets/img/icon/chat.svg" alt="">
                                    </div>
                                    <div class="form-btn col-12">
                                        <button type="submit" class="th-btn">
                                            Subscribe Now <img src="assets/img/icon/plane4.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 order-0 order-xl-1">
                        <div class="contact-thumb">
                            <img src="assets/img/normal/contact-2-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>c<!--==============================
Map Area  
==============================-->
    <div class="">
        <div class="contact-map style2">
            <iframe src="https://maps.app.goo.gl/iucS4bxmtDzUivwq7" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div> 
    @endsection
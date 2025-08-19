@extends('layouts.pages')
@section('title', 'Blog')
@section('content')
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Stndard</h1>
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    @forelse($posts as $post)
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="">
                                <img src="{{ asset('storage/'.$post->image) }}" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href=""><i class="fa-light fa-user"></i>by {{ $post->author->name ?? 'Unknown' }}</a>
                                <a href=""><i class="fa-regular fa-calendar"></i>{{ $post->created_at->format('F j, Y \a\t g:ia') }}</a>
                            </div>
                            <h2 class="blog-title">
                                <a href="">{{ $post->title }}</a>
                            </h2>
                            <p class="blog-text">{!! Str::limit(strip_tags($post->content), 150) !!}</p>

                            <a href="" class="th-btn style4 th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div>

                    <!-- <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image">
                                    </a>
                                </div>
                            </div>
                            <button class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>05 May,
                                    2025</a>
                                <a href="blog-details.html"><img src="assets/img/icon/map.svg" alt="">Sea Beach</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">Exploring the Benefits of End-to-End IT Solution Services</a>
                            </h2>
                            <p class="blog-text">In today’s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach to technology adoption and management.</p>
                            <a href="blog-details.html" class="th-btn style4 th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div> -->


                    <!-- <div class="th-blog blog-single blog-2 smoke-bg has-post-thumbnail">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>05 May,
                                    2025</a>
                                <a href="blog-details.html"><img src="assets/img/icon/map.svg" alt="">Sea Beach</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html">The Impact of AI and Machine Learning on IT Solutions</a>
                            </h2>
                            <p class="blog-text">In today’s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach to technology adoption.</p>
                            <a href="blog-details.html" class="th-btn style4 th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div> -->

                    <!-- <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img" data-overlay="bg-title" data-opacity="5">
                            <a href="blog-details.html"><img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a>
                            <a href="https://www.youtube.com/watch?v=5wOhrU2V-SI" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-regular fa-calendar"></i>05 May,
                                    2025</a>
                                <a href="blog-details.html"><img src="assets/img/icon/map.svg" alt="">Sea Beach</a>
                            </div>
                            <h2 class="blog-title">
                                <a href="blog-details.html">The Benefits of 24/7 IT Support for Growing Businesses</a>
                            </h2>
                            <p class="blog-text">In today’s fast-evolving digital landscape, businesses need a clear IT strategy to align technology with their long-term goals. IT Strategy & Planning services help organizations optimize resources, improve efficiency, enhance security, and drive innovation through a structured approach to technology adoption and management.</p>
                            <a href="blog-details.html" class="th-btn style4 th-icon">Read More <i class="fa-light fa-arrow-right-long"></i></a>
                        </div>
                    </div> -->
                        @empty
                            <p>No posts available.</p>
                            @endforelse

                    <div class="th-pagination mt-60">
                <ul>
                    {{-- Previous Page --}}
                    @if ($posts->onFirstPage())
                        <li class="disabled"><span>&laquo;</span></li>
                    @else
                        <li>
                            <a href="{{ $posts->appends(request()->query())->previousPageUrl() }}">&laquo;</a>
                        </li>
                    @endif

                    {{-- First Page --}}
                    @if ($posts->currentPage() > 3)
                        <li>
                            <a href="{{ $posts->appends(request()->query())->url(1) }}">1</a>
                        </li>
                        @if ($posts->currentPage() > 4)
                            <li><span>...</span></li>
                        @endif
                    @endif

                    {{-- Page Numbers --}}
                    @php $range = 2; @endphp
                    @for ($i = max(1, $posts->currentPage() - $range); $i <= min($posts->lastPage(), $posts->currentPage() + $range); $i++)
                        <li>
                            <a href="{{ $posts->appends(request()->query())->url($i) }}" 
                            class="{{ $i == $posts->currentPage() ? 'active' : '' }}">
                                {{ $i }}
                            </a>
                        </li>
                    @endfor

                    {{-- Last Page --}}
                    @if ($posts->currentPage() < $posts->lastPage() - 2)
                        @if ($posts->currentPage() < $posts->lastPage() - 3)
                            <li><span>...</span></li>
                        @endif
                        <li>
                            <a href="{{ $posts->appends(request()->query())->url($posts->lastPage()) }}">
                                {{ $posts->lastPage() }}
                            </a>
                        </li>
                    @endif

                    {{-- Next Page --}}
                    @if ($posts->hasMorePages())
                        <li>
                            <a class="next-page" href="{{ $posts->appends(request()->query())->nextPageUrl() }}">
                                <i class="fa-sharp fa-light fa-arrow-right"></i>
                            </a>
                        </li>
                    @else
                        <li class="disabled"><span>&raquo;</span></li>
                    @endif
                </ul>
            </div>

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search  ">
                            <form class="search-form">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach($recentPosts as $recent)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('storage/'.$recent->image) }}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href=""><i class="fa-solid fa-calendar-days"></i>{{ $recent->created_at->format('M d, Y') }}</a>
                                        </div>
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">{{ Str::words(strip_tags($recent->content), 15, '...') }}</a></h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                @foreach($post->tags as $tag)
                                <a href="">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget_banner  " data-bg-src="assets/img/bg/widget_banner.jpg">
                            <div class="widget-banner position-relative text-center">
                                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                <span class="text">Need Help? Call Here</span>
                                <a class="phone" href="tel:+25669872564">+256 6987 2564</a>
                                <a href="contact.html" class="th-btn style6">Get A Quote <i class="fa-light fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    @endsection
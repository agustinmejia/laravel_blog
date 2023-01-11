@extends('layouts.master')

@section('seo')
    @php
        $icon = Voyager::setting('site.logo', '../images/icon.png');
    @endphp

    <meta property="og:url"           content="{{url('')}}" />
    <meta property="og:type"          content="Blog" />
    <meta property="og:title"         content="{{ setting('site.title') }}" />
    <meta property="og:description"   content="{{ setting('site.description') }}" />
    <meta property="og:image"         content="{{ Voyager::image($icon) }}" />
@endsection

@section('content')
    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <a href="{{ url('post/loren-ipsum') }}" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-1.jpg');">
                            <div class="img-bg-inner">
                            <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </a>
                        </div>

                        <div class="swiper-slide">
                        <a href="{{ url('post/loren-ipsum') }}" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-2.jpg');">
                            <div class="img-bg-inner">
                            <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </a>
                        </div>

                        <div class="swiper-slide">
                        <a href="{{ url('post/loren-ipsum') }}" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-3.jpg');">
                            <div class="img-bg-inner">
                            <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </a>
                        </div>

                        <div class="swiper-slide">
                        <a href="{{ url('post/loren-ipsum') }}" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/post-slide-4.jpg');">
                            <div class="img-bg-inner">
                            <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                    </div>
                </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                        <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                        <h2><a href="{{ url('post/loren-ipsum') }}">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                        <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                            <div class="name">
                            <h3 class="m-0 p-0">Cameron Williamson</h3>
                            </div>
                        </div>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">Let’s Get Back to Work, New York</a></h2>
                                </div>
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                                </div>
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
                                </div>
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                                </div>
                                <div class="post-entry-1">
                                <a href="{{ url('post/loren-ipsum') }}"><img src="assets/img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                                <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                <h2><a href="{{ url('post/loren-ipsum') }}">5 Great Startup Tips for Female Founders</a></h2>
                                </div>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <div class="trending">
                                <h3>Tendencias</h3>
                                <ul class="trending-post">
                                    <li>
                                    <a href="{{ url('post/loren-ipsum') }}">
                                        <span class="number">1</span>
                                        <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                        <span class="author">Jane Cooper</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('post/loren-ipsum') }}">
                                        <span class="number">2</span>
                                        <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                                        <span class="author">Wade Warren</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('post/loren-ipsum') }}">
                                        <span class="number">3</span>
                                        <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                                        <span class="author">Esther Howard</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('post/loren-ipsum') }}">
                                        <span class="number">4</span>
                                        <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                        <span class="author">Cameron Williamson</span>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="{{ url('post/loren-ipsum') }}">
                                        <span class="number">5</span>
                                        <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                        <span class="author">Jenny Wilson</span>
                                    </a>
                                    </li>
                                </ul>
                                </div>

                            </div> <!-- End Trending Section -->
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

        <!-- ======= Culture Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Política</h2>
                    <div><a href="category.html" class="more">Ver todos</a></div>
                </div>

                @include('partials.section-1')
            </div>
        </section><!-- End Culture Category Section -->

        <!-- ======= Business Category Section ======= -->
        <section class="category-section">
            <div class="container" data-aos="fade-up">

                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>Negocios</h2>
                    <div><a href="category.html" class="more">Ver todos</a></div>
                </div>

                @include('partials.section-2')
            </div>
        </section>
        <!-- End Business Category Section -->

    </main>
@endsection
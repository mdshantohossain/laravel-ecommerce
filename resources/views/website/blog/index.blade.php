@extends('website.master')

@section('title', 'Blogs')

@section('body')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Blog
                    <span></span> Technology
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-header mb-50">
                            <h1 class="font-xxl text-brand">Our Blog</h1>
                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                <span class="post-by">32 Sub Categories</span>
                                <span class="post-on has-dot">1020k Article</span>
                                <span class="time-reading has-dot">480 Authors</span>
                                <span class="hit-count  has-dot">29M Views</span>
                            </div>
                        </div>
                        <div class="loop-grid loop-list pr-30">
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url({{ asset('website/assets/imgs/blog/blog-2.jpg') }});">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">Ettitude — Beautifully Designed Bamboo Sheets & Sleep Wear-Home Décor Holiday Gift Guide</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>
                                            <span class="hit-count has-dot">126k Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url(assets/imgs/blog/blog-1.jpg);">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Phone</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">Low-Cost Steroid Is First Drug Shown to Reduce Virus Deaths, Study Says</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 12 April 2022</span>
                                            <span class="hit-count has-dot">125k Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url({{ asset('assets/imgs/blog/blog-3.jpg') }});">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">The litigants on the screen are not actors</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 14 April 2022</span>
                                            <span class="hit-count has-dot">12M Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url({{ asset('assets/imgs/blog/blog-4.jpg') }});">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">Essential Qualities of Highly Successful Music</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 16 April 2022</span>
                                            <span class="hit-count has-dot">136k Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url({{ asset('assets/imgs/blog/blog-5.jpg') }});">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Fashion</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 18 April 2022</span>
                                            <span class="hit-count has-dot">24k Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated hover-up mb-30">
                                <div class="post-thumb" style="background-image: url({{ asset('assets/imgs/blog/blog-6.jpg') }});">
                                    <div class="entry-meta">
                                        <a class="entry-meta meta-2" href="blog-category-grid.html">Global</a>
                                    </div>
                                </div>
                                <div class="entry-content-2">
                                    <h3 class="post-title mb-15">
                                        <a href="blog-post-right.html">Why Teamwork Really Makes The Dream Work</a></h3>
                                    <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.</p>
                                    <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                        <div>
                                            <span class="post-on"> <i class="fi-rs-clock"></i> 22 April 2022</span>
                                            <span class="hit-count has-dot">17k Views</span>
                                        </div>
                                        <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!--post-grid-->
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-area">
                            <div class="sidebar-widget widget_search mb-50">
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Search…">
                                        <button type="submit"> <i class="fi-rs-search"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!--Widget categories-->
                            <div class="sidebar-widget widget_categories mb-40">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Categories</h5>
                                </div>
                                <div class="post-block-list post-module-1 post-module-5">
                                    <ul>
                                        <li class="cat-item cat-item-2"><a href="blog-category-list.html">Beauty</a> (3)</li>
                                        <li class="cat-item cat-item-3"><a href="blog-category-list.html">Book</a> (6)</li>
                                        <li class="cat-item cat-item-4"><a href="blog-category-list.html">Design</a> (4)</li>
                                        <li class="cat-item cat-item-5"><a href="blog-category-list.html">Fashion</a> (3)</li>
                                        <li class="cat-item cat-item-6"><a href="blog-category-list.html">Lifestyle</a> (6)</li>
                                        <li class="cat-item cat-item-7"><a href="blog-category-list.html">Travel</a> (2)</li>
                                    </ul>
                                </div>
                            </div>
                            <!--Widget latest posts style 1-->
                            <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Trending Now</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-post-fullwidth.html">
                                                <img src="assets/imgs/blog/blog-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h4 class="post-title mb-10 text-limit-2-row">The litigants on the screen are not actors </h4>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-post-fullwidth.html">
                                                <img src="assets/imgs/blog/blog-3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">Water Partners With Rag &amp; Bone To Consume</h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-post-fullwidth.html">
                                                <img src="assets/imgs/blog/blog-4.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">The loss is not all that surprising</h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-post-fullwidth.html">
                                                <img src="assets/imgs/blog/blog-5.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">We got a right to pick a little fight, Bonanza </h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                        <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                            <a href="blog-post-fullwidth.html">
                                                <img src="assets/imgs/blog/blog-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="post-content media-body">
                                            <h6 class="post-title mb-10 text-limit-2-row">My entrance exam was on a book of matches </h6>
                                            <div class="entry-meta meta-13 font-xxs color-grey">
                                                <span class="post-on mr-10">25 April</span>
                                                <span class="hit-count has-dot ">126k Views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Widget ads-->
                            <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                                <img src="assets/imgs/banner/banner-11.jpg" alt="">
                                <div class="banner-text">
                                    <span>Women Zone</span>
                                    <h4>Save 17% on <br>Office Dress</h4>
                                    <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                            <!--Widget Tags-->
                            <div class="sidebar-widget widget_tags mb-50">
                                <div class="widget-header position-relative mb-20 pb-10">
                                    <h5 class="widget-title">Popular tags </h5>
                                </div>
                                <div class="tagcloud">
                                    <a class="tag-cloud-link" href="blog-category-grid.html">beautiful</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">New York</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">droll</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">intimate</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">loving</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">travel</a>
                                    <a class="tag-cloud-link" href="blog-category-grid.html">fighting </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

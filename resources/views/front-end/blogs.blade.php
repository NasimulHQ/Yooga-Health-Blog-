@extends('front-end.layout.master')
@section('title')
blogs
@endsection
@section('content')
@include('front-end.includes.page-header', ['pageName'=>'Blog'])
    
    
    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>From Blog</p>
                <h2>Latest Yoga Articles</h2>
            </div>
            <div class="row blog-page">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-4.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-5.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/front-end/img/blog-6.jpg" alt="Blog">
                        </div>
                        <div class="blog-text">
                            <h2>Lorem ipsum dolor</h2>
                            <div class="blog-meta">
                                <p><i class="far fa-list-alt"></i>Body Fitness</p>
                                <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                <p><i class="far fa-comments"></i>5</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                                liqum metus tortor
                            </p>
                            <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
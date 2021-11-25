<div class="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>From Blog</p>
            <h2>Latest Yoga Articles</h2>
        </div>
        <div class="row blog-page">
            @foreach ($article as $yoga)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ url('uploads/articles/'.$yoga->ar_image)}}" alt="Blog img">
                    </div>
                    <div class="blog-text">
                        <h2>{{ $yoga->ar_name }}</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-list-alt"></i>Body Fitness</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>5</p>
                        </div>
                        <p>
                            {{ $yoga->ar_details }}
                        </p>
                        <a class="btn" href="{{ route('blogdetails')}}">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
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
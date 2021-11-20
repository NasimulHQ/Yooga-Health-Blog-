<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        @foreach ($welcome as $item)
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{url('uploads/welcomes/'.$item->wl_image)}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Learn About Us</p>
                    <h2>{{$item->wl_title}}</h2>
                </div>
                <div class="about-text">
                    <p>{{$item->wl_detais}}</p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
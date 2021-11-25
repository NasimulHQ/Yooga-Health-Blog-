<div class="service">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>What we do</p>
            <h2>Yoga For Health</h2>
        </div>
        <div class="row">
            @foreach ($yogahealth as $body)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="{{$body->icon}}"></i>
                        {{-- <a href=""><i title="Edit" style="font-size: 15px" class="fas fa-edit"></i></a> --}}
                    </div>
                    <h3>{{$body->y_name}}</h3>
                    <p>
                        {{$body->y_details}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
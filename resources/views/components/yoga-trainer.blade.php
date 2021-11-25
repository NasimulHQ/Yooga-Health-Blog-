<div class="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Yoga Trainer</p>
            <h2>Expert Yoga Trainer</h2>
        </div>
        <div class="row">
            @foreach ($trainer as $person)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{url('uploads/trainers/'.$person->tr_image)}}" alt="Image">
                        <div class="team-social">
                            @if($person->twitter)
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            @endif
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>{{$person->tr_name}}</h2>
                        <p>{{$person->tr_title}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
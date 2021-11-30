<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact Us</title>
</head>

<body>
    <h1>Contact Us</h1>
    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status')}}</h6>
        @endif
        <div class="contact-form">
            {{-- <div id="success"></div> --}}
            <form method="post" action="{{ url('send-message')}}" enctype="multipart/form-data" name="sentMessage"
                 novalidate="novalidate">
                @csrf
                <div class="control-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required="required"
                        data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="required"
                        data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="required"
                        data-validation-required-message="Please enter a subject" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" name="message" placeholder="Message" required="required"
                        data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-success" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
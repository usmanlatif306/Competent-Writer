@extends('website.layouts.template')
@push('stylesheets')
<style>
    #aboutus {
        background-image: url("new/images/contact.jpg");
        background-image:
            linear-gradient(to right, #315453, #ffffff00),
            url('new/images/contact.jpg');
        background-position: center;
        height: auto;
        width: 100%;
        background-size: cover;
        align-content: center;
    }

    #bgtouch {
        background-image: url("new/images/Bg1.png");
    }
</style>
@endpush
@section('content')
<!-- hero-->
<div class="container-fluid" id="aboutus">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 bg-transparent">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start" id="hero1">

                <h1 class="display-4 fw-bold lh-1 mb-3">
                    Contact Us
                </h1>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

            </div>
        </div>
    </div>
</div>
<!--hero end-->
<br><br>
<!-- hero-->
<div class="container-fluid bg-light">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 bg-light">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <p class="col-lg-10 fs-4 h4">Contact Details</p>
                <h1 class="display-4 fw-bold lh-1 mb-3">Need Help?</h1>
                <p class="col-lg-10 fs-4">Communicate with our friendly customer care center and get an immediate
                    response within seconds. Our 24/7 online live chat support is ready to assist you.</p>

                <!-- <button class="w-30 btn btn-lg  btn" type="submit">Get Started</button> -->
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <label for="floatingInput">Name </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                        <label for="your subject">your subject</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <label for="Phone Number">Address</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Accept terms and privacy policy.
                        </label>
                    </div>
                    <br>
                    <button class="w-100 btn btn-lg btn" type="submit">Send message</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--hero end-->
<br><br>

<!--contact-->

<div class="px-4 py-5 my-5 text-center feature text-white">

    <h4 class="h4">Our Info</h4>
    <h2 class="display-5 fw-bold">Our Contact</h2>
    <p class="col-lg-6 mx-auto">Request your query and get an instant solution to your problem.
    </p>
    <br>
    <!-- Grid row -->
    <div class="row ">

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-clock"></i></a>
            <h5 class="font-weight-bold my-4">Customer Support</h5>
            <a href="mailto:support@competentwriter.com" class="text-white mb-md-0 mb-5">support@competentwriter.com</a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-envelope-fill"></i></a>
            <h5 class="font-weight-bold my-4">Email</h5>
            <a href="mailto:info@competentwriter.com" class="text-white mb-md-0 mb-5">info@competentwriter.com</a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-telephone-fill"></i></a>
            <h5 class="font-weight-bold my-4">Contact </h5>
            <a href="callto:+1234 5678 910" class="text-white mb-md-0 mb-5">+1234 5678 910</a>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->


</div>


<!--contact end-->


<!--Our Office-->

<div class="px-4 py-5 my-5 text-center">

    <h4 class="h4">Our Office</h4>
    <h2 class="display-5 fw-bold">Find Our Office in Your City</h2>
    <p class="col-lg-6 mx-auto">
    </p>
    <br>
    <!-- Grid row -->
    <div class="row ">

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-geo-alt-fill"></i></a>
            <h5 class="font-weight-bold my-4">San Francisco, CA </h5>
            <p class="grey-text mb-md-0 mb-5">52 West 55 Street Suite 202 SF suite s331, NY, 11123 </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-geo-alt-fill"></i></a>
            <h5 class="font-weight-bold my-4">New York, NY </h5>
            <p class="grey-text mb-md-0 mb-5">52 West 55 Street Suite 202 SF suite s331, NY, 11123 </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4">

            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-geo-alt-fill"></i></a>
            <h5 class="font-weight-bold my-4">Paris </h5>
            <p class="grey-text mb-0">52 West 55 Street Suite 202 SF suite s331, NY, 11123 </p>

        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->
</div>
<!--Our Office end-->

<br>
<!--Google map-->
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
</div>
<!--Google Maps-->


@endsection
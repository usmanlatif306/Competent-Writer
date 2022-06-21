@extends('website.layouts.template')
@push('stylesheets')
<style>
    #aboutus {
        background-image: url("new/images/about.jpg");
        background-image:
            linear-gradient(to right, #315453, #ffffff00),
            url('new/images/about.jpg');
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
                    About Us
                </h1>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

            </div>
        </div>
    </div>
</div>
<!--hero end-->

<br><br>
<!-- what we do -->
<div class="container-fluid bg-light">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 bg-light">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <p class="col-lg-10 fs-4 h4">What We Do</p>
                <h1 class="display-4 fw-bold lh-1 mb-3">Quality Service –
                    Satisfied Customer</h1>
                <p class="col-lg-10 text-justify lead" style="text-align: justify;">{{ get_company_name() }} is an
                    online professional writing
                    platform that connects
                    talented specialist writers with everyone who needs a great result in a short timeframe. We hire
                    {{ get_company_name() }}'s writers from different fields, thoroughly check
                    their credentials, and put them through trials. Once we are satisfied with their knowledge, speed,
                    accuracy, and professionalism, they can finally put pen to paper for our clients.</p>
                <p class="col-lg-10 lead" style="text-align: justify;">We want to become better and continue to improve,
                    so we could help students achieve academic goals. We believe that education is all about passion.
                    Students should be able to prioritize and choose what’s really important. Our team is here to give
                    you a real chance to do things that really motivate you.</p>

                <!-- <button class="w-30 btn btn-lg  btn" type="submit">View Detail</button> -->
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <div class="col-xl-12">
                    <div class="card border-0 shadow">
                        <img src="{{asset('new/images/about1.jpg')}}" class="card-img-center" alt="...">

                    </div>
                </div>
                <br><br>
                <div class="col-xl-12">
                    <div class="card border-0 shadow">
                        <img src="{{asset('new/images/about2.jpg')}}" class="card-img-center" alt="...">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end what we do-->
<br><br>
<!-- About Us -->
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <div class="col-lg-6">
            <p class="col-lg-10 fs-4 h4">About Us</p>
            <h1 class="display-5 fw-bold lh-1 mb-3">We Provide The Best Content Writing Service for You</h1>
            <p class="lead" style="text-align:justify;">{{ get_company_name() }} online essay writing
                service was created to eliminate
                student's time which cannot come up with an interesting topic, or have no time to properly edit the text
                before submission and help students with their academic performance! We have gathered only the most
                skilled essay writers who provide original, custom papers for any educational level.</p>
            <p class="lead" style="text-align:justify;">We employ specialist Bachelor's, Master's, and Ph.D. graduates
                with several years of experience in the professional writing industry. To ensure that our paper writing
                services can handle absolutely
                any order,we employ paper writers from hundreds of fields, each excelling in their professionalism.</p>
            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-lg px-4 me-md-2">Learn More</button>
            </div> -->
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{asset('new/images/woman.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                width="700" height="500" loading="lazy">

        </div>
    </div>
</div>
<!-- end About Us-->
<br><br>

<!--Features-->

<div class="px-4 py-5 my-5 text-center feature text-white">

    <h4 class="h4">Features</h4>
    <h2 class="display-5 fw-bold">What’s Our Features</h2>
    <p class="col-lg-6 mx-auto"></p>
    <br>
    <!-- Grid row -->
    <div class="row ">

        <!-- Grid column -->
        <div class="col-12 col-md-6 col-lg-4">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-star-fill"></i></a>
            <h5 class="font-weight-bold my-4">Analytics</h5>
            <p class="grey-text mb-md-0 mb-5">Our subject experts have experience in handling different academic
                platforms, so they can easily navigate through your online portal without bothering you. These include
                blackboard, canvas, Moodle, and more.
            </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-hand-thumbs-up"></i></a>
            <h5 class="font-weight-bold my-4">Resourceful Solutions</h5>
            <p class="grey-text mb-md-0 mb-5">We not only deliver immediate answers to your queries but also provide
                some solutions about how you execute your tasks in your online class. We consider your deadlines and
                convey your work before the date
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-clock"></i></a>
            <h5 class="font-weight-bold my-4">24/7 Support</h5>
            <p class="grey-text mb-0">You can get our services anytime, any day. Our 24/7 available services allow you
                to contact our customer care center at any time. Other than this, you can also place an order right away
                once you get it despite day or night.
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="mt-5 col-12 col-md-6 col-lg-4">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-cash"></i></a>
            <h5 class="font-weight-bold my-4">Affordable Rates</h5>
            <p class="grey-text mb-0">We have a comprehensive pricing strategy that is suitable for every individual.
                Our prices differ as per the subject expert you choose. They also depend upon various other factors like
                the deadline you select
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-md-6 col-lg-4 mt-5">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-bookmark"></i></a>
            <h5 class="font-weight-bold my-4">Plagiarism Report</h5>
            <p class="grey-text mb-0">Want to get a plagiarism report with your essay? We provide this service for free,
                so you can show it to your teachers. It also gives confidence to clients when they know everything we
                provide is unique and not a copy.
            </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-md-6 col-lg-4 mt-5">
            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                    class="bi bi-shield-check"></i></a>
            <h5 class="font-weight-bold my-4">Privacy Guaranteed</h5>
            <p class="grey-text mb-0">Usually, when you hire someone to get essay writing services, you might find them
                pretty expensive. Thus, we offer the most affordable fee to provide you our services. Whether you
                require urgent essay writing service or a long deadline, we will propose competitive rates.
            </p>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->


</div>


<!--Features end-->
<br><br>


<!--team-->
@include('website.partials.team',['tutors'=>$data['writers']])
<!--team end-->
<br><br>
<!--Get in touch-->
@include('website.partials.cta')
<!--Get in touch end-->
@endsection
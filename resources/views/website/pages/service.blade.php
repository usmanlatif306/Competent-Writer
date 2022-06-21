@extends('website.layouts.template')
@push('stylesheets')
<style>
    #aboutus {
        background-image: url("new/images/servicesbg.jpg");
        background-image:
            linear-gradient(to right, #315453, #ffffff00),
            url('new/images/servicesbg.jpg');
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
                    Our Services
                </h1>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">

            </div>
        </div>
    </div>
</div>
<!--hero end-->
<br><br>
<!--our services-->
<div class="px-4 py-5 my-5 text-center text-black bg-light" id="services">

    <h4 class="h4">Our Services</h4>
    <h2 class="display-5 fw-bold">Our Content Writing Services</h2>

    <br><br>
    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-4">

            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-1.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Website Content</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-2.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Blog Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-3.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Article Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Grid column -->
    <br><br>
    <!-- Grid row -->
    <div class="row ">
        <!-- Grid column -->
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-4.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Caption Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-5.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Product Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-6.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Letter Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Grid row -->
    <div class="row ">
        <!-- Grid column -->
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-7.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Song Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-8.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Book Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4 mb-sm-0 ms-auto">
                <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-9.png')}}" alt="Website Content" />
                <div class="mt-3">
                    <h1 class="font-weight-bold">Custom Writing</h1>
                    <p class="mt-3">
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Grid row -->

<!--our services end-->
<br><br>

<!--Features-->
@include('website.partials.features')
<!--Features end-->
<br><br>

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title pb-5">
            <br><br>
            <h2 class="display-5 fw-bold text-center">Frequently Asked Questions</h2>
            <p></p>
        </div>

        <div class="faq-list">
            <ul>
                @foreach($data['faqs'] as $faq)
                <li data-aos="fade-up" data-aos-delay="{{$loop->index}}00">
                    <i class=""></i> <a data-bs-toggle="collapse" class=""
                        data-bs-target="#faq-list-{{$faq->id}}">{{$faq->question}}<i class=""></i><i class=""></i></a>
                    <div id="faq-list-{{$faq->id}}" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            {{$faq->answer}}
                        </p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</section><!-- End Frequently Asked Questions Section -->

<br><br><br>
<!--Get in touch-->
@include('website.partials.cta')
<!--Get in touch end-->
@endsection
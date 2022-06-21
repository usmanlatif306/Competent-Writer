@extends('website.layouts.template')
@section('content')

<!-- hero-->
<div class="container-fluid" id="hero">

    <div class="container col-xl-10 col-xxl-8 px-4 py-5 bg-transparent">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start" id="hero1">
                <p class="col-lg-10 fs-4 h4">We Help You</p>
                <h1 class="display-4 fw-bold lh-1 mb-3">High-quality content from experienced professionals</h1>
                <p class="col-lg-10 fs-4">We not only deliver immediate answers to your queries but also provide some
                    solutions about how you execute your tasks</p>

                <button onclick="window.location='/login'" class="w-30 btn btn-lg btn" type="submit">Get
                    Started</button>
            </div>
            <div class="col-md-10 mx-auto col-lg-5 mt-4 mt-lg-0">
                @include('website.partials.order')
            </div>
        </div>
    </div>
</div>
<!--hero end-->

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
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button onclick="window.location='/about-us'" type="button" class="btn btn-lg px-4 me-md-2">Learn
                    More</button>
            </div>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{asset('new/images/woman.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                width="700" height="500" loading="lazy">

        </div>
    </div>
</div>
<!-- end About Us-->

<br><br>
<!-- Our Services-->
<div class="py-5">
    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-4">
                <h3 class="h4">Our Services</h3>
                <h3 class="display-6 fw-bold lh-1 mb-3">Our Content Writing Services</h3>
                <p>Professional team of experts in various subjects can handle any academic essay, including but not
                    limited to analytical, compare & contrast, narrative, expository, argumentative, persuasive,
                    descriptive, and so on. On top of that, there are professionals who’ll gladly work on your law case
                    study, nursing report, or history presentation.</p>
                <button type="button" onclick="window.location='/services'" class="btn btn-lg px-4 me-md-2">View All
                    Services</button>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mb-4 mb-sm-0 ms-auto">
                    <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-2.png')}}"
                        alt="Website Content" />
                    <div class="mt-3">
                        <h2 class="font-semi-bold">Essay Writing</h2>
                        <p class="mt-3">An essay demands a lot of in-depth research and effort to bring creativity,
                            engagement, and authentic information to it. Seems difficult? Hand
                            over your essay details to
                            us and get straight A’s!</p>
                    </div>
                </div>
                <br>
                <div class="mb-4 mb-sm-0 ms-auto">
                    <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-4.png')}}"
                        alt="Website Content" />
                    <div class="mt-3">
                        <h2 class="font-semi-bold">Assignment Writing</h2>
                        <p class="mt-3">Whether you’re struggling with writing your assignments or strive to improve
                            your
                            already-written assignments, we are here to help you provide the best essay writing services
                            at
                            extremely affordable prices and several other benefits</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mb-4 mb-sm-0 ms-auto">
                    <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-3.png')}}"
                        alt="Website Content" />
                    <div class="mt-3">
                        <h2 class="font-semi-bold">Article Writing</h2>
                        <p class="mt-3">With your academic courses giving you stress,or you are busy with some other
                            projects and you’re not available to take it, let us unleash your burden, get
                            our articles writing help now!</p>
                    </div>
                </div>
                <br>
                <div class="mb-4 mb-sm-0 ms-auto">
                    <img class="rounded img-fluid" src="{{asset('new/images/Icon-Writing-1.png')}}"
                        alt="Website Content" />
                    <div class="mt-3">
                        <h2 class="font-semi-bold">Website Content</h2>
                        <p class="mt-3">If you’re in the process of creating a website, one of your top priorities is to
                            write attractive and compelling content for your site. Don’t panic! We are here to help you
                            writing attractive and compelling content. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Our Services end-->
<br><br>
<!-- ======= guarantees Section ======= -->
<section id="guarantees" class="guarantees section-bg pb-5">
    <div class="container">

        <div class="section-title text-center pb-5">
            <h2 class="display-5 fw-bold">Our Services</h2>
            <p></p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box">
                    <i class="bi bi-briefcase"></i>
                    <h4><a href="#">24/7 support</a></h4>
                    <p>We provide 24/7 support services. You can email anytime ,
                        any day and we’ll respond to you within minutes.
                        If you want your tutor contact number,
                        you can email it and it ll be given to you.</p>
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="bi bi-card-checklist"></i>
                    <h4><a href="#">Similarity Reports</a></h4>
                    <p>We check all work on turnitin before submitting. You ll be provided similarity reports
                        in all major assignments.</p>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="icon-box">
                    <i class="bi bi-bar-chart"></i>
                    <h4><a href="#">Grades Guarantee</a></h4>
                    <p>We charge only for passing the work not for failing it. We agree on the minimum grade on each
                        coursework/paper
                        with the client and refund if guaranteed grade is not achieved.</p>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="icon-box">
                    <i class="bi bi-binoculars"></i>
                    <h4><a href="#">Proofreading</a></h4>
                    <p>Our experienced editors proofread all work before sending to clients. We make sure the content
                        delivered to you is of high quality.</p>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="icon-box">
                    <i class="bi bi-brightness-high"></i>
                    <h4><a href="#">Unlimited Revisions</a></h4>
                    <p>We provide unlimited revisions for your assignments. You can get it revised
                        until you are sure it ll get a passing grade</p>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="icon-box">
                    <i class="bi bi-calendar4-week"></i>
                    <h4><a href="#">Refund Policy</a></h4>
                    <p>If you do not like our services, you can ask for a refund. We will refund your
                        money if we could not get a agreed grade on your assignment.</p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End guarantees Section -->
<br>

<!-- ======= How it works? Section ======= -->
<section id="what-we-do" class="what-we-do section-bg">
    <div class="container">

        <div class="section-title text-center">
            <h2 class="display-5 fw-bold">How we works?</h2>
            <p></p>
        </div>
        <br><br>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-wallet2"></i></div>
                    <h4><a href="">Fill the order form</a></h4>
                    <p>Tell us about your essay: Instructions, requirements, and deadline.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-file"></i></div>
                    <h4><a href="">Choose Writer</a></h4>
                    <p>Chat with professional writers out of 450+ and pick the best one for you.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-wallet"></i></div>
                    <h4><a href="">Do Payment</a></h4>
                    <p>Make a deposit, and your essay writer will start working on your paper.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4><a href="">Get Your Work</a></h4>
                    <p>Our experts will deliver the order beforedeadline. You can review it and ask for changes
                        if something wrong or missing.</p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End How it works? -->

<!--Features-->
@include('website.partials.features')
<!--Features end-->
<br><br>
<!-- Achievement-->
<div class="py-5">
    <div class="container">
        <div class="row mx-auto">
            <div class="col-lg-4">
                <h3 class="h4">Achievement</h3>
                <h1 class="display-6 fw-bold lh-1 mb-3">Over 1300+ Complete work & Still counting</h1>
                <p style="text-align: justify;">Have no doubts as only most high-tech tools are used to scan all texts
                    for plagiarism to ensure 100%
                    originality of each assignment. Every order is under strict control of our professional essay
                    writing team.</p>

            </div>

            <div class="col-lg-4 text-center">
                <div class="mb-4 mb-sm-0 ms-auto">

                    <div class="mt-3">
                        <h1 class="display-5 fw-bold lh-1 mb-3 Achievementheading count"> 500+ </h1>
                        <p class="mt-3"> Satisfied Customers</p>
                    </div>
                </div>
                <br><br><br>
                <div class="mb-4 mb-sm-0 ms-auto">

                    <div class="mt-3">
                        <h1 class="display-5 fw-bold lh-1 mb-3 Achievementheading count"> 450+ </h1>
                        <p class="mt-3"> Professional Worker</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="mb-4 mb-sm-0 ms-auto">

                    <div class="mt-3">
                        <h1 class="display-5 fw-bold lh-1 mb-3 Achievementheading count"> 500+ </h1>
                        <p class="mt-3"> Successful projects</p>
                    </div>

                </div>
                <br><br><br>
                <div class="mb-4 mb-sm-0 ms-auto">

                    <div class="mt-3">
                        <h1 class="display-5 fw-bold lh-1 mb-3 Achievementheading count"> 2 </h1>
                        <p class="mt-3"> Years of experience</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--Achievement end-->
<br><br>

<!--team-->
@include('website.partials.team',['tutors'=>$data['writers']])
<!--team end-->

<br><br>

<!--testimonial-->
@include('website.partials.testimonials',['testimonials'=>$data['ratings']])
<!--testimonial end-->
<br><br>

<!--gallery-->
<!-- <div class="container">
    <div class="px-4 py-5 text-center">
        <div class="py-5">
            <h4 class="h4">Gallery</h4>
            <h1 class="display-5 fw-bold text-black">Amazing Life at us</h1>

        </div>
    </div>
    <div class="row">

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery1.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery2.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery3.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery4.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery5.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow">
                <img src="{{asset('new/images/gallery6.jpg')}}" class="card-img-top" alt="...">

            </div>
        </div>
    </div>
</div> -->
<!--gallery end-->
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
<br><br>
<!--Get in touch-->
@include('website.partials.cta')
<!--Get in touch end-->
</div>
<!-- End of .container -->
@endsection
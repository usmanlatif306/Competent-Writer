@extends('website.layouts.template')
@section('title','Assignment')
@section('content')
@include('website.pages.particles.section_1',['title'=>$assignment->top_heading,'content'=>$assignment->top_content])

<div class="slider_area pt-5 section-bg">
    <div class="single_slider d-flex align-items-center justify-content-center py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <h3>{{$assignment->choose1_heading}}</h3>
                    <p class="section-about">{{$assignment->choose2_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$assignment->choose2_heading}}</h3>
                    <p class="section-about">{{$assignment->choose2_content}}
                    </p>
                </div>

                <div class="col-md-12 mt-3">
                    {!! $assignment->we_are_best !!}
                </div>
                <div class="text-center mt-4">
                    <a href="#order" class="btn btn-sm btn-primary text-center">{{$assignment->we_are_best_btn}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service area -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{$assignment->guarantee_heading}} </h2>
            <p></p>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee1_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee1_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee2_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee2_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee3_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee3_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee4_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee4_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee5_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee5_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee6_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee6_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee7_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee7_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee8_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee8_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee9_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee9_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee10_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee10_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee11_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee11_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee12_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee12_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$assignment->guarantee13_heading}}</a></h4>
                    <p style="text-align:justify;">{{$assignment->guarantee13_content}}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <h3 class="text-center py-3">Enjoy Essential Features For Free</h3>
            {!! $assignment->features !!}
        </div>

    </div>
    <div class="text-center mt-4">
        <a href="#order" class="btn btn-sm btn-primary text-center">{{$assignment->features_btn}}</a>
    </div>

    </div>
</section>
<!-- service area end -->

<!-- tutors area -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{$assignment->expert_heading}}</h2>
            <p></p>
        </div>
        <div class="col-md-10 offset-md-1">
            {!! $assignment->expert_content !!}
        </div>

        <div class="testimonials-slider swiper mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($data['writers'] as $item)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="pb-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('storage/'.$item->photo)}}" class="testimonial-img" alt="">
                                <div class="ml-3 text-left">
                                    <h3>{{$item->first_name}} {{$item->first_name}}</h3>
                                    <span>{{number_format($item->ratings_received->avg('number'), 2, '.', ',')}}</span>
                                    <span class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        @if($item->ratings_received->avg('number') < 5) <i class="fas fa-star-half-alt">
                                            </i>
                                            </i>
                                            @elseif($item->ratings_received->avg('number') < 4.5) <i
                                                class="far fa-star"></i>
                                                @else
                                                <i class="fa fa-star"></i>
                                                @endif
                                                <!-- <i class="fas fa-star-half-alt"></i> -->
                                    </span>
                                    <span class="d-block text-right">
                                        (1325 reviews)
                                    </span>
                                    <a href="#" class="btn btn-sm btn-primary float-right mt-2">Hire Me</a>
                                </div>
                            </div>
                            <div class="mt-3 d-flex tutor-degree mx-auto">
                                <span class="w-50 text-left">Degree:</span>
                                <span class="w-50 right-about">
                                    @if($item->meta('degree'))
                                    {{$item->meta('degree')}}
                                    @else
                                    Bechelor
                                    @endif
                                </span>
                            </div>

                        </div>

                        <p class="mt-3">
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            @if($item->meta('bio'))
                            {{$item->meta('bio')}}
                            @else
                            Sr. C# .Net Software Engineer with 9+ years experience in Web applications, Desktop
                            Applications, Android apps, IOS.
                            @endif
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>
<!-- tutors area end -->
<!-- how to work -->
<section id="what-we-do" class="what-we-do section-bg">
    <div class="container">

        <div class="section-title">
            <h2>{{$assignment->work_heading}}</h2>
            <p></p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-dribbble"></i></div>
                    <h4><a href="">{{$assignment->work_step1_heading}}</a></h4>
                    <p>{{$assignment->work_step1_content}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-file-earmark"></i></div>
                    <h4><a href="">{{$assignment->work_step2_heading}}</a></h4>
                    <p>{{$assignment->work_step2_content}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-speedometer"></i></div>
                    <h4><a href="">{{$assignment->work_step3_heading}}</a></h4>
                    <p>{{$assignment->work_step3_content}}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4><a href="">{{$assignment->work_step4_heading}}</a></h4>
                    <p>{{$assignment->work_step4_content}}</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="#order" class="btn btn-sm btn-primary text-center text-capitalize">{{$assignment->work_btn}}</a>
        </div>

        <div class="row mt-5">
            <div class="col-md-10 offset-md-1">
                <h3 class="text-center py-3">We can cater almost all kinds of Assignments for you!</h3>
                <p class="section-about">EduIntello owns subject experts who are proficient in writing various types of
                    assignments. The genre of assignments that we have completed include: </p>
                <ul>
                    <li>Lab Assignments</li>
                    <li>Essays</li>
                    <li>MCQ’s</li>
                    <li>Lab Reports</li>
                    <li>Case Studies</li>
                </ul>
                <p class="section-about">We are not just limited to them!</p>
            </div>

        </div>
    </div>
</section>
<!-- end how to work -->

<!-- Our Past Work -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{$assignment->past_work_heading}}</h2>
            <p> {{$assignment->past_work_content}}</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Business Assignment-20220204T110507Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Business Assignment-20220204T110507Z-001.zip')}}">Business
                            Assignment</a></h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Biological assignment-20220204T111410Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Biological assignment-20220204T111410Z-001.zip')}}">Biological
                            Assignment</a></h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Economic Assignment-20220204T111426Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Economic Assignment-20220204T111426Z-001.zip')}}">Economic
                            Assignment</a></h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/English assignment-20220204T111441Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/English assignment-20220204T111441Z-001.zip')}}">English</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Geological assignment-20220204T111457Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Geological assignment-20220204T111457Z-001.zip')}}">Geological
                            Assignment</a></h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Law assignment-20220204T111531Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Law assignment-20220204T111531Z-001.zip')}}">Law Assignment</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End our past work -->

<!-- subject area -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Subjects We Are Good At</h2>
            <p>EduIntello offers “Do My Assignment” services to students from various academic disciplines. These
                subjects include:</p>
        </div>

        <div class="row">
            @foreach($data['subjs'] as $item)
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <i class="bi bi-book"></i>
                    <h4 style="padding-top: 3px;"><a href="#" class="text-capitalize">{{$item->name}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="#order" class="btn btn-sm btn-primary text-capitalize">Do my assignment for me</a>
        </div>
    </div>
</section>
<!-- subject area end -->

<!-- faqs -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{!! homepage('faqs_title')
                !!}</h2>
            <p></p>
        </div>
        <div class="faq-list">
            <ul>
                @foreach($data['faqs'] as $faq)
                <li data-aos="fade-up" data-aos-delay="{{$loop->iteration}}00">
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
</section>
<!-- faqs end -->
<!-- customer review -->
<section id="Testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($data['ratings'] as $item)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="pb-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('storage/'.$item->user->photo)}}" class="testimonial-img" alt="">
                                <div class="ml-3 text-left">
                                    <h3>{{$item->user->first_name}}</h3>
                                    <span>{{number_format($item->number, 2, '.', ',')}}</span>
                                    <span class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        @if($item->number < 5) <i class="fas fa-star-half-alt">
                                            </i>
                                            </i>
                                            @elseif($item->number < 4.5) <i class="far fa-star"></i>
                                                </i>
                                                @else
                                                <i class="fa fa-star"></i>
                                                @endif
                                                <!-- <i class="fas fa-star-half-alt"></i> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        <p class="mt-3">
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {{$item->comment}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- customer review end -->
<section class="faq section-bg pt-0">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{$assignment->last_heading}}</h2>
            <p></p>
        </div>
        <div class="text-center mt-4">
            <a href="#order"
                class="btn btn-sm btn-primary text-center text-capitalize">{{$assignment->last_btn_text}}</a>
        </div>
    </div>
</section>
@endsection
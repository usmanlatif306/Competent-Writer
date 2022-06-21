@extends('website.layouts.template')

@section('content')
@include('website.pages.particles.section_1',['title'=>$homework->top_heading,'content'=>$homework->top_content])

<section class="slider_area section-bg">
    <div class="single_slider">
        <div class="container">
            <div class="section-title">
                <h2>{{$homework->section1_heading}}</h2>
                <p>{{$homework->section1_content}}</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>{{$homework->choose2_heading}}</h3>
                    <p class="section-about">{{$homework->choose2_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->choose3_heading}}</h3>
                    <p class="section-about">{{$homework->choose3_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->choose4_heading}}</h3>
                    <p class="section-about">{{$homework->choose4_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->choose1_heading}}</h3>
                    <p class="section-about">{{$homework->choose1_content}}
                    </p>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$homework->choose_btn_text}}</a>
            </div>
        </div>
    </div>
</section>

<section class="slider_area section-bg">
    <div class="single_slider">
        <div class="container">
            <div class="section-title">
                <h2>{{$homework->guarantee_heading}}</h2>
                <p>Customers come with different expectations, and we welcome all of them. Here is a list of things we
                    guarantee to our clients, so they feel confident reaching us.

                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>{{$homework->guarantee1_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee1_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee2_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee2_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee3_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee3_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee4_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee4_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee5_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee5_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee6_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee6_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->guarantee7_heading}}</h3>
                    <p class="section-about">{{$homework->guarantee7_content}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider_area section-bg">
    <div class="single_slider">
        <div class="container">
            <div class="section-title">
                <h2>{{$homework->service_heading}}</h2>
                <p>Well, the word “free” seems very attractive when we talk about students. They mostly look for
                    something for free when purchasing a product or getting a service. We are not letting you down in
                    this matter, as we offer some other services without additional charges.

                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>{{$homework->service1_heading}}</h3>
                    <p class="section-about">{{$homework->service1_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->service2_heading}}</h3>
                    <p class="section-about">{{$homework->service2_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->service3_heading}}</h3>
                    <p class="section-about">{{$homework->service3_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$homework->service4_heading}}</h3>
                    <p class="section-about">{{$homework->service4_content}}
                    </p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$homework->service_btn_text}}</a>
            </div>
        </div>
    </div>
</section>

<!-- tutors area -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{$homework->expert_heading}}</h2>
            <p></p>
        </div>
        <div class="col-md-10 offset-md-1">
            {!! $homework->expert_content !!}
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
            <h2>{{$homework->work_heading}}</h2>
            <p></p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">{{$homework->work_step1_heading}}</a></h4>
                    <p>{{$homework->work_step1_content}}
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">{{$homework->work_step2_heading}}</a></h4>
                    <p>{{$homework->work_step2_content}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">{{$homework->work_step3_heading}}</a></h4>
                    <p>{{$homework->work_step3_content}}</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- end how to work -->

<!-- Our Past Work -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>OUR PAST WORK</h2>
            <p>If you are feeling confused or unable to decide whether to hand us your work or not, here is a glimpse of
                documents written by our subject experts in the past.</p>
        </div>

        <div class="row">

            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Biological assignment-20220204T111410Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Biological assignment-20220204T111410Z-001.zip')}}">Biological
                            Homework</a></h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Law homework-20220204T111531Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Law assignment-20220204T111531Z-001.zip')}}">Law Homework</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/English homework-20220204T111441Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/English homework-20220204T111441Z-001.zip')}}">English
                            Homework</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Math homework20220204T111546Z-001.zip')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Math homework20220204T111546Z-001.zip')}}">Math
                            Homework</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Psychology homework-20220204T111623Z-001')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Psychology homework-20220204T111623Z-001')}}">Psychology
                            Homework</a>
                    </h4>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <a href="{{asset('storage/files/Sociology homework-20220204T111643Z-001')}}" download="">
                        <i class="bi bi-file-zip">
                        </i>
                    </a>
                    <h4 class="pt-0 pt-md-2"><a
                            href="{{asset('storage/files/Sociology homework-20220204T111643Z-001')}}">Sociology
                            Homework</a>
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
            <h2>{{$homework->subject_heading}}</h2>
            <p></p>
        </div>

        <div class="row">
            @foreach($data['subjs'] as $item)
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <i class="bi bi-book"></i>
                    <h4 style="padding-top: 3px;"><a href="{{route('homework_page_sub',$item->slug)}}"
                            class="text-capitalize">{{$item->name}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- subject area end -->

<!-- service area -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{$homework->homework_heading}}</h2>
            <p>{{$homework->homework_content}}</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework1_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework1_content}}.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework2_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework2_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework3_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework3_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework4_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework4_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework5_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework5_content}}.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$homework->homework6_heading}}</a></h4>
                    <p style="text-align:justify;">{{$homework->homework6_content}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service area end -->

<!-- customer review -->
<section id="Testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Looking for our work?</h2>
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
            <div class="text-center mt-4">
                <a href="#order" class="btn btn-sm btn-primary text-capitalize">pay to do homework now!</a>
            </div>
        </div>
    </div>
</section>
<!-- customer review end -->

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
<section class="faq section-bg pt-0">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>{{$homework->last_heading}}</h2>
            <p></p>
        </div>
        <div class="text-center mt-4">
            <a href="#order" class="btn btn-sm btn-primary text-center text-capitalize">{{$homework->last_btn_text}}</a>
        </div>
    </div>
</section>
@endsection
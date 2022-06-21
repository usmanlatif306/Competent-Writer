@extends('website.layouts.template')
@section('content')
@include('website.pages.particles.section_1',['title'=>$class->top_heading,'content'=>$class->top_content])
<section class="slider_area section-bg">
    <div class="single_slider">
        <div class="container">
            <div class="section-title">
                <h2>{{$class->section_1_heading}}</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <ul>
                        <li>{{$class->section_1_point_1}}</li>
                        <li>{{$class->section_1_point_2}}</li>
                        <li>{{$class->section_1_point_3}}</li>
                        <li>{{$class->section_1_point_4}}</li>
                        <li>{{$class->section_1_point_5}}</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$class->section_1_btn_text}}</a>
            </div>
        </div>
    </div>
</section>
<section class="slider_area section-bg pt-0">
    <div class="single_slider">
        <div class="container">
            <div class="section-title">
                <h2>{{$class->section_2_heading}}</h2>
                <p></p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>{{$class->choose_1_heading}}</h3>
                    <p class="section-about">{{$class->choose_1_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_2_heading}}</h3>
                    <p class="section-about">{{$class->choose_2_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_3_heading}}</h3>
                    <p class="section-about">{{$class->choose_3_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_4_heading}}</h3>
                    <p class="section-about">{{$class->choose_4_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_5_heading}}</h3>
                    <p class="section-about">{{$class->choose_5_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_6_heading}}</h3>
                    <p class="section-about">{{$class->choose_6_content}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{$class->choose_7_heading}}</h3>
                    <p class="section-about">{{$class->choose_7_content}}
                    </p>
                </div>

            </div>
            <div class="text-center mt-4">
                <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$class->choose_btn_text}}</a>
            </div>
        </div>
    </div>
</section>
<!-- how to work -->
<section id="what-we-do" class="what-we-do section-bg pt-0">
    <div class="container">

        <div class="section-title">
            <h2>{{$class->work_heading}}</h2>
            <p>{{$class->work_content}}</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4><a href="">{{$class->work_step1_heading}}</a></h4>
                    <p>{{$class->work_step1_content}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4><a href="">{{$class->work_step2_heading}}</a></h4>
                    <p>{{$class->work_step2_content}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4><a href="">{{$class->work_step3_heading}}</a></h4>
                    <p>{{$class->work_step3_content}}</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$class->work_btn_text}}</a>
        </div>
    </div>
</section>
<!-- end how to work -->

<!-- service area -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{$class->service_heading}}</h2>
            <p>{{$class->service_content}}</p>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$class->service1_heading}}</a></h4>
                    <p style="text-align:justify;">{{$class->service1_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$class->service2_heading}}</a></h4>
                    <p style="text-align:justify;">{{$class->service2_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$class->service3_heading}}</a></h4>
                    <p style="text-align:justify;">{{$class->service3_content}}</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mt-3">
                <div class="icon-box" style="min-height: 160px;">
                    <i class="bi bi-file-earmark-text"></i>
                    <h4><a href="#">{{$class->service4_heading}}</a></h4>
                    <p style="text-align:justify;">{{$class->service4_content}}</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#order" class="btn btn-sm btn-primary text-capitalize">{{$class->service_btn_text}}</a>
        </div>
    </div>
</section>
<!-- service area end -->

<!-- subject area -->
<section class="guarantees section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Subjects We Work On</h2>
            <p></p>
        </div>

        <div class="row">
            @foreach($data['subjs'] as $item)
            <div class="col-md-4 col-lg-3 mt-3">
                <div class="icon-box" style="min-height: 50px;">
                    <i class="bi bi-book"></i>
                    <h4 style="padding-top: 3px;"><a href="{{route('class_page_sub',$item->slug)}}"
                            class="text-capitalize">{{$item->name}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- subject area end -->

<!-- customer review -->
<section id="Testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Client Testimonials</h2>
            <p>We’re a trustworthy team of academics, take a look at what our clients have to say about us</p>
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

<!-- faqs -->
<section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Have Concerns?</h2>
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
            <h2>{{$class->last_heading}}</h2>
            <p></p>
        </div>
        <div class="text-center mt-4">
            <a href="#order" class="btn btn-sm btn-primary text-center text-capitalize">{{$class->last_btn_text}}</a>
        </div>
    </div>
</section>
@endsection
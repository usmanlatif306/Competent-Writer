<!--team-->
<div class="container">
    <div class="px-4 py-5 text-center">
        <div class="py-5">
            <h4 class="h4">Our Expert</h4>
            <h1 class="display-5 fw-bold text-black">Our Successful Team</h1>

        </div>
    </div>
    <div class="row">
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($tutors as $writers)
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="{{$loop->index}}"
                    class="@if($loop->iteration===1)active @endif" aria-current="@if($loop->iteration===1) true @endif"
                    aria-label="Slide {{$loop->iteration}}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($tutors as $writers)
                <div class="carousel-item @if($loop->iteration===1)active @endif">
                    <div class="row">
                        @foreach($writers as $item)
                        <div class="col-xl-4 col-sm-12 mb-4">
                            <div class="card border-0 shadow d-flex flex-column flex-wrap h-100">
                                <img src="{{asset('storage/'.$item->photo)}}" class="card-img-top card-img-custom"
                                    alt="...">
                                <div class="card-body text-center">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title mb-0">{{$item->first_name}} {{$item->last_name}}</h5>
                                        <div class="card-text text-black-50">
                                            @if($item->meta('degree'))
                                            {{$item->meta('degree')}}
                                            @else
                                            Bechelor
                                            @endif
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-2 position-relative">
                                        <div class="">
                                            <span
                                                class="position-absolute rating-number">{{number_format($item->ratings_received->avg('number'),
                                                2, '.', ',')}}</span>
                                            <span class="text-warning position-absolute rating-star">
                                                @if($item->ratings_received_count ===0)
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                <i class="bi bi-star"></i>
                                                @else
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                @if($item->ratings_received->avg('number') === 5)
                                                <i class="bi bi-star-fill"></i>
                                                @elseif($item->ratings_received->avg('number') > 4)
                                                <i class="bi bi-star-half">
                                                </i>
                                                @else
                                                <i class="bi bi-star"></i>
                                                @endif
                                                @endif
                                            </span>
                                        </div>
                                        <span class="d-block text-right">
                                            ({{$item->ratings_received_count}} reviews)
                                        </span>
                                    </div>
                                    <div class="card-text text-black-50 mt-2">
                                        @if($item->meta('bio'))
                                        {{$item->meta('bio')}}
                                        @else
                                        A highly recommended tutor with expertise in statistical analysis.
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>


        <!-- <div class="d-grid gap-2 d-md-flex justify-content-center text-center mt-5">
            <button type="button" class="btn btn-lg px-4 me-md-2">View All Team</button>
        </div> -->
    </div>
</div>
<!--team end-->
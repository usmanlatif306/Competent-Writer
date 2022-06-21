<!--testimonial-->
<div class="px-4 py-5 my-5 text-center feature text-white">

    <h4 class="h4">Testimonial</h4>
    <h2 class="display-5 fw-bold pb-5">What Client Says</h2>

    <div id="carouselExampleIndicators" class="carousel carousel-dark slide pb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($testimonials as $ratings)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$loop->index}}"
                class="@if($loop->iteration===1)active @endif" aria-current="@if($loop->iteration===1) true @endif"
                aria-label="Slide {{$loop->iteration}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($testimonials as $ratings)
            <div class="carousel-item @if($loop->iteration===1)active @endif">
                <div class="row">
                    @foreach($ratings as $item)
                    <div class="col-sm-6">
                        <div class="card cardtest">
                            <div class="card-body">
                                <p class="card-text">{{$item['comment']}}</p>
                                <h2 class="card-title">{{$item['user']['first_name']}} {{$item['user']['last_name']}}
                                </h2>
                                <!-- <p class="card-text">Costumer</p> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>

</div>
<!--testimonial end-->
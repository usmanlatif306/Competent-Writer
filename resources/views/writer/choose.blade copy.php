@extends('layouts.app')
@section('title', 'Choose Tutors')
@section('content')
<div class="container writer-page-container">
    <h2>Tutors who placed their offers</h2>
    <br>
    <!-- Showing bids -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="md-card-content">
                        <div id="" class="wizard clearfix">
                            <div class="steps clearfix">
                                <ul role="tablist">
                                    <li role="tab" class="first" aria-disabled="false" aria-selected="true">
                                        <a href="#" aria-controls="wizard_advanced-p-0"><span class="number">1</span>
                                            <span class="title">Place Order</span></a>
                                    </li>
                                    <li role="tab" class="current" aria-disabled="false" aria-selected="true">
                                        <a id="wizard_advanced-t-1" href="#" aria-controls="wizard_advanced-p-1"><span class="number">2</span>
                                            <span class="title">Choose Tutor</span></a>
                                    </li>
                                    <li role="tab" class="last" aria-disabled="true">
                                        <a id="wizard_advanced-t-2" href="#" aria-controls="wizard_advanced-p-2"><span class="number">3</span>
                                            <span class="title">Pay Fee</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <form action="{{route('select_write',$order->id)}}" method="POST">
                        @csrf
                        <input type="text" style="opacity: 0;">
                        <button type="submit" class="btn btn-sm btn-primary mb-3 float-right">Select the best
                            Subject
                            Expert for me</button>
                    </form>
                    @foreach($writers as $writer)
                    <div class="col-12 p-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="https://www.clipartmax.com/png/middle/171-1717870_stockvader-predicted-cron-for-may-user-profile-icon-png.png" alt="Writer-Image" class="writer-profile-image">
                                        <!-- <a href="" class="text-muted writer-profile-link d-block mt-1">View Profile</a> -->
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="writer-name">{{$writer->first_name}}
                                            {{$writer->last_name}}</a>
                                        <span class="writer-order-history d-block">{{$writer->completed_orders_count}}
                                            completed
                                            order</span>
                                        @if($writer->completed_orders_count >0)
                                        <div class="writer-rating">
                                            <span class="">100% completation rate</span>
                                            <span class="d-block">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-3">
                                        <?php
                                        $percentage = round(($writer->percentage / 100) * $order->total, 2);
                                        ?>
                                        <span class="writer-bid-price">${{$order->total + $percentage}}</span>
                                        <form action="{{route('select_write',$order->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="staff_id" value="{{$writer->id}}" />
                                            <input type="hidden" name="staff_payment_amount" value="{{$writer->percentage}}" />
                                            <input type="hidden" name="price" value="{{$order->total + $percentage}}" />
                                            <button type="submit" class="btn btn-sm btn-warning mr-2 px-3 mt-2">Hire
                                            </button>
                                            <button type="button" class="btn btn-sm btn-primary mr-2 px-3 mt-2">Chat
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <div class="card">
                    <h5 class="card-title order-summary-title">Order Summary</h5>
                    <div class="card-body">
                        <div class="mb-4">
                            <p>
                                <b>Service</b>
                                <br />
                                {{ $order->service->name }}
                                <br />
                                @if($order->sub_category)
                                <b>Sub Cetegory</b>
                                <br />
                                {{ $order->sub_category }}
                                <br />
                                @endif
                                <small class="form-text text-muted">{{ $order->work_level->name }} (Work
                                    level)</small>
                                <small class="form-text text-muted">
                                    {{ $order->guarantee }} (Guarantee)
                                </small>
                                <small class="form-text text-muted">
                                    {{ $order->subject }} (Subject)
                                </small>
                            </p>
                            <div>
                                <b>Deadline</b>
                                :
                                {{Carbon\Carbon::createFromFormat('Y-m-d H:i:s',
                                $order->dead_line)->format('Y-m-d H:i:s')}}

                            </div>
                            <div>
                                <b>Rate</b>
                                :
                                ${{$order->unit_price}}
                            </div>
                            @php
                            $type = $order->service->price_type_id;
                            @endphp
                            @if($type === PriceType::PerPage || $type === PriceType::PerSlide || $type ===
                            PriceType::PerWord)
                            <div>
                                <b>
                                    @if($type === PriceType::PerPage)
                                    Pages
                                    @elseif($type === PriceType::PerSlide)
                                    Slides
                                    @else
                                    Words
                                    @endif
                                </b>
                                :
                                {{ $order->quantity }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat window shows here -->
    <chat :user="{{auth()->user()}}" :writers="{{$writers}}" :add_message_url="'{{ route('message.save') }}'" :get_message_url="'{{ route('message.get') }}'" :change_message_status_url="'{{ route('message.status') }}'">
    </chat>
    <!-- chat End -->
</div>
@endsection
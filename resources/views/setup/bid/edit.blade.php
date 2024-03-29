@extends('setup.index')
@section('title', 'Edit Bid Percentage')
@section('setting_page')

@include('setup.partials.action_toolbar', [
'title' => 'Edit Writer Bid',
'hide_save_button' => TRUE,
'back_link' => ['title' => 'back to bids', 'url' => route("writer_bid_percentage")],
])
<form role="form" class="form-horizontal" enctype="multipart/form-data"
   action="{{route( 'edit_writer_bid', $user->id)}}" method="POST">
   {{ csrf_field() }}
   {{ method_field('PATCH') }}
   @if(session()->has('message'))
   <div class="alert alert-success">
      {{ session()->get('message') }}
   </div>
   @endif
   <div class="form-row">
      <div class="form-group col-md-6">
         <label>Name <span class="required">*</span></label>
         <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'name') }}" name="first_name"
            value="{{ $user->first_name }}">
      </div>
   </div>
   <div class="form-row">
      <div class="form-group col-md-7">
         <label>
            <span data-toggle="tooltip"
               title="Enter the percentage of base price of a service that should add up with the total of an order"><i
                  class="fas fa-question-circle"></i></span>
            Percentage of base price of a order<span class="required">*</span>
         </label>
         <div class="input-group mb-3">
            <input type="text" class="form-control {{ showErrorClass($errors, 'percentage_to_add') }}" name="percentage"
               value="{{ $user->percentage }}">
            <div class="input-group-append">
               <span class="input-group-text">%</span>
            </div>
         </div>
         <small class="form-text text-muted">Enter the percentage of base price of a order that should add up with the
            total of an order</small>
         <div class="invalid-feedback d-block">{{ showError($errors, 'percentage_to_add') }}</div>
      </div>
   </div>

   <input type="submit" name="submit" class="btn btn-success" value="Submit" />
</form>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      <div class="col-md-12">
         @yield('setting_page')
      </div>
   </div>
</div>
@endsection
@push('scripts')
@yield('innerPageJS')
@endpush
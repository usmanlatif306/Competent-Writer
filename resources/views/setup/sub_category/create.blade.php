@extends('setup.index')
@section('title', 'Service & Pricing')
@section('setting_page')
@include('setup.partials.action_toolbar', [
'title' => (isset($service->id)) ? 'Edit Sub Category' : 'Create New Sub Category',
'hide_save_button' => TRUE,
'back_link' => ['title' => 'back to sub categories', 'url' => route("sub_category_list")],
])
<form role="form" class="form-horizontal" enctype="multipart/form-data"
   action="{{ (isset($service->id)) ? route( 'sub_category_update', $service->id) : route('sub_category_store') }}"
   method="post" autocomplete="off">
   {{ csrf_field() }}
   @if(isset($service->id))
   {{ method_field('PATCH') }}
   @endif
   <div class="form-group">
      <label>Price Type<span class="required">*</span></label>
      <?php echo form_dropdown("price_type_id", $data['price_type_list'], old_set('price_type_id', NULL,$service), "class='form-control form-control-sm  selectPickerWithoutSearch'") ?>
      <div class="invalid-feedback d-block">{{ showError($errors,'price_type_id') }}</div>
   </div>
   <div class="form-group">
      <label>Name <span class="required">*</span></label>
      <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'name') }}" name="name"
         value="{{ old_set('name', NULL, $service) }}">
      <div class="invalid-feedback">{{ showError($errors, 'name') }}</div>
   </div>

   <div class="form-group"
      style="{{ (old_set('price_type_id', NULL, $service) == PriceType::PerPage) ? 'display:none;' : '' }}"
      id="regularPrice">
      <label>Price / Rate <span class="required">*</span></label>
      <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'price') }}" name="price"
         value="{{ old_set('price', NULL, $service) }}">
      <div class="invalid-feedback">{{ showError($errors, 'price') }}</div>
   </div>
   <div class="form-row"
      style="{{ (old_set('price_type_id', NULL, $service) == PriceType::PerPage) ? '' : 'display:none;' }}"
      id="spacing_types">
      <div class="form-group col-md-6">
         <label>Single Spacing Price <span class="required">*</span></label>
         <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'single_spacing_price') }}"
            name="single_spacing_price" value="{{ old_set('single_spacing_price', NULL, $service) }}">
         <div class="invalid-feedback">{{ showError($errors, 'single_spacing_price') }}</div>
      </div>
      <div class="form-group col-md-6">
         <label>Double Spacing Price <span class="required">*</span></label>
         <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'double_spacing_price') }}"
            name="double_spacing_price" value="{{ old_set('double_spacing_price', NULL, $service) }}">
         <div class="invalid-feedback">{{ showError($errors, 'double_spacing_price') }}</div>
      </div>
   </div>
   <div class="form-group"
      style="{{ (old_set('price_type_id', NULL, $service) == PriceType::Fixed) ? 'display:none;' : '' }}"
      id="minimumOrderQuantity">
      <label>Minimum Order Quantity <span class="required">*</span></label>
      <input type="text" class="form-control form-control-sm {{ showErrorClass($errors, 'minimum_order_quantity') }}"
         name="minimum_order_quantity" value="{{ old_set('minimum_order_quantity', NULL, $service) }}">
      <div class="invalid-feedback">{{ showError($errors, 'minimum_order_quantity') }}</div>
   </div>

   <div class="form-group">
      <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="inactive" name="inactive" value="1" {{
            old_set('inactive', NULL, $service) ? 'checked="checked"' : '' }}>
         <label class="custom-control-label" for="inactive">Inactive</label>
      </div>
   </div>
   <input type="submit" name="submit" class="btn btn-success" value="Submit" />
</form>
@endsection
@section('innerPageJS')
<script>
   $(function () {

      $('.selectPickerWithoutSearch').select2({
         theme: 'bootstrap4',
         minimumResultsForSearch: -1
      });

      $('.multiSelect').select2({
         theme: 'bootstrap4'
      });

      $('select[name="price_type_id"]').on('change', function () {

         if (this.value == "3") {
            $('#spacing_types').show();
            $("#regularPrice").hide();
         } else {
            $('#spacing_types').hide();
            $("#regularPrice").show();
         }

         if (this.value == "1") {
            $('#minimumOrderQuantity').hide();
         } else {
            $("#minimumOrderQuantity").show();
         }

      });

   });

</script>
@endsection
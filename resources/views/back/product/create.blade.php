@extends('back.layouts.partials.app')
@section('content-title', 'Role')
@section('content-subtitle', 'Data')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-left: 2px !important">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Add Product</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Add Product</li>
        </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('product.index') }}">Back</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add Product</h3>
        </div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mb-0" id="productform">
          @csrf    
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Title<span class="required">*</span></label>
                  <input type="text" name="title" id="@if ($errors->has('title')) inputError @endif" class="form-control @if ($errors->has('title')) is-invalid @endif" placeholder="Enter Title" value="{{old('title')}}">
                  @error('title')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Summary</label>
                  <textarea name="summary" class="form-control">{{old('summary')}}</textarea>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="description" class="form-control">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                  <label>Is Featured</label><br/>
                  <input type="checkbox" name="is_featured" value="1"  checked> Yes
                </div>
                {{-- {{$categories}} --}}
                <div class="form-group">
                <label for="cat_id">Category <span class="text-danger">*</span></label>
                <select name="cat_id" id="cat_id @if ($errors->has('cat_id')) inputError @endif" class="form-control @if ($errors->has('cat_id')) is-invalid @endif">
                <option value="">--Select any category--</option>
                @foreach($categories as $key=>$cat_data)
                <option value='{{$cat_data->id}}'>{{$cat_data->title}}</option>
                @endforeach
                </select>
                @error('cat_id')
          <span class="text-danger">{{$message}}</span>
          @enderror
                </div>
                <div class="form-group d-none" id="child_cat_div">
          <label for="child_cat_id">Sub Category</label>
          <select name="child_cat_id" id="child_cat_id" class="form-control">
              <option value="">--Select any category--</option>
              {{-- @foreach($parent_cats as $key=>$parent_cat)
                  <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
              @endforeach --}}
          </select>
        </div>
        <div class="form-group">
          <label for="price" class="col-form-label">Price<span class="text-danger">*</span></label>
          <input type="number" name="price" id="price @if ($errors->has('price')) inputError @endif" class="form-control @if ($errors->has('price')) is-invalid @endif"  placeholder="Enter price"  value="{{old('price')}}" class="form-control">
          @error('price')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="discount" class="col-form-label">Discount(%)</label>
          <input id="discount" type="number" name="discount" min="0" max="100" placeholder="Enter discount"  value="{{old('discount')}}" class="form-control">
          @error('discount')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        
        <div class="form-group">
          <label for="condition">Condition</label>
          <select name="condition" class="form-control">
              <option value="">--Select Condition--</option>
              <option value="default">Default</option>
              <option value="new">New</option>
              <option value="hot">Hot</option>
          </select>
        </div>

        <div class="form-group">
          <label for="stock">Quantity <span class="text-danger">*</span></label>
          <input id="quantity" type="number" name="stock" min="0" placeholder="Enter quantity"  value="{{old('stock')}}" class="form-control">
          @error('stock')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

                <div class="form-group">
                  <label>Photo<span class="required">*</span></label><br/>
                  <input type="file" name="photo" id="@if ($errors->has('photo')) inputError @endif" class="form-control @if ($errors->has('photo')) is-invalid @endif" >
                  @error('photo')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
                </div>
                <div class="form-group">
                  <label>Status</label><br/>
                  <select name="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>  
        </form>
      </div>  
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
@endsection
@push('scripts')
<script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>
@endpush
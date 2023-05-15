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
        <h1 class="m-0">Add Category</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Add Category</li>
        </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('category.index') }}">Back</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add Category</h3>
        </div>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="mb-0" id="catform">
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
                  <label>Description</label>
                  <textarea name="summary" class="form-control">{{old('summary')}}</textarea>
                </div>
                <div class="form-group">
                  <label>Is Parent</label><br/>
                  <input type="checkbox" name="is_parent" value="1"  checked> Yes
                </div>
                {{-- {{$parent_cats}} --}}
                <div class="form-group d-none" id='parent_cat_div'>
                  <label>Parent Category<span class="required">*</span></label><br/>
                  <select name="parent_id" class="form-control">
                    <option value="">Select any category</option>
                    @foreach($parent_cats as $key=>$parent_cat)
                     <option value='{{$parent_cat->id}}'>{{$parent_cat->title}}</option>
                    @endforeach
                  </select>
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
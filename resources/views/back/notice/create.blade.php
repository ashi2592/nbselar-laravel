@extends('layouts.partials.app')
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
        <h1 class="m-0">Add Notice</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Add Notice </li>
        </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('notice.index') }}">Back</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Add Notice</h3>
        </div>
        <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data" class="mb-0" id="noticeform">
          @csrf    
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Title<span class="required">*</span></label>
                  <input type="text" name="notice_title" id="@if ($errors->has('notice_title')) inputError @endif" class="form-control @if ($errors->has('notice_title')) is-invalid @endif" placeholder="Enter Title" value="{{old('notice_title')}}">
                  @error('notice_title')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="notice_description" class="form-control">{{old('notice_description')}}</textarea>
                </div>   
                <div class="form-group">
                  <label>Date<span class="required">*</span></label>
                  <input type="date" name="notice_date" id="@if ($errors->has('notice_date')) inputError @endif" class="form-control @if ($errors->has('notice_date')) is-invalid @endif" placeholder="Enter Date" value="{{old('notice_date')}}">
                  @error('notice_date')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>   
                <div class="form-group">
                  <label>Status</label><br/>
                  <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
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


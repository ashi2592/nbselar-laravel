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
        <h1 class="m-0">Update Company</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Update Company </li>
        </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="<?php echo url('');?>">Back</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
</div>
<!-- /.content-wrapper -->
<div class="row">
                        <div class="col-xl">
                           <div class="card mb-4">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                 <h5 class="mb-0">Update Company</h5>
                              </div>
                              <div class="card-body">
                                
                              <form action="{{ route('company.store',$company->id) }}" method="POST" enctype="multipart/form-data" class="mb-0" id="noticeform">
                              @csrf    
                                    <!-- row -->
                                    <div class="row">
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Title*</label>
                                             <input type="text" name="company_title" id="@if ($errors->has('company_title')) inputError @endif" class="form-control @if ($errors->has('company_title')) is-invalid @endif" placeholder="Enter Title" value="{{$company->company_title}}">
                  @error('company_title')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Description*</label>
                                             <textarea name="company_description" class="ckeditor form-control">{{$company->company_description}}</textarea>
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Photo*</label>
                                              <img src="{{$company->photo}}"style="height:50px; width:50px;" class="form-control">
                                                  <input type="file" class="form-control"  name="photo" class="form-control">
                                                  @error('photo')
                                                  <span class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Status*</label>
                                             <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                    </div>
                                    <!-- row / -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- edit / -->
@endsection


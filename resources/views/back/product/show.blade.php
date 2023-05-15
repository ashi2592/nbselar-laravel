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
        <h1 class="m-0">Display Role</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Display Role</li>
        </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Display Role</h3>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data" class="mb-0" id="roleform">
          @csrf    
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Role Name <span class="required">*</span></label>
                  <input type="text" value="{{ $roles->name }}" name="name" id="@if ($errors->has('name')) inputError @endif" class="form-control @if ($errors->has('name')) is-invalid @endif" placeholder="Role Name" readonly>
                  @error('name')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>  
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
@endsection
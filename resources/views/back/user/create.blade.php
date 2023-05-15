@extends('back.layouts.partials.app')
@section('content-title', 'Role')
@section('content-subtitle', 'Data')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- edit -->
<div class="row">
        <div class="col-sm-6">
        <h1 class="m-0">Add User</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
        <li class="breadcrumb-item active">Add User</li>
        </ol>
        </div>
      </div>
      <div class="row">
        <h1><a class="btn btn-success" href="{{ route('user.index') }}">Back</a></h1>
      </div>
<div class="row">
                        <div class="col-xl">
                           <div class="card mb-4">
                              <div class="card-header d-flex justify-content-between align-items-center">
                                 <h5 class="mb-0">Add User</h5>
                              </div>
                              <div class="card-body">
                                
                              <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="mb-0" id="userform">
                              @csrf    
                                    <!-- row -->
                                    <div class="row">
                                       <!-- re -->
                                       <div class="col-sm-12 col-md-4">
                                          <div class="mb-3">
                                             <label class="form-label">Name*</label>
                                             <input type="text" name="name" id="@if ($errors->has('name')) inputError @endif" class="form-control @if ($errors->has('name')) is-invalid @endif" placeholder="Name">
                                             @error('name')
                                             <span class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12 col-md-4">
                                          <div class="mb-3">
                                             <label class="form-label">E-mail*</label>
                                             <input type="text" name="email" id="@if ($errors->has('email')) inputError @endif" class="form-control @if ($errors->has('email')) is-invalid @endif" placeholder="Email">
                                              @error('email')
                                              <span class="error invalid-feedback">{{ $message }}</span>
                                              @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12 col-md-4">
                                          <div class="mb-3">
                                             <label class="form-label">Mobile Number*</label>
                                             <input type="text" name="mobnum" id="@if ($errors->has('mobnum')) inputError @endif" class="form-control @if ($errors->has('mobnum')) is-invalid @endif" placeholder="Mobile Number">
                                              @error('mobnum')
                                              <span class="error invalid-feedback">{{ $message }}</span>
                                              @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                    </div>
                                    <!-- row / -->
                                    <!-- row -->
                                    <div class="row">
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Profile Image*</label>
                                             <input type="file" name="photo" id="@if ($errors->has('photo')) inputError @endif" class="form-control @if ($errors->has('photo')) is-invalid @endif" >
                  @error('photo')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
                                          </div>
                                       </div>
                                       <!-- re  / -->
                                       <!-- re -->
                                       <div class="col-sm-12">
                                          <div class="mb-3">
                                             <label class="form-label">Password*</label>
                                             <input type="password" name="password" id="@if ($errors->has('password')) inputError @endif" class="form-control @if ($errors->has('password')) is-invalid @endif" placeholder="Password">
                  @error('password')
                  <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
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
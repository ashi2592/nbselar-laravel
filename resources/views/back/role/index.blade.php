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
        <h1 class="m-0">Manage Role</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Role</li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('role.create') }}"> Create Role</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Manage Role</h3>
        </div>
        <div class="card-body">
          @if(count($role)==0)
          <p class="no-record">No Record Found</p>
          @else
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl.No.</th>
                <th>Role Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $_SESSION['i'] = 0; ?>                        
            @foreach ($role as $roles)
              <?php $_SESSION['i']=$_SESSION['i']+1; ?>
              <tr>
                <?php $dash=''; ?>
                <td>{{$_SESSION['i']}}</td>
                <td>{{ $roles->name }}</td>
                <td>
                  @if($roles->status==1)
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-warning">Inactive</span>
                  @endif
                </td>
                <td>
                  <form action="{{ route('role.destroy',$roles->id) }}" method="Post">
                    <a  href="{{ route('role.show',$roles->id) }}">   
                      <i class="nav-icon fa fa-solid  fa-eye"></i>
                    </a>
                    &nbsp;
                    <a  href="{{ route('role.edit',$roles->id) }}"> 
                      <i class="nav-icon fa fa-edit"></i>
                    </a>
                    @csrf
                    @method('post')
                    <button type="submit" style="border:0px !important;">
                      <i class="nav-icon fa fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr> 
            @endforeach
            <?php unset($_SESSION['i']); ?> 
            </tbody>
            <tfoot>
              <tr>
                <th>Sl.No.</th>
                <th>Role Name</th>
                <td>Status</td>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
          @endif;
        </div>
      </div>  
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
@endsection
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
        <h1 class="m-0">Manage Notice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Notice</li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('notice.create') }}"> Create Notice</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Manage Notice</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>S.N.</th>
              <th>Date</th>
              <th>Title</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $_SESSION['i'] = 0; ?>                        
           @foreach($notice as $nt)
            <?php $_SESSION['i']=$_SESSION['i']+1; ?>
                <tr>
                    <td>{{$_SESSION['i']}}</td>
                    <td>{{$nt->notice_date}}</td>
                    <td>{{$nt->notice_title}}</td>
                    <td>{{strip_tags($nt->notice_description)}}</td>
                    <td>
                        @if($nt->status=='1')
                            <span class="badge badge-success">Active</span>
                        @else
                            <span class="badge badge-warning">In Active</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('notice.edit',$nt->id) }}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="nav-icon fa fa-edit"></i></a>
                        @csrf
                        @method('POST')
                        <form method="POST" action="{{ route('notice.destroy',$nt->id) }}"style="display:inline-block;">
                          @csrf
                          <input name="_method" type="hidden" value="POST">
                          <button type="submit" class="btn btn-danger btn-sm show_confirm" data-toggle="tooltip" title='Delete'>  <i class="nav-icon fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
           @endforeach
            <?php unset($_SESSION['i']); ?> 
            </tbody>
            <tfoot>
              <tr>
              <th>S.N.</th>
              <th>Date</th>
              <th>Title</th>
              <th>Description</th>
              <th>Status</th>
              <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>  
    </div>
  </section>
</div>
<!-- /.content-wrapper -->
@endsection

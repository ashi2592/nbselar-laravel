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
        <h1 class="m-0">Manage Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Category</li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('category.create') }}"> Create Category</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Manage Category</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sl.No.</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Is Parent</th>
                <th>Parent Category</th>
                <th>Photo</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $_SESSION['i'] = 0; ?>                        
            @foreach ($categories as $cat)
              <?php $_SESSION['i']=$_SESSION['i']+1; ?>
              <tr>
                <?php $dash=''; ?>
                <td>{{$_SESSION['i']}}</td>
                <td>{{ $cat->title }}</td>
                <td>{{ $cat->slug }}</td>
                <td>{{(($cat->is_parent==1)? 'Yes': 'No')}}</td>
                <td>{{$cat->parent_info->title ?? ''}}</td>
                <td>
                @if($cat->photo)
                <img src="{{asset('/Images/categories/'.$cat->photo) }}" class="img-fluid" style="max-width:80px" alt="{{$cat->photo}}">
                @else
                <img src="{{asset('img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                @endif
                </td>      
                <td>
                  @if($cat->status=='active')
                  <span class="badge badge-success">Active</span>
                  @else
                  <span class="badge badge-warning">Inactive</span>
                  @endif
                </td>
                <td>
                  
                    &nbsp;
                    <a href="{{ route('category.edit',$cat->id) }}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="nav-icon fa fa-edit"></i></a>
                      
                    </a>
                    @csrf
                        @method('POST')
                    <form method="POST" action="{{ route('category.destroy',$cat->id) }}"style="display:inline-block;">
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
              <th>Sl.No.</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Is Parent</th>
              <th>Parent Category</th>
              <th>Photo</th>
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

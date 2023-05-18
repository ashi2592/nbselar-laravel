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
        <h1 class="m-0">Manage Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('');?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Product</li>
          </ol>
        </div>
      </div>
      <div class="row mb-2">
        <h1><a class="btn btn-success" href="{{ route('product.create') }}"> Create Product</a></h1>
      </div>
    </div>
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Manage Product</h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>S.N.</th>
              <th>Title</th>
              <th>Category</th>
              <th>Is Featured</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Condition</th>
              <th>Stock</th>
              <th>Photo</th>
              <th>Status</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php $_SESSION['i'] = 0; ?>                        
            @foreach($products as $product)
            <?php $_SESSION['i']=$_SESSION['i']+1; ?>
              @php
              $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
              @endphp
                <tr>
                    <td>{{$_SESSION['i']}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->cat_info['title']}}
                      <sub>
                          {{$product->sub_cat_info->title ?? ''}}
                      </sub>
                    </td>
                    <td>{{(($product->is_featured==1)? 'Yes': 'No')}}</td>
                    <td>Rs. {{$product->price}} /-</td>
                    <td>  {{$product->discount}}% OFF</td>
                    <td>{{$product->condition}}</td>
          
                    <td>
                      @if($product->stock>0)
                      <span class="badge badge-primary">{{$product->stock}}</span>
                      @else
                      <span class="badge badge-danger">{{$product->stock}}</span>
                      @endif
                    </td>
                    <td>
                    @if($product->photo)
                <img src="{{asset(env('AWS_CLOUD_FRONT_ENDPOINT').$product->photo) }}" class="img-fluid" style="max-width:80px" alt="{{$product->photo}}">
                @else
                <img src="{{asset('img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                @endif
                    </td>
                    <td>
                        @if($product->status=='active')
                            <span class="badge badge-success">{{$product->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$product->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="nav-icon fa fa-edit"></i></a>
                        @csrf
                        @method('POST')
                        <form method="POST" action="{{ route('product.destroy',$product->id) }}"style="display:inline-block;">
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
              <th>Title</th>
              <th>Category</th>
              <th>Is Featured</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Condition</th>
              <th>Stock</th>
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

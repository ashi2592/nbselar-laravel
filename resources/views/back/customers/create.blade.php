@extends('back.layouts.partials.app')
@section('content-title', 'Customer')
@section('content-subtitle', 'List')
@section('content')
    <div class="container">
        <h1>Add Customer</h1>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection


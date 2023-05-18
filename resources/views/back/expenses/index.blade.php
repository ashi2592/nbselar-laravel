@extends('back.layouts.partials.app')
@section('content-title', 'expense')
@section('content-subtitle', 'List')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Expense List</div>

                    <div class="card-body">
                        <a href="{{ route('expense.create') }}" class="btn btn-primary mb-3">Add Expense</a>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->description }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>
                                            <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('expense.destroy', $expense->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this expense?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Employee</h1>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1>Welcome to the Employee Management System</h1>
        <p class="lead">Click the button below to continue to the Employee List.</p>

        <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg">Continue</a>
    </div>
@endsection

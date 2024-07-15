@extends('layouts.app')

@section('content')
<div class="container">
<div class="card" style="background-color: #F1F8E8;">
    <div class="row">
        <div class="col-lg-12">
            <h2>Show Student</h2>
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $student->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                {{ $student->course }}
            </div>
        </div>
    </div>
</div>
@endsection

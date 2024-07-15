@extends('layouts.app')

@section('content')
<div class="container"><H2>Welcome to the Home Page!</H2>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>

                    <a class="btn btn-success mb-3" href="{{ route('students.create') }}"> Create New Student</a>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered">
                    <div class="card" style="background-color: #55AD9B;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->course }}</td>
                                    <td>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                                            <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $students->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="card-body container">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Employees</th>
            <th>Projects</th>
            <th>Actions</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->employees }}</td>
            <td>{{ $project->name }}</td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-success">Create</a>
    </div>
</div>
@endsection

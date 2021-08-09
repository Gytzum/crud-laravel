@extends('layouts.app')
@section('content')
<div class="card-body container">
    <table class="table">
        <tr>
            <th>#</th>
            <th>Employees</th>
            <th>Projects</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->id }}</td>
            <td>
                @foreach($project->employees as $employee)
                  {{$employee->name.', '}}
                @endforeach
            </td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->description }}</td>
            <td><form action={{ route('project.destroy', $project->id) }} method="POST">
                <a class="btn btn-success" href={{ route('project.edit', $project->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form></td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('project.create') }}" class="btn btn-success">Create</a>
    </div>
</div>
@endsection

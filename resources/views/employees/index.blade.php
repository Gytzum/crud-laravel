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
        @foreach ($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->name.' ' . $employee->surname}}</td>
            <td></td>
            <td><form action={{ route('employee.destroy', $employee->id) }} method="POST">
                <a class="btn btn-success" href={{ route('employee.edit', $employee->id) }}>Edit</a>
                @csrf @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"/>
            </form></td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('employee.create') }}" class="btn btn-success">Create</a>
    </div>
</div>
@endsection

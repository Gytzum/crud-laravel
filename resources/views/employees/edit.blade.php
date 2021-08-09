@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Employee Information: </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" class="form-control" value="{{ $employee->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Surname: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $employee->surname }}">
                        </div>
                        <div class="form-group">
                            <label>Assign project: </label>
                            <select name="project_id" id="" class="form-control">
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}" @if($project->id == $employee->project_id) selected="selected" @endif>{{ $project->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

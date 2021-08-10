@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-light bg-dark">Project Details: </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('project.show', $project->id) }}">
                            <div class="form-group">
                                <label for="">Name: </label>
                                <input type="text" class="form-control" readonly="readonly" value="{{ $project->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Description: </label>
                                <textarea style="height: 300px " readonly="readonly" type="text"
                                    class="form-control"> {{ strip_tags($project->description) }}</textarea>
                            </div>
                            <?php $assignedEmployees = ''; ?>
                            <div class="form-group">
                                <label for="">Assigned employees: </label>
                                @foreach ($project->employees as $employee)
                                    <?php $assignedEmployees .= "$employee->name  $employee->surname, "; ?>
                                @endforeach
                                <input type="text" class="form-control" readonly="readonly" value="{{ rtrim($assignedEmployees, ', ') }}">
                            </div>
                            <a class="btn btn-dark" href="{{ URL::previous() }}">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

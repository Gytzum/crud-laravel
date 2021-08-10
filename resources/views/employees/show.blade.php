@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-light bg-dark">Employee Information: </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employee.show', $employee->id) }}">
                            <div class="form-group">
                                <label for="">Name: </label>
                                <input type="text" class="form-control" readonly="readonly" value="{{ $employee->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Surname: </label>
                                <input type="text" class="form-control" readonly="readonly"
                                    value="{{ $employee->surname }}">
                            </div>
                            <div class="form-group">
                                <label for="">Phone number: </label>
                                <input type="number" class="form-control" readonly="readonly"
                                    value="{{ $employee->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail address: </label>
                                <input type="email" class="form-control" readonly="readonly"
                                    value="{{ $employee->email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Project: </label>
                                <?php $name = 'There is no project assigned!!'; ?>
                                @foreach ($projects as $project)
                                    @if ($project->id === $employee->project_id)
                                        <?php $name = $project->name; ?>
                                    @endif
                                @endforeach
                                <input type="text" class="form-control" readonly="readonly" value="{{ $name }}">
                            </div>
                            <a class="btn btn-dark" href="{{ URL::previous() }}">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

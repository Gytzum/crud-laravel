@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
        <p style="color: red">{{$errors->first()}}</p>
    @endif
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header text-light bg-dark">Create Employee:</div>
               <div class="card-body">
                   <form action="{{ route('employee.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" required name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Surname: </label>
                            <input type="text" required name="surname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone number: </label>
                            <input type="number"  name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail address: </label>
                            <input type="email" name="email" class="form-control">
                        </div>
                       <div class="form-group">
                           <label>Project: </label>
                           <select name="project_id" id="" class="form-control">
                                <option value="" selected disabled>Choose project</option>
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-dark">Submit</button>
                       <a class="btn btn-dark" href="{{ URL::previous() }}">Back</a>

                   </form>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
 

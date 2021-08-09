@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Create Project:</div>
               <div class="card-body">
                   <form action="{{ route('project.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Name: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description: </label>
                            <textarea style= "height: 300px"type="text" name="description" class="form-control"> </textarea>
                        </div>

                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
 

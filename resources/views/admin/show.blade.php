@extends('admin.layout')
  
  
@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Show Job</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-info float-right" href="{{ route('admin.index') }}"> 
                    View All Jobs
                </a>
            </div>
            <div class="card-body">
               <b class="text-muted">Title:</b>
               <p>{{$ajob->title}}</p>
               <b class="text-muted">Company:</b>
               <p>{{$ajob->company}}</p>
               <b class="text-muted">Location:</b>
               <p>{{$ajob->location}}</p>
               <b class="text-muted">Salary:</b>
               <p>{{$ajob->salary}}</p>
               <b class="text-muted">Type:</b>
               <p>{{$ajob->type}}</p>
               <b class="text-muted">Description:</b>
               <p>{{$ajob->description}}</p>
            </div>
        </div>
    </div>
@endsection
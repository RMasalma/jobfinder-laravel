@extends('admin.layout')
  
  
@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Edit job</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-info float-right" href="{{ route('admin.index') }}"> 
                    View All Jobs
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.update',$ajob->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="name" name="title" value="{{ $ajob->title }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Company</label>
                        <input type="text" class="form-control" id="name" name="company" value="{{ $ajob->company }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Location</label>
                        <input type="text" class="form-control" id="name" name="location" value="{{ $ajob->location }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Salary</label>
                        <input type="text" class="form-control" id="name" name="salary" value="{{ $ajob->salary }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Typa</label>
                        <input type="text" class="form-control" id="name" name="type" value="{{ $ajob->type }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ $ajob->description }}</textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-outline-success mt-3">Save job</button>
                </form>
                
            </div>
        </div>
    </div>
    
  
  
@endsection
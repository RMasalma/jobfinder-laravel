@extends('admin.layout')
  
  
@section('content')
    <div class="container">
        <h2 class="text-center mt-5 mb-3">Jobs Manager</h2>
        <div class="card">
            <div class="card-header">
                <a class="btn btn-outline-primary" href="{{ route('admin.create') }}"> 
                    Create New Job
                </a>
            </div>
            <div class="card-body">
                 
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <b>{{ $message }}</b>
                    </div>
                @endif
  
                
  
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Company</th>
                        <th>location</th>
                        <th>Salary</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th width="240px">Action</th>
                    </tr>
                    @foreach ($ajobs as $ajob)
                    <tr>
                        <td>{{ $ajob->title }}</td>
                        <td>{{ $ajob->company }}</td>
                        <td>{{ $ajob->location }}</td>
                        <td>{{ $ajob->salary }}</td>
                        <td>{{ $ajob->type }}</td>
                        <td>{{ $ajob->description }}</td>
                        <td>
                            <form action="{{ route('admin.destroy',$ajob->id) }}" method="POST">
                                <a
                                    class="btn btn-outline-info"
                                    href="{{ route('admin.show',$ajob->id) }}">
                                    Show
                                </a>
                                <a
                                    class="btn btn-outline-success"
                                    href="{{ route('admin.edit',$ajob->id) }}">
                                    Edit
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
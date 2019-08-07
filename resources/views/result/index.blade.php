@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">

            <h1 class="display-3">Results List</h1>
            <a href="{{ route('result.create') }}" class="btn btn-primary float-right">Create</a>
            <table class="table table-striped">
                <tr align="center">
                    <th>No.</th><th>Name</th><th>Year</th><th>Semester</th><th>CGPA</th>
                </tr>
                @foreach ($result as $rst)
                <tr align="center">
                    <td>{{$i++}}</td>
                    <td>{{$rst->name}}</td>
                    <td>{{$rst->year}}</td>
                    <td>{{$rst->semester}}</td>
                    <td>{{$rst->cgpa }}</td>
                </tr>  
                @endforeach
            </table>    
        </div>
    </div>
    
@endsection
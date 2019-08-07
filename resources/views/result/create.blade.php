@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            
            <h1 class="display-3">Create User</h1>
            <form method="POST" action="{{ route('result.store') }}">
            @csrf
                <div class="row">
                    <div class="col-sn-12">
                        <div class="card">
                            <div class="card-header bg-default">
                                <h2>New User</h2>
                            </div>
                            <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert-danger">
                                        <ul>@foreach($errors->all() as $error)
                                            <li>{{ $error  }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                <dl class="row">
                                    <dt class="col-sn-3">Name</dt>
                                    <dd class="col-sn-9"><input type="text" name="name" size="50"></dd>
                                    
                                    <dt class="col-sn-3">Year</dt>
                                    <dd class="col-sn-9"><input type="integer" name="year" size="5"></dd>

                                    <dt class="col-sn-3">Semester</dt>
                                    <dd class="col-sn-9"><input type="integer" name="semester" size="5"></dd>
                                    
                                    <dt class="col-sn-3">CGPA</dt>
                                    <dd class="col-sn-9"><input type="decimal" name="CGPA" size="5"></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sn-12 text-center">
                        <button type="submit" class="btn btn-primary">Update changes</button>
                        <a class="btn btn-warning" href="{{route('result.index')}}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection

@extends('layout.layout')
   
@section('content')
<div class="backBtn">
    <a class="arrow" href="{{ route('students.index') }}"><i class="fa-solid fa-circle-arrow-left"></i></a>
</div>
    <div class="containerHandler">
        <div class="row mt-3">
            <div class="col-lg-12 margin-tb">
                <div class="addTitle">
                <h2>EDIT STUDENT</h2>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissable" role="alert">
        <button type="btn" class="close" data-dismiss="alert">x</button>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
        </div>
        @endif

        <form action="{{ route('students.update',$student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students LRN:</strong>
                    <input type="text" name="lrn" class="form-control" value="{{ $student->lrn }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Firstname:</strong>
                    <input type="text" name="firstname" class="form-control" value="{{ $student->firstname }}">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Middlename:</strong>
                    <input type="text" name="middlename" class="form-control" value="{{ $student->middlename }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Lastname:</strong>
                    <input type="text" name="lastname" class="form-control" value="{{ $student->lastname }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Age:</strong>
                    <input type="text" name="age" class="form-control" value="{{ $student->age }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students Year Level:</strong>
                    <input type="text" name="year_level" class="form-control" value="{{ $student->year_level }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Students section:</strong>
                    <input type="text" name="section" class="form-control" value="{{ $student->section }}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Update: {{ $student->updated_at }}</strong>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="createBtn">UPDATE</button>
            </div>
        </div>
</div>
   
@endsection

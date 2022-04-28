@extends('layout.layout')

 @section('content')
    <div class="containerHolder">
        <div class="bannerHolder">
            <div class="banner">
                <p>STUDENTS CRUD APPLICATION</p>
            </div>
        </div>
        <div class="errorHolder">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="btn" class="close" data-dismiss="alert">x</button>
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>
        <div class="tableHolder">
            <!-- @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissable" role="alert">
                    <button type="btn" class="close" data-dismiss="alert">x</button>
                        <p>{{ $message }}</p>
                </div>
            @endif -->

            <table>
                    <tr class="tTitle">
                        <th>LRN</th>
                        <th>FIRSTNAME</th>
                        <th>MIDDLENAME</th>
                        <th>LASTNAME</th>
                        <th>AGE</th>
                        <th>YEAR LEVEL</th>
                        <th>SECTION</th>
                        <th width="280px">ACTIONS</th>
                    </tr>
                    @foreach($data as $key => $value)
                    <tr>
                        <td>{{$value->lrn}}</td>
                        <td>{{$value->firstname}}</td>
                        <td>{{$value->middlename}}</td>
                        <td>{{$value->lastname}}</td>
                        <td>{{$value->age}}</td>
                        <td>{{$value->year_level}}</td>
                        <td>{{$value->section}}</td>
                        <td>
                        <form action="{{ route('students.destroy',$value->id) }}" method="POST">   
                                <a class="btn btn-primary" href="{{ route('students.edit',$value->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>   
                                @csrf
                                @method('DELETE')      
                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
            
        </div>
        <div class="addnewBtn">
            <a href="{{ route('students.create') }}">Add Student</a><i class="fa-solid fa-circle-plus"></i>
        </div>
    </div>
 
 @endsection

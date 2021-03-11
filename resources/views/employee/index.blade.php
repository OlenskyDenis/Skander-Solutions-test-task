@extends('layouts.admin_layout')

@section('title', 'Employee')

@section('custom-css')

@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All employees</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">Id</th>
                                <th style="width: 19%">Employee Name</th>
                                <th style="width: 20%">Employee Surname</th>
                                <th style="width: 20%">Employee Email</th>
                                <th style="width: 20%">Employee Phone</th>
                                <th style="width: 20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->surname}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td> {{$employee->phone}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="{{route('employee.show', $employee->id)}}">
                                            <i class="fas fa-folder"></i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{route('employee.edit', $employee->id)}}">
                                            <i class="fas fa-pencil-alt"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            {{$employees->links()}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <style>
        .w-5{
            display:none;
        }
        nav div:first-child{
            display: none;
        }
    </style>
@endsection

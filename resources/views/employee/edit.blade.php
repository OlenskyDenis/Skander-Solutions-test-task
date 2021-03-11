@extends('layouts.admin_layout')

@section('title', 'Edit employee')

@section('custom-css')

@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Employee : {{$employee->name}}</h1>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>

                <form action="{{ route('employee.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" value="{{$employee->name}}" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Surname</label>
                            <input type="text" value="{{$employee->surname}}" name="surname" class="form-control" id="exampleInputSurname1" placeholder="Surname">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLogo1">Email</label>
                            <input type="email" value="{{$employee->email}}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputWebsite1">Phone</label>
                            <input type="text" value="{{$employee->phone}}" name="phone" class="form-control" id="exampleInputPhone1" placeholder="Phone">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')

@endsection

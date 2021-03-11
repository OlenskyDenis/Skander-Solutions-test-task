@extends('layouts.admin_layout')

@section('title', 'View company')

@section('custom-css')

@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Company : {{$company->name}}</h1>
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

                <form action="{{ route('company.update', $company->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName1">Name :</label>
                            <td>{{$company->name}}</td>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email :</label>
                            <td>{{$company->email}}</td>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLogo1">Logo :</label>
                            <td>{{$company->logo}}</td>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputWebsite1">Website :</label>
                            <td> {{$company->website}}</td>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')

@endsection

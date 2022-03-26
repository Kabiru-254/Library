@extends('layouts.app')

@section('content')

<style>

table tr td button{
    border: 1px solid #f9004d;
    padding: 5px;
    width: 30%;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 500;
    cursor: pointer;
   
    background-color: blueviolet;
    color: white;
}

table tr td button:hover{
    background-color: transparent;
    color: black;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are in Admin mode Dashboard!
                </div>
            </div>
        </div>
    </div>
</div>

<br>
    <br>

    <table class="table table-hover m-5">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $Users)
            <tr>
                <td>{{$Users -> name}}</td>
                <td>{{$Users -> email}}</td>
                <td><a class="btn btn-danger"href="{{route('destroy', $Users->id)}}">Delete User</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>



@endsection
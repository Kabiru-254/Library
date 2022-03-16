@extends('layouts.app')

@section('content')

<style>

button{
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

button:hover{
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

                    Welcome to the Amref Library Dashboard!
                    <br>
                    Here you can view all the publications we have!
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
            <th scope="col">Type</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($files as $Files)
            <tr>
                <td>{{$Files -> name}}</td>
                <td>{{$Files -> type}}</td>
                <td><button>Download</button></td>
            </tr>

        @endforeach
        </tbody>
    </table>
</div>


@endsection
@extends('Shared.browse')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
   
    <link href="{{asset('/css/publications.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
</head>

<div class="top">
    <div class="text">
        <h3><i class="fa-solid fa-book"></i>Books</h3>
    </div>
    <div class="order">
        <h4>Arranged by Name</h4>
    </div>
    <div class="account">
        <a href=""><i class="fa-solid fa-user"></i> My Profile</a> <br>
        <a href=""><i class="fa-solid fa-bookmark"></i> Library</a>
    </div>
</div>






@endsection
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
<br>
    <div class="search">
            <div class="with">
                <form action="{{route('SearchJournal')}}" method="post">
                    @csrf
                    <input type="text" name="search" id="search" placeholder="Search... (You can type the part you remember)" required>
                    <button type="submit" class="btn">Search for Journal</button>
                </form>
            
            </div>
            
    </div>

    <div class="text-center mt-5">
        <h3><i class="fa-solid fa-book-skull"></i>Journals</h3>
    </div>
   


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
        @foreach ($journals as $Journal)
            <tr>
                <td>{{$Journal -> name}}</td>
                <td>{{$Journal -> type}}</td>
                <td><button>Download</button></td>
            </tr>

        @endforeach
        </tbody>
    </table>





@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="{{asset('/css/search.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
        <div class="logo">
            <a href="#"><i class="fa-solid fa-book"></i>Amref Library</a>
        </div>

     

        <nav class="navbar">
            <ul>
                <li><a href="{{route('articles')}}"><i class="fa-solid fa-newspaper"></i>Articles</a></li>
                <li><a href="{{route('books')}}"><i class="fa-solid fa-book"></i>Books</a></li>
                <li><a href="{{route('journals')}}"><i class="fa-solid fa-book-skull"></i>Journals</a></li>
              
            
            </ul>
        </nav>
    </header>

<div class="container">
    
    <div class="main">

        <div class="searchbox">
            
            <h4>Search for books, articles, Journals and more!</h4> <br> 

            <form action="" method="get">
                <input type="text" name="search" id="" placeholder="Search" required> <br>
                <br>
                <div class="text-center">
                    <button type="submit">Search</button>
                </div>
            </form>
            
        </div>

    </div>

    <div class="results">

        <table class="m-5">
            <th>Title</th> <br>
            <th>Type</th> <br>
            <th>Action</th> <br>
            @foreach ($files as $Files)
            <tr>
                <td>{{$Files -> name}}</td>
                <td>{{$Files -> type}}</td>
            
                    
                <td><button>Download</button></td>  
            
            </tr>
            @endforeach
        
        
        </table>
        
    </div>

</div>




    
</body>
</html>




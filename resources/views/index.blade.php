<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="{{asset('/css/index.css') }}" rel="stylesheet" type="text/css">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#"><i class="fa-solid fa-book"></i>Amref Library</a>
        </div>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>
                <li><a href="{{route('journals')}}"><i class="fa-solid fa-book-skull"></i>View All Publications</a></li>
                <li><a href="{{route('services')}}"><i class="fa-solid fa-bell-concierge"></i>Services</a></li>
                <li><a href="{{route('services')}}"><i class="fa-solid fa-circle-question"></i>Help</a></li>
              <!--  <li><a href="{{route('test')}}"><i class="fa-solid fa-circle-question"></i>Database</a></li> -->
                
                <div class="dropdown">
                    <li class="dropbtn"><i class="fa-solid fa-user-check"></i>My Account</li>
                    <div class="dropdown-content">
                        <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>  Login</a>
                        <a  href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    
    <div class="main">
        <div class="searchbox">
            
            <h4>Search for books, articles, Journals and more!</h4> <br> 
            <div class="card">
                <input type="text" name="search" id="" placeholder="Search" required> <br>
                <div class="btn">
                    
                    <a href="{{route('search')}}">Search</a>
                </div>
               
            </div>
            
        </div>
    </div>

    <div class="browse">
        <div class="container">
            <div onclick="openPage1()" id="card" class="kadi">
                <div class="img">
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                </div>
                <div class="text">
                    <h4>Browse Books</h4>
                    
                    <p>A collection of all books here!</p>
                </div>
            </div>
            <div onclick="openPage2()" id="card"  class="kadi">
                <div class="img">
                    <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                </div>
                <div class="text">
                    <h4>Browse Journals</h4>
                    <p>Find all academic Journals here!</p>
                </div>
            </div>
            <div onclick="openPage3()" id="card"  class="kadi">
                <div class="img">
                <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                </div>
                <div class="text">
                    <h4>Browse Articles</h4>
                    <p>A collection of all latest articles here!</p>
                </div>
            </div>
        
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: gray;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-light" href="#">Amref Library</a>
  </div>
  <!-- Copyright -->
</footer>

    
    <script>
         let menu = document.querySelector('#menu-bar');
         let navbar = document.querySelector('.navbar');
         let card = document.querySelector('.kadi');

         menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');
            }
       

        function openPage1() {
            window.open(" {{route('books')}}" , "_self");
        }
        function openPage2() {
            window.open(" {{route('journals')}}" , "_self");
        }
        function openPage3() {
            window.open(" {{route('articles')}}" , "_self");
        }
        

    </script>
</body>

</html>
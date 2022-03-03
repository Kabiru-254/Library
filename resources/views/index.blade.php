<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="{{asset('/css/index.css') }}" rel="stylesheet" type="text/css">
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
                <li><a href="{{route('publications')}}"><i class="fa-solid fa-book-skull"></i>Publications</a></li>
                <li><a href="{{route('services')}}"><i class="fa-solid fa-bell-concierge"></i>Services</a></li>
                <li><a href="{{route('services')}}"><i class="fa-solid fa-circle-question"></i>Help</a></li>
                
                <div class="dropdown">
                    <li class="dropbtn"><i class="fa-solid fa-user-check"></i>My Account</li>
                    <div class="dropdown-content">
                        <a id="LoginBtn" href="#"><i class="fa fa-sign-in"></i>  Login</a>
                        <a id="SignupBtn" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
    
    <div class="main">
        <div class="searchbox">
            
            <h3>Search for books, articles, publications and more!</h3> <br> 
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
                    <h4>Browse Publications</h4>
                    <p>Find all academic publications here!</p>
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
            <div onclick="openPage4()" id="card"  class="kadi">
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
                    <h4>Explore our services</h4>
                    <p>Find all the help you require here!</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Modals -->
        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
            <!-- Modal content -->
        <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Login to the Library</h2>
        </div>
        <br>
        <div class="modal-body">
            <form action="">
                <input type="email" name="email" id="email" placeholder="Enter your email address"> 
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <button type="button">Login</button>
            </form>
        </div>
        
        </div>


     <!-- Modals End -->

     
                        <!-- Register Modal -->
            <div id="regModal" class="modalreg">

                <!-- Modal content -->
                    <!-- Modal content -->
                <div class="modal-content-reg">
                <div class="modal-header-reg">
                    <span class="exit">&times;</span>
                    <h2>Signup</h2>
                </div>
                <br>
                <div class="modal-body-reg">
                    <form action="">
                        <input type="text" name="username" id="username" placeholder="Enter your Username"> 
                        <input type="email" name="email" id="email" placeholder="Enter your email address"> 
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <input type="password" name="password" id="password" placeholder="Confirm your password">
                        <button type="button">Register</button>
                    </form>
                </div>

                </div>
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
            window.open(" {{route('publications')}}" , "_self");
        }
        function openPage3() {
            window.open(" {{route('articles')}}" , "_self");
        }
        function openPage4() {
            window.open(" {{route('services')}}" , "_self");
        }

                // Get the modal
            var modal = document.getElementById("myModal");
            var modalreg = document.getElementById('regModal');

            // Get the button that opens the modal
            var btn = document.getElementById("LoginBtn");
            var btnreg = document.getElementById("SignupBtn");
            

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            var exyt = document.getElementsByClassName("exit")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }
            btnreg.onclick = function() {
                modalreg.style.display = 'block';
            }
           
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }
            exyt.onclick = function() {
                document.getElementById('regModal').style.display = "none";
            }
          
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
            window.onclick = function(event) {
            if (event.target == modalreg) {
                modalreg.style.display = "none";
            }
            }

    </script>
</body>
</html>
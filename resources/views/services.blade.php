<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services & Help</title>
    <link href="{{asset('/css/services.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="top">
        <div class="text">
            <h3><i class="fas fa-question-circle"></i> Services & Help</h3>
        </div>
        
        
    </div>
    

    <div class="main">
        <h2><i class="fa fa-wrench" aria-hidden="true"></i> Services</h2>
        <ul id="myUL">
            <li>
                <span class="caret">Copyright and Digitization</span>
                <ul class="nested">
                    <li>We offer investigation and permissions services for collections to be digitized as well as help in 
                        determining rights and securing protection for intellectual property. Interpreting fair use guidelines,
                         advising authors on issues surrounding ownership, and negotiating terms and fees are key areas of 
                         concern.</li>
                </ul>
            </li>
            <li>
                <span class="caret">Library Liaisons</span>
                <ul class="nested">
                    <li>Liaisons are your go-to librarians, connecting you to library services and collections.
                         They are subject specialists who provide support for faculty and student research, 
                         instruction, and scholarly communication, who build rich library collections or can refer
                          you to other library experts. </li>
                </ul>
            </li>
            <li>
                <span class="caret">Privacy Services</span>
                <ul class="nested">
                    <li>As expressed in its mission, Amref University aims to “discover, preserve, and disseminate knowledge” and
                         “promote a culture of broad inquiry throughout and beyond the Amref community.” 
                         These aims can only be achieved by safeguarding the intellectual freedom and privacy of Amref's students,
                          faculty, and staff—all of whom need space for private exploration and experimentation in pursuing scholarly and creative endeavors. </li>
                </ul>
            </li>
        </ul>
    </div>

<div class="container">
    <h2><i class="fa-solid fa-address-book"></i> Contact us!</h2>
    <div class="help">
       
       <div class="meet">
           <h3>Meet a Librarian</h3>
           <br>
           <button>Make Appointment</button>
       </div>
       <div class="email">
           <h3>Email Us!</h3>
           <small>We will get back to you within 12 hours!</small>
           <form action="">
               <input type="email" placeholder="Enter your email address"> <br>
               <input id="question" type="text" placeholder="Type your question" ><br>
               <button type="submit">Submit Question</button>
           </form>
       </div>
      
    
   </div>
</div>
   

<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
    toggler[i].addEventListener("click", function() {
        this.parentElement.querySelector(".nested").classList.toggle("active");
        this.classList.toggle("caret-down");
    });
    }
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="{{asset('/css/search.css') }}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/fa0463f5e9.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    
    <div class="main">

        <form action="">
            <h2>Search publication/article/book</h2>
            <br>
            <input type="text" name="title" id="" placeholder="Enter title of publication/article/book">
            <br>
            <div class="btn">
            <button type="submit">Submit</button>
            </div>
            <br>
            
        </form>

    </div>
    <div class="results">

    <table>
        <th>Title</th> <br>
        <th>Type</th> <br>
        <th>Action</th> <br>

        <tr>
            <td>Kinuthia Chronicles</td>
            <td>Book</td>
            <td><div class="bts">
                <button>Read Online</button>
                <button>Download</button>
            </div></td>
        </tr>
        <tr>
            <td>Kinuthia Chronicles</td>
            <td>Book</td>
            <td><div class="bts">
                <button>Read Online</button>
                <button>Download</button>
            </div></td>
        </tr>
        <tr>
            <td>Kinuthia Chronicles</td>
            <td>Book</td>
            <td><div class="bts">
                <button>Read Online</button>
                <button>Download</button>
            </div></td>
        </tr>
       
    </table>
        
    </div>

</div>



    
</body>
</html>
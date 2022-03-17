@extends('layouts.app')

@section('content')


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Laravel File Upload</title>
    <style>
       .btn{
           border: 1px solid red;
       }
       .publications{
        border: 1px solid red;
       }
       
      
      
    </style>
</head>


<body>

<div class="btn">

<button type="button" onclick="toggle()" id="viewUpload" class="btn btn-success">View Uploads</button>
<button type="button" onclick="toggle()" id="uploadFiles" class="btn btn-success">Upload Files</button>
            
    
</div>



    <div class="row">
        <div class="container mt-5 col-8">

            <form style="padding: 20px;" class="border border-primary" action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
            <h3 class="text-center mb-5">Upload File to Amref Library Database</h3>
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="custom-file">
                    <input type="file" name="file" id="chooseFile">
                    
                <br>
                <br>
                    <label for="publicationType" class="label mr-15">Type of Publication</label>
                    <select id="publication" name="publication" class="input">
                        @foreach ($publicationTypes as $publicationType)
                        <option value="{{ $publicationType->type }}" >{{$publicationType->type}}</option>
                        @endforeach

                    </select>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Upload Files
                </button>
                
            </form>
        </div>
        
    </div>

    <div class="publications" style="display: none;">
        <table class="m-5">
            <th>Title</th> <br>
            <th>Type</th> <br>
            <th>Action</th> <br>
            @foreach ($files as $Files)
            <tr>
                <td>{{$Files -> name}}</td>
                <td>{{$Files -> type}}</td>
            
                    
                <td><button>Delete Publication</button></td>
              
            
            </tr>
            @endforeach
        
        
        </table>
    </div>


   <script type="text/javascript">
       var viewUpload = document.getElementById('viewUpload');
       var publications = document.getElementsByClassName('publications');
       var uploadFiles = document.getElementsById('uploadFiles');
       var upload = document.getElementsByClassName('row');

       function toggle() {
           viewUpload.onclick() {
               publications.style.display = 'block';
               upload.style.display = 'none';
           }
           uploadFiles.onclick() {
                publications.style.display = 'none';
                upload.style.display = 'block';
           }
       }


    </script>

</body>
</html>


@endsection
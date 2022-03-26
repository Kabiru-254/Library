<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        
</head>
<body>
    
<div class="container ">
    <div class="jumbotron mt-5 text-center">
        <h3>Preview for {{$previewData->name}}</h3> 
      
    </div>

    <div class="kichwa d-flex justify-content-between mb-5">
        <h4 class="mt-4">{{$previewData->name}}</h4>
        <a href="{{ url()->previous() }}" class="btn btn-secondary ">Back</a>
    </div>

   


   <object style="height: 500px;" width="100%" data="{{ URL::asset('public/uploads/'.$previewData->name) }}" class="img-thumbnail">
  <!--  <iframe src="https://view.officeapps.live.com/op/view.aspx?src={{ URL::asset('public/uploads/'.$previewData->name) }}" frameborder="0" style="width: 62%; min-height: 562px;"></iframe> -->
    
  <!-- <iframe style="height: 500px;" width="100%" src="https://docs.google.com/gview?url='{{URL::asset('public/uploads/'.$previewData->name)}}'&embedded=true"></iframe> -->
</div>


</body>
</html>
@extends('layouts.app')

@section('content')

<div class="container">
    <nav>
        <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Upload Publications</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Manage all uploads</button>
        </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  


    <table class="table table-hover m-5">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $Files)
            <tr>
                <td>{{$Files -> name}}</td>
                <td>{{$Files -> type}}</td>
                <td><button>Delete Publication</button></td>
                
            
            </tr>
            @endforeach
        </tbody>
    </table>

  </div>

</div>



</div>


@endsection
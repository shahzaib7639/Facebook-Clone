<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .nav {
            width: 100%;
            height: 82px;
        }

        .container-fluid {
            background: #4867AA;
            padding-top: 15px;
        }

        .logo {
            float: left;
            height: 100%;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Upload Image</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="nav d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img width="200" src="{{ asset('assets/1.png') }}"> 
                </div>
                {{-- <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Logout
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="dropdownMenuButton">
                        <h4 class="h4 mb-0"><strong></strong></h4>
                        <div class="mb-3"></div>
                        <div class="dropdown-divider"></div> --}}
                        <a href="{{route('logout')}}" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout							
                        </a>							
                    {{-- </div> --}}
                {{-- </div> --}}
            </div> 
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-header font-weight-bold"><strong>Upload Image and Text</strong></div>

                    <div class="card-body">
                        <form action="{{ route('Auth.uploadimage.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Upload Image:</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="text">Enter Text:</label>
                                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                        <div class="row mt-2">
                            @foreach ($img as $key => $im)
                                <div class="col-lg-6 mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <label>{{ $im->text }}</label><br>
                                            <img width="300" height="300" style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/' . $im->image) }}" alt="">
                                            <p>{{ $im->created_at->format('M d, Y H:i:s') }}</p> 
                                        </div>
                                    </div>
                                </div>
                                @if (($key + 1) % 2 == 0)
                                    <div class="w-100"></div> <!-- Break to start new row -->
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

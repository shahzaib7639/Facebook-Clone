<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .navbar {
            width: 100%;
            background: #4867AA;
        }
        .container-fluid {
            background: #4867AA;
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
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                  <!-- Facebook text logo -->
                  <a class="navbar-brand text-light fw-bold monospace-font" href="#">Facebook</a>
                  <div class="navbar-nav ms-auto">
                    <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="userProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="User Profile" width="30" height="30" class="rounded-circle">
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userProfileDropdown">
                        <li><a class="dropdown-item" href="#">{{Auth()->user()->name}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="{{route('logout')}}">Logout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </nav>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <!-- Dropdown with user profile button -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="User Profile" width="30" height="30" class="rounded-circle">
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Profile</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav> 
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
                                    <div class="w-100"></div> 
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

{{-- Javascript --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</html>

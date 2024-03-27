<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav {
            width: 100%;
            height: 82px;
            display: flex;
            justify-content: space-between; /* Align items on the edges */
            align-items: center; /* Center items vertically */
            background: #4867AA;
        }

        .logo {
            height: 100%;
        }
        .logout-btn {
            color: white;
            border-radius: 50%;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white */
            border: none;
        }
        .dropdown-menu {
            border-radius: 50%;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            width: 200px; /* Adjust width to make it circular */
            padding: 0; /* Remove default padding */
        }
        .dropdown-item {
            border-radius: 0; /* Remove rounded corners for each item */
        }
    .dropdown-menu li:last-child a {
            border-bottom: none; /* Remove bottom border for last item */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img width="200" src="{{ asset('assets/1.png') }}"> 
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle logout-btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Logout
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>

    <!-- Include Bootstrap's JavaScript library -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5G5MWZZyJ6yY6C+vrbL/6Z4L/tEP2rF+gckxX" crossorigin="anonymous"></script>
</body>
</html>

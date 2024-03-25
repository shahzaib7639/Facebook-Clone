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

        .logout-btn {
            float: right;
            margin-top: 20px;
            margin-right: 20px;
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Upload Image</title>
</head>
<body>
    <div class="container-fluid ">
        <div class="container">
            <div class="nav d-flex justify-content-between">
                <div class="inner mg">
                    <div class="logo">
                        <img width="200" src="{{ asset('assets/1.png') }}"> 
                    </div>
                    <!-- Logout Button -->
                    <a href="" class="logout-btn">Logout</a>
                </div>
            </div> 
        </div>
    </div>
    <!-- Rest of your HTML content goes here -->
</body>
</html>

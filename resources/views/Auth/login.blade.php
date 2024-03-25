<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FB LoginPage</title>
</head>

<body>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
    font-family: "Poppins", sans-serif;
    background: #f2f4f7;
    }
    .nav{
	width: 100%;
	height: 82px;
	
}
.container-fluid{
    background: #4867AA;
    padding-top: 15px;
}
.logo{
	float: left;
	height: 100%;
}

    .content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 60vh;
    
    
    }

    .flex-div {
    display: flex;
    justify-content: space-evenly;
    align-items: center;

    }

    .name-content {
    margin-right: 7rem;
    
    }

    .name-content .logo {
    font-size: 3.5rem;
    color: #1877f2;
    }

    .name-content p {
    font-size: 1.3rem;
    font-weight: 400;
    margin-bottom: 5rem;
    
     
    }

    form {
    display: flex;
    flex-direction: column;
    background: #fff;
    padding: 2rem;
    width: 530px;
    height: 530px;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    }

    form input {
    outline: none;
    padding: 0.8rem 1rem;
    margin-bottom: 0.8rem;
    font-size: 1.1rem;
    }

    form input:focus {
    border: 1.8px solid #1877f2;
    }

    form .login {
    outline: none;
    border: none;
    background: #1877f2;
    padding: 0.8rem 1rem;
    border-radius: 0.4rem;
    font-size: 1.1rem;
    color: #fff;
    }

    form .login:hover {
    background: #0f71f1;
    cursor: pointer;
    }

    form a {
    
    text-align: center;
    font-size: 1rem;
    padding-top: 0.8rem;
    color: #1877f2;
    }

    form hr {
    background: #f7f7f7;
    margin: 1rem;
    }

    form .create-account {
    outline: none;
    border: none;
    background: #06b909;
    padding: 0.8rem 1rem;
    border-radius: 0.4rem;
    font-size: 1.1rem;
    color: #fff;
    width: 75%;
    margin: 0 auto;
    text-decoration: none;
    }

    form .create-account:hover {
    background: #03ad06;
    cursor: pointer;
    }

    /* //.........Media Query.........// */

    @media (max-width: 500px) {
    html {
    font-size: 60%;
    }

    .name-content {
    margin: 0;
    text-align: center;
    }

    form {
    width: 300px;
    height: fit-content;
    }

    form input {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    }

    form .login {
    font-size: 1.5rem;
    }

    form a {
    font-size: 1.5rem;
    }

    form .create-account {
    font-size: 1.5rem;
    }

    .flex-div {
    display: flex;
    flex-direction: column;
    }
    }

    @media (min-width: 501px) and (max-width: 768px) {
    html {
    font-size: 60%;
    }

    .name-content {
    margin: 0;
    text-align: center;
    }

    form {
    width: 300px;
    height: fit-content;
    }

    form input {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    }

    form .login {
    font-size: 1.5rem;
    }

    form a {
    font-size: 1.5rem;
    }

    form .create-account {
    font-size: 1.5rem;
    }

    .flex-div {
    display: flex;
    flex-direction: column;
    }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
    html {
    font-size: 60%;
    }

    .name-content {
    margin: 0;
    text-align: center;
    }

    form {
    width: 300px;
    height: fit-content;
    }

    form input {
    margin-bottom: 1rem;
    font-size: 1.5rem;
    }

    form .login {
    font-size: 1.5rem;
    }

    form a {
    font-size: 1.5rem;
    }

    form .create-account {
    font-size: 1.5rem;
    }

    .flex-div {
    display: flex;
    flex-direction: column;
    }

    @media (orientation: landscape) and (max-height: 500px) {
    .header {
    height: 90vmax;
    }
    }
    }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FB Loginpage</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div class="nav d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <img width="200" src="{{ asset('assets/1.png') }}"> 
                    </div>
                    
                </div> 
            </div>
        </div>
   
        <div class="content">
            <div class="flex-div">
                <div class="name-content">  
                    <h1 class="logo">Facebook</h1>
                    <p>Connect with friends and the families.</p>
                </div>

                <form action="{{ route('check') }}" method="POST">
                    @csrf
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($error = Session::get('error'))
                <div class="alert-danger mb-2">
                <button type="button" class="close" data-dismiss="alert"></button>
                <strong>{{ $error }}</strong>
            </div>
                @endif
        <div class="form-group py-2">
            <input type="email" placeholder="Johan@example.com" id="email" class="form-control" name="email"
            value="{{old('email')}}"
                    >
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group py-2">
            <input type="password" placeholder="Password" id="password" class="form-control" name="password"
            value="{{old('password')}}"
                    >
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
            <button class="login" type="submit">Log In</button>
                    <a href="{{URL::to('googleLogin')}}"> <img height="80"  src="{{ asset('assets/signup.png') }}" alt=""></a>
                    <hr>
                    <a class="create-account" href="{{URL::to('googleLogin')}}">Create New Account</a>
                    {{-- <button type="submit" class="create-account">Create New Account</button> --}}
                </form>
            </div>
        </div>
    </body>
    
    <!-- Bootstrap JavaScript CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>
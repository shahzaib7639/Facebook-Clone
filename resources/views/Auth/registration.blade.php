<html>
<head>
    <style>
    *
	{box-sizing: border-box; border:none; outline: none;}
	.mg{margin:0px auto; float: none;}
	.b{border:1px solid red;}
body{
	background: -webkit-linear-gradient(white, #D3D8E8);
	background: -o-linear-gradient(white, #D3D8E8);
	background: linear-gradient(white, #D3D8E8);
	font-family: sans-serif;
	color: #fff;
	margin:0px;
}
.nav{
	width: 100%;
	height: 82px;
	background: #4867AA;
}
.inner{
	width: 80%;
	height: 100%;
	min-width: 900px;
	max-width: 1200px;
	background: #4867AA;
}
.logo{
	float: left;
	height: 100%;
}
.inner img{
	width: auto;
	height: 80%;
	position: relative;
	top: 10px;	
}
.table{
	float: right;
	height: 100%;
	padding:10px 10px 0px 10px;
	min-width: 320px;
}
.table tr td{
	font-size: 12px;
}
table tr td a:hover{text-decoration: underline;}
a{text-decoration: none; color:#9cb4d8;}

#lg{
	padding: 3px;
	border:1px solid black;
	width: 95%;
}
[value]{
	background: #4267b2;
	border: 1px solid #29487d;
	color:white;
	padding:3px 6px;
	cursor: pointer;
}
[value]:hover{
	background: #365899;
}
.main{
	color:#000;
	min-width: 900px;
	max-width: 1200px;
	height: 100%;
 	color:#000;
 	width: 80%;
 	position: relative;
	padding:20px;
}
.left{
	width: 48%;
	float: left;
	padding: 10px;
}
#cimg{
	width: 100%;
	height: 80vh;
}
.right{
	width: 48%;
	float: right;
	padding: 10px;
}
[placeholder]{
	width: 100%;
	font-size: 18px;
	margin-bottom: 10px;
	padding: 10px;
	border-radius: 5px;
	background: #fff;
	border:1px solid #0000003d;
}
.strong{
	color:#022;
	padding: 5px 10px 5px 1px;
	border-radius: 0px 10px 10px 0px;
	clear: both;
	margin:0px auto;
	transition: 1s;
}
.strong:hover{background: #00005526;}
aj{color:#265aab;}
[placeholder*="st"]{
	width: 48%;
}
[placeholder="last name"]{
	float: right;
}
.birth *{color:#000;}
.wdth{width: 225px;}
.info_birth{font-size: 14px;}
.pd_birth{padding: 8px 10px;}

.info_birth .wid2 {
	float: left;
	margin-left: 5px;
	width: 100%;
	position: relative;
	top:-15px;
}
#w_a{ width: 75%; cursor: pointer; color:#365899;}
.a_box{position: absolute; }
.a_cont{
	background: #fff;
	background-image: url(https://i.imgur.com/PNiw6aK.png);
	position: relative;
	left: -300px;
	top:-60px;
	width: 300px;	
	height: 140px;
	padding: 1px 15px;
	border-radius: 5px;
	font-size: 12px;
	display: none;
}
hr{background: #00000026; height: 1px;}
.b_ok{
	background: #4267b2;
	border: 1px solid #29487d;
	color:white;
	cursor: pointer;
	padding: 5px 10px;
	border-radius: 2px;
	margin: 2px;
	float: right;
}
.b_ok:hover{background: #365899;}
.a_box:hover .a_cont{display: block;}
.wid2:hover{width: 60%;}
#male{margin-left: 20px;}
.fs_14{font-size: 12px;}
.fs_14 a{color:green;}
[value="Sign Up"]{
	background: linear-gradient(#ae559f, #884343);
    background-color: #69a74e;
    box-shadow: inset 0 1px 1px #a4e388;
    border-color: #3b6e22 #3b6e22 #2c5115;
    padding: 10px 20px;
    width: 150px;
    font-size: 16px;
    border-radius: 10px;
}
#cp{color:green;}
    </style>
	<title>FB Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="nav">
		<div class="inner mg">
			<div class="logo">
				<img src="{{ asset('assets/1.png') }}">
			</div>
			
		</div>
	</div> 
	<form action="{{route('register')}}" method="POST">
	@csrf
	<div class="main mg">
		<div class="left">
			<h3>Facebook helps you connect and share with the people in your life.</h3>
			<img id="cimg" src="{{ asset('assets/f.jpg') }}">
		</div>
		<!-- signup form -->
		<div class="right">
			<h1>Sign Up</h1>
			<p class="mt-4"><strong class="strong">Developed By<aj> Shahzaib</aj></strong></p>
			<div class="form-group mt-4 ">
				<input  type="text" placeholder="John Das" id="name" class="form-control" name="name"
				value="{{old('name')}}"
					>
				@if ($errors->has('name'))
				<span class="text-danger">{{ $errors->first('name') }}</span>
				@endif
			</div>
			<div class="form-group mt-4">
				<input type="email" placeholder="Johan@example.com" id="email" class="form-control" name="email"
				value="{{old('email')}}"
						>
				@if ($errors->has('email'))
				<span class="text-danger">{{ $errors->first('email') }}</span>
				@endif
			</div>
			<div class="form-group mt-4">
				<input type="password" placeholder="Password" id="Password" class="form-control" name="password"
				value="{{old('password')}}"
					>
				@if ($errors->has('password'))
				<span class="text-danger">{{ $errors->first('password') }}</span>
				@endif
			</div>
			<div class="birth_area"><br>
			
			</div>
			<input type="submit" value="Sign Up">
			
		</div>
	</form>
	</div>
</body>
<div id="errorMessages"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#signupForm').submit(function (event) {
            event.preventDefault(); // Prevent default form submission
            
            // Get form data
            var formData = $(this).serialize();
            
            // Perform AJAX request to handle form submission
            $.ajax({
                type: 'POST',
                url: 'your_signup_endpoint',
                data: formData,
                success: function (response) {
                    // Handle success response
                    // For example, redirect user to a success page
                    window.location.href = 'success_page_url';
                },
                error: function (xhr, status, error) {
                    // Handle error response
                    // Display error message without clearing form data
                    $('#errorMessages').html(xhr.responseText);
                }
            });
        });
    });
</script>
</html>
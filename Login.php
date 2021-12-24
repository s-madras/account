<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<title></title>
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>


	<!----------------start header------------------->
<div class="header">
 	<div class="container">
      <div class="navbar">
        <div class="logo">
            <img src="img/LoGo.png" width="125px">
        </div>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Account.html">Account</a></li>
            </ul>
        </nav>
    </div>
	<!----------------end header------------------->



<!----------- start Account from-------------->
	<div class="container1">
		<form action="recive-form.php" method="POST">
			<div class="row">
				<div class="col col-5">
					<a href="Account.html"><h2 class="caption1" id="Resistation" onclick=""><b>Resistation</b></h2></a>
				</div>

				<div class="col col-5">
					<a href="Login.html"><h2 class="caption2"><b>Login</b></h2></a>
				</div>
                   <input type="text" name="U-name" placeholder="Name" class="form-control"><br><br>
                   <input type="password" name="password" placeholder="password" class="form-control"><br><br>


			</div>
					
		

			<a href="" class="A-btn">Submit</a>
		
	
			</div>
		</form>
	</div>
<! ----------- end Account from-------------->

</body>
</html>
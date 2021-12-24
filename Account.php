<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<a href=""><h2 onclick="login()" class="caption2"><b>Login</b></h2></a>
			<a href=""><h2 onclick="registration()" class="caption1"><b>Registration</h2></a>

			

             <div class="row" id="rn" >
                   <input type="text" name="U-name" placeholder="User Name" class="form-control"><br><br>
                   <input type="Email" name="email" placeholder="Email" class="form-control"><br><br>
                   <input type="password" name="password" placeholder="password" class="form-control"><br><br>
			  </div>

			  	<div class="row" id="ln">
                   <input type="text" name="U-name" placeholder="Name" class="form-control"><br><br>
                   <input type="password" name="password" placeholder="password" class="form-control"><br><br>
			 </div>
			<a href="" class="A-btn">Submit</a>
		
	
		
		</form>
	</div>
<! ----------- end Account from-------------->


<script>

	var r = document.getElementById('rn');
	var l = document.getElementById('ln');

   function registration()
   {
   	if ( r.style.display === 'none')
   	 {
   		r.style.display = 'block';
   		l.style.display = 'none';
   	}
   }

   function login()
   {
   	if (l.style.display === 'none') 
   	{
   		l.style.display = 'block';
   		r.style.display = 'none';

   	}
   }

	
</script>

</body>
</html>
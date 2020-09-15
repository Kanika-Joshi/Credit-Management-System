<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			background-image: url(site2.jpg) ;
			background-repeat: repeat;
			background-size: cover;
			margin-top: 5px
		}
		#temp_box{
			position: relative;
			left: 400px;
			top: 20vh;
			height: 400px;
			width: 600px;
			background-image: url(site2.jpg);
			border-radius: 20px;
			
		}
		#button{
			position: relative;
			width: 350px;
			height: 150px;
			left: 200px;
			top: 120px;
		}
		.test{
		    height:50px;
		    width:200px;
		    background: linear-gradient(to right, #596C7D,#52616D, #39546B);
		    background-size: 200%; 
		    font-size: 20px;;
		    color: #000;
		    border: 1px solid transparent;
		    border-radius: 5px; 
		    
		}
		
		#wrapper ul  {
			margin: 0;
			padding:0;
			list-style: none;
			height: 40px;
			line-height: 40px;
			background-color: #424242;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 15px;
		}
		#wrapper ul li{
		      float: left;
		      border-right: 2px solid #5587C8;
		}
		#wrapper ul li a{
		     display: block;
		     padding: 0 28px;
		     color: #fff;
		     text-decoration: none;
		}
		#wrapper a:hover, .active a{
		     background-color: #BAC9F1
		}
		.logo{
		      width: 15%;
		      float: right;
		      text-transform: uppercase;
		      color: #fff;
		      font-size: 15px;
		      text-align: left;
		      line-height: 40px;
		}
	</style>
	
</head>
<body>
	<div id = "wrapper">
		<nav>
		<div class='logo'> TSF </div>
			<ul> 
				<li><a href=index.php>Home</a></li>
				<li><a href=Userslist.php>Users List</a></li>
				<li><a href=transfer.php>Transfer Credit</a></li>
			</ul>
		</nav>
	</div>
	<div id= "temp_box">
        <br><br><h1 align= "center">Credit Management System</h1><br><br>
		<h2 align= "center">Internship Project</h2>
		<div id = "button">
			<a href="Userslist.php"> <button class="test"> View Users List </button>
		</div>
		</a>
	</div>
</body>
</html>

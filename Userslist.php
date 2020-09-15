 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	body
	{
		background-image: url(site2.jpg);
		background-position: center;
		background-size: cover;
		font-family: Arial, Helvetica, sans-serif;
		margin-top: 5px
	}
	table
	{
		border-collapse: collapse;
		width: 75%;
		color: #2E2E2E;
		font-family: monospace;
		font-size: 25px;
		text-align: center;
		left: 100px;
		top: 200px;
		right:100px;
		margin-top: 50px;
    
	}
	th 
	{
		background-color: #2E2E2E;
		color: white;
	}
	tr:nth-child(odd) 
	{
		background-color: #f2f2f2
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
		      float: right;
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
	.test1
	{
		position: relative;
		width: 200px;
		height: 50px;
		left: 550px;
		top: 80px;
		background: linear-gradient(to right, #596C7D,#52616D, #39546B);
		background-size: 200%; 
        font-size: 20px;;
        color: #000;
        border: 1px solid transparent;
        border-radius: 5px; 
	}
	 .logo{
		      width: 15%;
		      float: left;
		      text-transform: uppercase;
		      color: #fff;
		      font-size: 15px;
		      text-align: left;
		      line-height: 40px;
		      padding-left: 20px;
		}
	}
	</style>
	
</head>
<body>
<div id = "wrapper">
		<nav>
		<div class='logo'> TSF </div>
			<ul> 
                <li><a href=transfer.php>Transfer Credit</a></li>
			    <li><a href=Userslist.php>Users List</a></li>
				<li><a href=tsf.php>Home</a></li>
			</ul>
		</nav>
	</div>
	<table align='center' class=tableus>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Credit</th>
		</tr>
<?php


$conn = mysqli_connect("localhost", "root", "", "Spark");
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Email_ID, Credit FROM View_users";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Email_ID"] . "</td><td>". $row["Credit"]. "</td> </tr>";
	}
echo "</table>";
} 
else 
{ 
	echo "0 results"; 
}

$conn->close();
?>

        <div>
			<a href=transfer.php>
				<button class= test1>Transfer</button>
			</a>
		</div>

    </table>
</body>
</html>

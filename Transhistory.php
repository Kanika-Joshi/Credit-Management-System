<?php include 'connection.php'?>
<?php
$query = "SELECT * FROM transaction_history";
$result = mysqli_query($conn,$query);
?>

<html>
<head>
<title>
Transfer History
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	.transferform{
		width: 800px;
		background-color: #2E2E2E;
        margin-top: 20px;
		margin-left: 300px;
		color: #ffffff;
		padding: 10px 0px 10 px 0px;
		text-align: center;
        border-radius: 15px 15px 0px 0px;
	}
	
	#wrapper ul  {
			margin-top: 0;
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
		     padding: 0 22px;
		     color: #fff;
		     text-decoration: none;
		}
		#wrapper a:hover, .active a{
		     background-color: #BAC9F1;
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
				<li><a href=tsf.php>Home</a></li>
				<li><a href=Userslist.php>Users List</a></li>
				<li><a href=transfer.php>Transfer Credit</a></li>
			</ul>
		</nav>
	</div>
	<div class ='transferform'> 
	<h1 align ='center'> Transaction History</h1>
</div> 
			
			<table align='center' class=tableus>
		<tr>
			<th>From</th>
			<th>To</th>
			<th>Credit Amount</th>
		</tr>
			<?php
				while($row = mysqli_fetch_array($result)) 
				{
				echo "<tbody>";
				echo "<tr>";
				echo "<td>" . $row['from_user'] . "</td>";
				echo "<td>" . $row['to_user'] . "</td>";
				echo "<td>" . $row['Credit'] . "</td>";
				echo "</tr>";
				echo "</tbody>";
				}
				echo "</table>";
			?>
		</div>
		
	</div>
	</div>
	
</body>
</html> 

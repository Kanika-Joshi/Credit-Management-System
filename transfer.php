	
<?php
include 'connection.php';
		error_reporting(0);
		$result = mysqli_query($conn,"SELECT *  FROM View_users");
		$resul1 = mysqli_query($conn,"SELECT *  FROM View_users");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Transfer Credits</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type=text/css>
	*{
		margin:0;
		padding: 0;
	}
	body{
		background-image: url(site2.jpg);
		background-position: center;
		background-size: cover;
		font-family: Arial, Helvetica, sans-serif;
		margin-top: 5px;
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
	.main{
		background-color: rgb(0,0,0,0,5);
		width: 600px;
		margin: auto;
	}
	form {
        padding:5px;
	}
	.From{
	    margin-left: 90px;
	    margin-top: 70px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.to{
	    margin-left: 90px;
	    margin-top: 10px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.amount{
	    margin-left: 90px;
	    margin-top: 5px;
	    width: 125px;
	    color: black;
	    font-size: 20px;
    
	}
	.fromuser{
	    position: relative;
	    left: 250px;
	    top: -27px;
	    width: 300px;
	    height: 40px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
        background-color: #fff;
	}
	.touser{
	   position: relative;
	    left: 250px;
	    top: -27px;
	    width: 300px;
	    height: 40px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
	   background-color: #fff;
	}
	.amounttotransfer{
        position: relative;
	    left: 250px;
	    top: -20px;
        width: 200px;
	    height: 35px;
	    line-height: 30px;
	    border-radius: 6px;
	    padding: 0  50px;
	    font-size: 16px;
        background-color: #fff;
        border: 1px solid transparent;
        outline: 3px #000;
	}

#submit{
    position: relative;
    margin-left: 200px;
    margin-top: 25px;
    padding:5px 15px; 
    background: linear-gradient(to right, #596C7D,#52616D, #39546B); 
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-size: 20px;
}
#submit:hover {
   background-color: #5587C8
   color: black;
   }

 .demo{
    position: relative;
    margin-left: 400px;
    margin-top: 30px;
    padding:5px 15px; 
    background: linear-gradient(to right, #596C7D,#52616D, #39546B); 
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-size: 20px;
    }
    .desk{
    position: relative;
    margin-left: 200px;
    margin-top: 25px;
    padding:5px 15px; 
    background: linear-gradient(to right, #596C7D,#52616D, #39546B); 
    border:0 none;
    cursor:pointer;
    border-radius: 5px; 
    width: 180px;
    height: 40px;
    font-size: 20px;
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
<div class ='transferform'> 
	<h1 align ='center'> Transfer Credits</h1>
</div> 
<div class='main'>
<form action="" method="GET">
		<h1 class= From>  From User </h1>
		<select  class= fromuser type="text"  name="u1" required value="">
		<option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['Name'] . "'>" . $tname['Name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= to>To User </h2>
		<select  class =touser  type="text" name="u2" value="">
	     <option value =""></option>
		<?php
                        while($tname = mysqli_fetch_array($resul1)) {
                            echo "<option value='" . $tname['Name'] . "'>" . $tname['Name'] . "</option>";
                        }
                ?>

                </select>
		<h2 class= amount>Amount </h2>
		<input class = amounttotransfer type="number" name="amt" value=""><br>
		
		<input type="submit" id= submit name="submit" value=" Transfer">
	</form>
</div>

	<?php
	
			if($_GET['submit'])
			{
			$u1=$_GET['u1'];
			$u2=$_GET['u2'];
			$amt=$_GET['amt'];


			if($u1!="" && $u2!="" && $amt!="")
			{
				
				$query1= "UPDATE View_users  SET Credit = Credit + '$amt' WHERE Name = '$u2' ";
				$data1= mysqli_query($conn, $query1);
				$query2= "UPDATE  View_users  SET Credit = Credit  - '$amt' WHERE Name = '$u1' ";
				$data2= mysqli_query($conn, $query2);
				//insert into transaction_history
				    $query1 = "INSERT INTO transaction_history (from_user,to_user,Credit) VALUES('$u1','$u2','$amt')";
                     $res2 = mysqli_query($conn,$query1);
                                  if($res2){
			
		                           	$user1 = "SELECT * FROM View_users WHERE  Name='$u1' ";
                                    $res=mysqli_query($conn,$user1);
                                    $row_count=mysqli_num_rows($res);
			                          }
				
            

				     if ($data1 && $data2)
				{
					$message="Successful transfer";
                    echo "<script type='text/javascript'>alert('$message');
                    </script>";
					//echo $bl1;
					//echo $bl2;

				}
				else
				{
					$message="Error While Commiting Transaction ";
					echo "<script type='text/javascript'>alert('$message');
                    </script>";
				}

			}

			else
			{
				$message="All Fields are Mandatory";
				echo "<script type='text/javascript'>alert('$message');
                    </script>";
			}
		}
		

	?>

<div class= btn>
	<a href="Userslist.php" ><button class= 'demo' align= center> Updated Credits</button></a>
	<a href="Transhistory.php"><button class = 'desk' align= center> Transfer History</button></a>
</div>	
</body>
</html>

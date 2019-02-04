<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $TXN_AMOUNT = $_POST["TXN_AMOUNT"];
    $EMAIL = $_POST['EMAIL'];
    $connection = mysqli_connect("localhost","root","","user1");
    $query1="INSERT INTO doners(user_email,amount)
    VALUES ('$EMAIL','$TXN_AMOUNT')";
    $result1=mysqli_query($connection,$query1);
    $query="SELECT * FROM doners ORDER BY user_id DESC ";
    $result=mysqli_query($connection,$query);
    $row = mysqli_fetch_assoc($result);
    $USER_ID = $row['user_id'];
    
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <style>
        body{
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
         text-align: center;

        
    }
    .button{
            background-color: cadetblue;
            font-size: 15px;
            border-radius: 8px;
            padding: 20px 20px;
            color: aliceblue;
            cursor: pointer;
            position: relative;
        }
        
        table,td,th{
            border:3px solid black;
            border-collapse:collapse;
            font-weight: bolder;
        }
        td,th{
            padding:15px;
            text-align:left;
        }
   
    thead{
        font-size: 30px;
    }
    </style>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body style="background-image:url(1.jpg); ">
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
     <?php session_start();
        $_SESSION['EMAIL'] = $EMAIL; 
        ?>
       
	<form method="post" action="pgRedirect.php">
		<table style="width:100%;">
			<thead>
				<tr>
					<th>DETAILS</th>
                    <th>INFORMATION</th>
				
            </tr></thead>
            <tbody>
				<tr>
					
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" 
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
				<tr>
					
					<td><label>DONOR_ID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo  "CUST" . "$USER_ID"?>" readonly></td>
				</tr>
				<tr>
				
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="3" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="RETAIL" readonly></td>
				</tr>
				<tr>
					
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</td>
				</tr>
				<tr>
					
					<td><label>Amount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="5"
						type="text" name="TXN_AMOUNT"
						value="<?php echo "$TXN_AMOUNT" ?>" readonly>
					</td>
				</tr>
                <tr>
					
					<td><label>Email*</label></td>
					<td><input title="EMAIL" tabindex="10"
						type="text" name="EMAIL"
						value="<?php echo "$EMAIL" ?>" readonly>
					</td>
				</tr>
				
			</tbody>
		</table>
		* - Mandatory Fields<br><br>
        <input value="CheckOut" class="button" type="submit"	onclick="">
	</form>
</body>
</html>
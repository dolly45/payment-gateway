<?php
$connection = mysqli_connect("localhost","root","","user1");    
$query="SELECT * FROM doners ORDER BY user_id DESC ";
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
$USER_ID = $row['user_id'];
$EMAIL = $row['user_email'];
$TXN_AMOUNT = $row['amount'];
?>
<html>
<head>
<style>
   body{
       background: url('1.jpg');
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
         text-align: center;
          font-size: 40px;
        color: cadetblue;
        
        
    }
        .button{
            
            font-size: 20px;
            padding: 20px 20px;
           
        }
     </style>        
</head>
<body>
    <br>DONATION SUCCESSFUL!!
    <br><br>
    <br>
<div class="button">
    <p><b>EMAIL: <?php echo $EMAIL ?></b></p>
    <p><b>CUSTOMER ID: CUST<?php echo $USER_ID ?></b></p>
    <p><b>AMOUNT DONATED: <?php echo $TXN_AMOUNT ?></b></p>
</div>
    
</body>

</html>
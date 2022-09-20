<?php
require_once"config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="text-center">
        <h1 class="display-4">Welcome to the Reverenzia Bank</h1>
        
        <p>Dear User, Please enter your details</p>
        <form action="" method="post">
            <label for="userID"><b>Enter User ID:</b></label>
            <input type="text" id="uid" name= "uid" placeholder="User ID">
            <p></p>
            <label for="firstname"><b>First Name:</b></label>
            <input type="text" id="firstname" name= "firstname" placeholder="Firstname">
            <p></p>
            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname">
            <p></p>
            <label for="email"><b>Email ID:</b></label>
            <input type="email" id="email" name="email" placeholder="Email">
            <p></p>
            <label for="amount"><b>Amount:</b></label>
            <input type="number" id="amount" name="amount" placeholder="Enter Amount">
            <p></p>
            <label for="cardnumber"><b>Card Number:</b></label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="Enter Cardnumber">
            <p></p>
            <label for="cvv"><b>CVV:</b></label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required >
            <p></p>
            <input type="submit" name="submit" value="Submit" >&nbsp;&nbsp;
            <input type="reset" name="reset" value="Reset">
        </form >
    </div>
</body>
</html>
 <?php
if(isset($_REQUEST['submit']))
{
$uid=$_REQUEST['uid'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$amount = $_REQUEST['amount'];
$cardnumber = $_REQUEST['cardnumber'];
$cvv = $_REQUEST['cvv'];


$query =mysql_query("insert into users (uid,firstname,lastname,email,amount,cardnumber,cvv) values 
 ('$uid','$firstname','$lastname','$email','$amount','$cardnumber','$cvv')");
  echo '<script type="text/javascript">alert("Deatils Submitted Succesfully");window.location=\'thankyou.html\';</script>';
echo"<br/> $query Record saved.";

}

?>
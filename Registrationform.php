<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regestration</title>
    <link rel="stylesheet" href="style.css">
    <img src="poll.jpg">
    
</head>
<h2>Register Your Vote Here</h2>
<form action="Doaction.php" method="post" enctype="multipart/form-data">

    <label>NAME</label>
    <input type ="text" name="name" placeholder="Enter Your Name"></br>
    <label>ADDRESS</label>
    <input type="text" name="address" placeholder="Enter Your Address"></br>
    <label>CNIC_NO</label>
    <input type="text" name="totalvotes" placeholder="Enter Your CNIC"></br>
    <label>ToTVOTES</label>
    <input type="text" name="Id" placeholder="The total votes are"></br>
    <label>PICTURE</label>
    <input type="file" name="photo" value="" placeholder="Upload Your Picture"></br>
 <!-- <label>Enter Your CNIC</label> -->
<?php
include_once 'totalVote.php';
?>

    <button type="submit" name="submit">Submit</button>
   <h3> <a href="fetch.php" > DISPLAY DATA </a></h3>

</form>

<body>
    
</body>
</html>
<?php
//include_once ('retrive.php');
$conn=mysqli_connect('localhost','root','','db_assignment');
$name=$_REQUEST['name'];
$query = "DELETE FROM regform WHERE name='$name'"; 
$res = mysqli_query($conn,$query);
if($res)
{
    echo "Data Delete Succesfully";
  
} 

// else
// {
//     die ( mysqli_error());
    
// }

?>
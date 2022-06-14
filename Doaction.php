<?php
$conn=mysqli_connect('localhost','root','','db_assignment');

$User=$_POST['name'];
$address=$_POST['address'];
$id=$_POST['Id'];
$photo=$_FILES['photo']['name'];
$tempname = $_FILES['photo']['tmp_name'];   

move_uploaded_file($tempname,"images/$photo"); 
 
$query="INSERT INTO regform(`name`, `address`, `cnic`, `image`) VALUES ('$User','$address','$id','$photo')";

$res=mysqli_query($conn,$query);
if ($res)
{
    echo "Data Inserted Successfully";
}
else{
    echo "Values not inserted";


}



?>
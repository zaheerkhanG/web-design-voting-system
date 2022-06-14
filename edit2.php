<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fetch.css">
</head>
<body>
   <table>
       <h3> Entered Data </h3>
       
        <therad>
    <tr >
       

            <th>Name </th>
            <th>Address</th>
            <th>CNIC</th>
            <th>Photo</th>
            <th></th>
           
            
        </tr>
    </thead>
    <tbody>
        <?php
        
include 'connect.php';
$name=$_REQUEST['name'];
$query = "SELECT * from regform "; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$res = mysqli_fetch_assoc($result);

if(isset($_POST['Update']))
{
   
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $cnic = $_REQUEST['cnic'];
    $image=$_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];  

    if (isset($image)) {

        if (!empty($image)) {
            $location = '../uploads/';
        }

        if (move_uploaded_file($tempname,"images/$image")) {
            echo  'Updated' ;
        }

    } else {
        echo 'please uploaded';
    }


$update = "update regform set name='".$name."',
address='".$address."', cnic='".$cnic."',
image='".$image."' where name='".$name."'";

$res=mysqli_query($conn,$update) or die(mysqli_error());
}else {
?>
<div>
<form name="form" method="post" action="" enctype="multipart/form-data"> 
<tr><td>
<input  type="text"  name="name" value="<?php echo $res['name'];?>" /></td>
<td>
<p><input type="text" name="address" placeholder="Enter address" 
required value="<?php echo $res['address'];?>"></p></td>
<td>
<p><input type="text" name="cnic" placeholder="Enter cnic" 
required value="<?php echo $res['cnic'];?>"></p></td>
<td>
<p><input type="file" name="image" placeholder="Enter image" 
required value="<?php echo $image;?>" ></p></td>
<td>
<p><input name="Update" type="submit" value="Update" /></p></td>
</tr>
</form>
<?php }   
?>

<?php
                
?>
</table>
</body>
</html>
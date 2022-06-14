
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="retrive.css">
</head>
<body>
   <table>
       <h3> Entered Data </h3>
        <form action="Search_Src.php" method="post" enctype="multipart/form-data">
            <input type="text" name="search">
            <button type="submit" name="searchdata"> Search</button></br></br>
</form>
       
        <therad>
    <tr >
       
            
            <th>Name </th>
            <th>Address</th>
            <th>CNIC</th>
            <th>Photo</th>
            <th>Actions</th>
           
           
            
        </tr>
    </thead>
    <tbody>
        <?php

include 'connect.php';

$selectquery = "select * from regform ";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)) {
   
    $name = $res['name'];
    $address = $res['address'];
    $cnic = $res['cnic'];
    $image = $res['image']; 
    ?>
                        <tr>
                           
                            <td><?php echo $res['name']; ?> </td>
                            <td><?php echo $res['address']; ?></td>
                            <td><?php echo $res['cnic']; ?></td>
                            <td> <img width="100" src="images/<?php echo $image; ?>">
                            <td>
                            <a href="edit2.php?name=<?php echo $res["name"]; ?>">Edit</a>
                            <br><br>
                            <a href="delete.php?name=<?php echo $res["name"]; ?>">Delete</a>

                       
                            </td>
                            
                        </td>
                    </tr>
                
                    <?php
                }
                
                
                ?>
                </table>
                </body>
                </html>
                
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
        <th>Total Votes</th>
        <th>Photo</th>                       
        </tr>
        </thead>
        <tbody>

        <?php
        $conn=mysqli_connect('localhost','root','','db_assignment');
        if(isset($_POST['searchdata'] )) {

        $search=$_POST['search'];
        $query="select * from regform where cnic='$search'";
        $data=mysqli_query($conn,$query);

        if(mysqli_num_rows($data)>0)
        {
        $row=mysqli_fetch_assoc($data);

        $name = $row['name'];
        $address = $row['address'];
        $cnic = $row['cnic'];
        $votes=$row['totalvotes'];
        $image = $row['image'];
        }
        else{

        echo '<h2>Invalid CNIC</h2>';
        die();
        }  

        ?>

        <tr>

        <td><?php echo $row['name']; ?> </td>

        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['cnic']; ?></td>
        <td><?php echo $row['totalvotes']; ?></td>
        <td> <img width="100" src="images/<?php echo $image; ?>">

        </td>
        </tr>

        <?php
        }    


        ?>

        </table>
        </body>
        </html>

<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM items";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td>" .$row['item_id']."</td>
            <td>" .$row['title']."</td>
            <td><img class='img-thumbnail' src='$row[image]'</td>
            <td>" .$row['isbn']."</td>
            <td>" .$row['type']."</td>
            <td><a href='publisher.php?publisher_name=".$row['publisher_name']."'>" .$row['publisher_name']."</a></td>
            <td>" .$row['availability']."</td>
            <td><a href='update.php?id=" .$row['item_id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['item_id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a>
            <a href='details.php?id=" .$row['item_id']."'><button class='btn btn-danger btn-sm' type='button'>Details</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='7'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: center;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3">    
            <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add product</button></a>
            </div>
            <p class='h2'>Products</p>
            <p class='h4'>Availability Guideline: 0 = not available, 1 = available</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>ISBN</th>
                        <th>Type</th>
                        <th>Publisher Name</th>
                        <th>Availability</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
    </body>
</html>
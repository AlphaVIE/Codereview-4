<?php 
require_once 'actions/db_connect.php';

$id = ($_GET['id']);
$sql = "SELECT * FROM items WHERE item_id = {$id}";
$result = mysqli_query($connect ,$sql);
$tbody='';
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td>" .$row['item_id']."</td>
            <td>" .$row['title']."</td>
            <td><img class='img-thumbnail' src='$row[image]'</td>
            <td>" .$row['isbn']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['creator_first_name']."</td>
            <td>" .$row['creator_last_name']."</td>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['availability']."</td>
            <td><a href='index.php'><button class='btn btn-alert btn-sm' type='button'>Home</button></a>
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
            <p class='h2'>Items (Detail View)</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>ISBN</th>
                        <th>Short Description</th>
                        <th>Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Publisher</th>
                        <th>Publish Date</th>
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
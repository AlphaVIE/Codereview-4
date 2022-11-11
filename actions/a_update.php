<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $isbn = $_POST['isbn'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pubname = $_POST['pubname'];
    $pubdate = $_POST['date'];
    $availability = $_POST['availability'];
    $uploadError = '';
    
    if($image===0){
        $sql = "UPDATE items SET title = '$title', image = '$image', isbn = '$isbn', short_description = '$description', type = '$type', creator_first_name = '$fname', creator_last_name = '$lname', publisher_name = '$pubname', publish_date = '$pubdate', availability = $availability WHERE item_id = {$id}";
    }else{
        $sql = "UPDATE items SET title = '$title', image = '$image', isbn = '$isbn', short_description = '$description', type = '$type', creator_first_name = '$fname', creator_last_name = '$lname', publisher_name = '$pubname', publish_date = '$pubdate', availability = $availability WHERE item_id = {$id}";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
    }
    mysqli_close($connect);    
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?> 
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
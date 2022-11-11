<?php
require_once 'db_connect.php';

if ($_POST) {   
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
   
    $sql = "INSERT INTO items (title, image, isbn, short_description, type, creator_first_name, creator_last_name, publisher_name, publish_date, availability) VALUES ('$title','$image', '$isbn', '$description', '$type', '$fname', '$lname', '$pubname', '$pubdate', $availability)";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $isbn </td>
            <td> $type </td>
            </tr></table><hr>";
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>";
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
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>
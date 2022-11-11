<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE item_id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $isbn = $data['isbn'];
        $description = $data['short_description'];
        $type = $data['type'];
        $fname = $data['creator_first_name'];
        $lname = $data['creator_last_name'];
        $pubname = $data['publisher_name'];
        $pubdate = $data['publish_date'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
    } 
else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src=<?php echo $image ?> alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" value="<?=$title?>" placeholder="Title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name="image" value="<?=$image?>" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name= "isbn" value="<?=$isbn?>" placeholder="ISBN" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" value="<?=$description?>" placeholder="Short Description" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name= "type" value="<?=$type?>" placeholder="Book/CD/DVD" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Creator First Name</th>
                        <td><input class='form-control' type="text" name= "fname" value="<?=$fname?>" placeholder="First name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Creator Last Name</th>
                        <td><input class='form-control' type="text" name= "lname" value="<?=$lname?>" placeholder="Last name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pubname" value="<?=$pubname?>" placeholder="Name of Publisher" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name= "date" value="<?=$pubdate?>" placeholder="Publish Date" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Availability</th>
                        <td><input class='form-control' type="number" name= "availability" value="<?=$availability?>" placeholder="0 = false, 1 = true" step="any" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['item_id'] ?>" />
                        <input type= "hidden" name= "picture" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add Item to Library</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Item</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                    </tr>    
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="text" name="image" placeholder="Place link from the Internet here" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name= "isbn" placeholder="ISBN" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class='form-control' type="text" name= "description" placeholder="Short Description" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name= "type" placeholder="Book/CD/DVD" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Creator First Name</th>
                        <td><input class='form-control' type="text" name= "fname" placeholder="First name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Creator Last Name</th>
                        <td><input class='form-control' type="text" name= "lname" placeholder="Last name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "pubname" placeholder="Name of Publisher" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name= "date" placeholder="Publish Date" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Availability</th>
                        <td><input class='form-control' type="number" name= "availability" placeholder="0 = false, 1 = true" step="any" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Item</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
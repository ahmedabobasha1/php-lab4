
<?php
include './../Model/operation.php';

 $rows = select();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <a href="register.php" class="btn btn-success">Add new user</a>

    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>image</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($rows as $row){
       
                     echo "<tr>";
                     foreach($row as $field){
                         echo "<td>$field</td>";
                     }
                    
                    echo   "<td><a  href='edit.php?id={$row["id"]}'  class='btn btn-info'>edit</a></td>";
                    echo   "<td><a  href='./../controller/deleteuser.php?id={$row["id"]}'  class='btn btn-danger'>Delete</a></td>";
                     echo "</tr>";
                 }

                
            ?>
         
        </tbody>

    </table>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
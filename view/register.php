<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Home page</title>
</head>

<body>

<?php

$name_error=$email_error=$password_error=$img_error=$confirmPassword_error='';

if(isset($_GET)&&!empty($_GET)){
   
    $errors = json_decode($_GET["errors"],1);
    if(in_array("name",array_flip($errors))){
        $name_error = $errors["name"];
    }
   
    if(in_array("email",array_flip($errors))){
        $email_error = $errors["email"];
    }
    if(in_array("password",array_flip($errors))){
        $password_error = $errors["password"];
    }
     if(in_array("confirmPassword",array_flip($errors))){
        $confirmPassword_error = $errors["confirmPassword"];
    }  
    if(in_array("img",array_flip($errors))){
        $img_error = $errors["img"];
    }
   
}

?>


    <form class="container" method="POST" action="./../controller/registrerController.php" enctype="multipart/form-data"> 
        <div class="form-group my-3">
            <label for="name"> Name</label>
            <input type="text" class="form-control" name="name"  id="firstName" placeholder="Enter name">
            <div class="text-danger"> <?php echo $name_error?> </div>
        </div>
        
       <div class="form-group my-3">
            <label for="username">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
            <div class="text-danger"> <?php echo $email_error?> </div>
        </div>

        <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password"   id="password" placeholder="Enter password">
            <div class="text-danger"> <?php echo $password_error?> </div>

        </div>  
                <div class="form-group my-3">
            <label for="password">confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword"    id="password" placeholder="Enter confirm password">
            <div class="text-danger"> <?php echo $confirmPassword_error?> </div>
        </div>  

        

        <div class="mb-3"> 
                  <label for="country" class="form-label">RoomNo</label>    
                     <select class="form-select" name="RoomNo" id="country">
                            <option value="">RoomNo</option>      
                            <option value="Aplication one">Aplication one</option>        
                            <option value="Aplication two">Aplication two</option>       
                            <option value="cloud">cloud</option>                       
                    </select>   
                                        
                                        
         </div>



        <div class="form-group my-3">
            <label for="profilepicture">profile picture</label>
            <input type="file" class="form-control" name="img">
            <div class="text-danger"> <?php echo $img_error ?> </div>
    
        </div>


        
       
       
        <button type="submit" class="btn btn-primary my-3">Submit</button>
      
    </form>
</body>

</html>
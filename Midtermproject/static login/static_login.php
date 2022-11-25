<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Static Login</title>
</head>
<body>
    
<div class="container ">
        <div class="card mt-5 text-center card-container">
            <i class="fa fa-user-circle-o fa-5x" id="profile-img" ></i><p>USER LOGIN</p>         
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
            <div class="form-row align-items-center">
            <div class="col-12 my-1">
            <select class="form-control"  id="UType" name ="UserType[]">
                <option value="admin">Admin</option>
                <option value="ContentManager">Content Manager</option>
                <option value="SystemUser">System User</option>
            </select>
          
            </div>
                <br>
                <input type="text" name="Username" id="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="signinBtn">Sign in</button>
   
<?php
session_start();
    if(isset($_POST['signinBtn']) && isset($_POST['UserType'])){
        $arrUtype = $_POST['UserType'];

        foreach ($arrUtype as $key => $Utypevalue){
            if(($Utypevalue == "admin")){
                
                $admin ="admin";
                $Padmin ="pass123";
                $admin1 = "steven";
                $Padmin1 = "pogi123";
                
    
                if(($_POST['Username'] == $admin && $_POST['Password']==$Padmin))
                {
                    $_SESSION['Username'] = $admin;

                    echo '<div class="alert alert-success w-100 p-1 mx-auto">
                    welcome to the system ',$admin,
                   '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';

                }
                elseif(($_POST['Username'] == $admin1 && $_POST['Password']==$Padmin1))
                {
                        $_SESSION['Username'] = $admin1;
                        
                        echo '<div class="alert alert-success w-100 p-1 mx-auto">
                        welcome to the system ',$admin1,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                    }
                    else
                    {
                    echo '<div class="alert alert-danger w-100 p-1 mx-auto">
                    You Entered the wrong password
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }         
                }

                if(($Utypevalue == "ContentManager")){
                
                    $ContentManager ="pepito";
                    $PContentManager ="manaloto";
                    $ContentManager1 = "juan";
                    $PContentManager1 = "delacruz";
                    
        
                    if(($_POST['Username'] == $ContentManager && $_POST['Password']==$PContentManager))
                    {
                        $_SESSION['Username'] = $ContentManager;
    
                        echo '<div class="alert alert-success w-100 p-1 mx-auto">
                        welcome to the system ',$ContentManager,
                       '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                    }

                    elseif(($_POST['Username'] == $ContentManager1 && $_POST['Password']==$PContentManager1)){
                            $_SESSION['Username'] = $ContentManager1;
                            echo '<div class="alert alert-success w-100 p-1 mx-auto">
                            welcome to the system ',$ContentManager1,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>'; 
                        }
                        else
                        {
                        echo '<div class="alert alert-danger w-100 p-1 mx-auto">
                        You Entered the wrong password
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }         
                    }

                    if(($Utypevalue == "SystemUser")){
                
                        $SystemUser ="pedro";
                        $PSystemUser="penduko";
                        
                        
            
                        if(($_POST['Username'] == $SystemUser && $_POST['Password']==$PSystemUser))
                        {
                            $_SESSION['Username'] = $SystemUser;
        
        
                            echo '<div class="alert alert-success w-100 p-1 mx-auto">
                            welcome to the system ',$SystemUser,
                           '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                        }
                            else
                            {
                            echo '<div class="alert alert-danger w-100 p-1 mx-auto">
                            You Entered the wrong password ',$SystemUser1,
                            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
                            }         
                }
            }
        }
        
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
         </form>
        </div>
    </div>


</body>
</html>
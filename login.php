<?php  session_start(); ?>
<?php
    include "config.php";
    
    $error = '';
    if(isset($_SESSION['user'])){
        header("Location:admin.php"); 
    }

    if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == USER_NAME && $pass == PASS_WORD)
        {
            $_SESSION['user']=$user;
                header("Location:admin.php"); 
            } else {
            $error =  "<p class='text-danger mt-5 text-center'>invalid UserName or Password</p>";        
        }
    }
 ?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <title> Login Page </title>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <? if ($error !=='') { echo $error; } ?>
        <form style="max-width: 500px; margin: auto;" method="POST" action="">
            <div class="form-group">
                <label>User name</label>
                <input type="text" name="user" class="form-control" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <input type="hidden" name="login" value="submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</body>

</html>
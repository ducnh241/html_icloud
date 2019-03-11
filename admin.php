<?php
session_start();
include "config.php";

if (!isset($_SESSION['user'])) {
	header("Location:login.php"); 
}


$data = FILE_DATA;
$data = fopen($data, "r");
while(!feof($data)) {
$line = fgets($data);
$datas[] = explode('/', $line);
}

$html = '';
foreach ($datas as $value) {
	$email = ($value[0]) ? $value[0] : '';
	$pass = ($value[1]) ? $value[1] : '';
    $date = ($value[2]) ? $value[2] : '';
	$code = ($value[3]) ? $value[3] : '';
	$html .= "<tr>
                <td>$email</td>
                <td>$pass</td>
                <td>$code</td>
                <td>$date</td>
            </tr>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container" style="margin-top: 100px">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>Code verify</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $html ?>
        </tbody>
    </table>
    </div>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</body>
</html>


<?php
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','game');

$con = mysqli_connect(HOST,USER,PASS,DB) or die ('gagal konek');
?>
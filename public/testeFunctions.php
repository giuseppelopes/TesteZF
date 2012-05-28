<?php
$con = mysqli_init();

if(mysqli_real_connect($con, "mysql03-farm26.kinghost.net", "giuseppe01", "1qaz0okm"))
	echo("ok");
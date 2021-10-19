<?php
	//$Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	//mysqli_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
	$Connect = pg_connect("postgres://lbjsufblczennb:3937490a2b66a750bc7c03a936601739b1b92317df2e63028f971047d7b13312@ec2-52-201-72-91.compute-1.amazonaws.com:5432/d3rm5ah4i80abp")
	if(!$Connect)
	{
		die ("Cannot connect database");
	}
?>
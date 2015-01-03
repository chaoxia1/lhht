<?php 
require_once '../include.php';
$username=$_POST['username'];
$username=addslashes($username);
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag'];
echo $username;
echo $password;
if(true){
	$sql="select * from admin where username='{$username}' and password='{$password}'";
	$row=checkAdmin($sql);
	if($row){
		//如果选了一周内自动登陆
		if($autoFlag){
			setcookie("id",$row['id'],time()+7*24*3600);
			setcookie("username",$row['username'],time()+7*24*3600);
		}
		$_SESSION['username']=$row['username'];
		$_SESSION['id']=$row['id'];
		$url="index.php";
		echo "<script>window.location='{$url}';</script>";
		//alertMes("登陆成功","index.php");
	}else{
		alertMes("登陆失败，重新登陆","login.php");
	}
}else{
	alertMes("验证码错误","login.php");
}

//$verify==$verify1
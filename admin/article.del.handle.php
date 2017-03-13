<?php
require_once('connect.php');
$id=$_GET['id'];
$delesql="delete from article where id=$id";
if(mysqli_query($con,$delesql)){
	echo "<script>alert('删除文章成功');</script>";
}else{
	echo "<script>alert('删除文章成功');</script>";
}
?>
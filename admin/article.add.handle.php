<?php
require_once('connect.php');
//print_r($_POST);
//把传递过来的信息入库，在入库之前对信息进行校验
if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
	echo "<script>alert('标题不能为空');window.location.href='article.add.php'</script>";
}
$title=$_POST['title'];
$author=$_POST['author'];
$des=$_POST['description'];
$content=$_POST['content'];
$dateline=time();
$insertsql="insert into article(title,author,description,content,dateline)values('$title','$author','$des','$content','$dateline')";
if(mysqli_query($con,$insertsql)){
	echo "<script>alert('发布文章成功');window.location.href='article.add.php'</script>";
}else{
	echo "<script>alert('发布文章失败');window.location.href='article.add.php'</script>";
}
?>
 <?php 
if (empty($_POST['user']) || empty($_POST['pass'])) {
echo "Please fill in all fields";
} else { 

 $db_name="test";
mysql_connect("localhost","root","");
mysql_select_db($db_name);
$result=mysql_query("SELECT  *  FROM `".$db_name."`.`users_info` WHERE `user` = '".$_POST['user']."' AND `pass` = '".$_POST['pass']."' ");
$result_a=mysql_fetch_assoc($result);
   
 
if ($result_a==0)
{
echo "please check your username and password.";
} else {
  header("Location: welcome.html");
   
}
 

 
}
?>
							<?php
$name=$_POST["name"];

$email=$_POST["email"];
$msg=$_POST["message"];


include 'dbconnection.php';
$res=mysql_query("select email from message");
$flag=0;
while($val=mysql_fetch_array($res))
{
	if($val[0]==$email)
	{
		$flag=1;
		break;
	}
}
		if($flag==1)
		{
			
			echo "<center><font color='#FF0000' size=+4>Id is already exist</font></center>";
			echo"<form action='contact.php' method='post'>";
			echo"<input type=submit value='ok'>";
			echo"</form>";
		}
		else
		{
		

$ins="insert into message values(0,'$name','$email','$msg')";
if(!(mysql_query($ins)))
{
echo " unsucessful";
}
else	
{
	echo "value insert successfully";
}
		}
?>
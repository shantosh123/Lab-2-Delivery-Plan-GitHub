<?php
include("header.php");
?>




<?php





$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
if (!empty($name)){
if (!empty($email)){
if (!empty($message)){
$servername ="localhost:3306";
$username ="root";
$password ="root";
$dbname ="first";
// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact (name, email, message)
values ('$name','$email','$message')";
if ($conn->query($sql)){

##this is just for the link
echo "<a href='contact.php' class ='top'>Thank you for your feedback !! </a>";

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Name  should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "message should not be empty";
die();
}




#include 'contact.php' ;


if(!$name = filter_input(INPUT_POST, 'name')){
    die("First Name field is Required. Please go back and enter First Name");
   
}
if(!$email = filter_input(INPUT_POST, 'email')){
    die("Last Name field is Required. Please go back and enter Last Name");
}
if(!$message = filter_input(INPUT_POST, 'message')){
    die("City field is Required. Please go back and enter City");
}

?>


<?php
include("footer.php");
?>
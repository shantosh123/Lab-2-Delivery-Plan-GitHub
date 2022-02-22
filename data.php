<?php
include "aheader.php" ;

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <title>Data from SQL</title>
    <style type = "text/css">
     
    table {
        border-collapse: collapse;
        width: 100%;
        color : black;
        font-family: monospace;
        font-size: 16px;
        text-align: center;
        margin-top:90px;
    }

    th{
        background-color: #2ab2e2;
        color:white;
    }
    tr:nth-child(odd){
        background-color:#2ab2e2
    }
      
    
    </style>
</head>

    
  
  










<?php
require 'dbconnect.php'; 
$sql = "select * from contact";
$result = $connection->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            margin-top:40px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update Data</title>
</head>
<body>
   

<table border="1" cellpadding="5">
<tr>
<th>SN</th><th> Name</th><th> Email</th>
<th>Message</th><th>Received Date</th><th>Delete</th>

</tr>
<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){

        
?>
<tr>
<td><?php echo $row["sn"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["message"]; ?></td>
<td><?php echo $row["Time"]; ?></td>

<td><a href="data.php?sn=<?php echo $row['sn']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no results";
}
$connection->close();
?>

</table>


<?php

include "footer.php" ;
?>




<?php
include 'dbconnect.php';
$a = $_GET['sn'];
$query = " DELETE  FROM contact WHERE sn = '$a'";
$row= mysqli_query($connection,$query);

    if($row){
       
        // if you want to redirect to update page after updating
      
    }
    else { echo "Record Not Deleted";}

$connection->close();
?>


















</body>
</html>




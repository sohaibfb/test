<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../../../style.css">

</head>
<body>
<?php

$host="localhost";
$user="root";
$passwd="MyadminMe87";
$database="hrme";
$flag=0;

//create connection
$conn=new mysqli($host,$user,$passwd,$database);
if($conn->connect_error){

    die("connection failed :".$conn->connect_error);
}

 else{

$sql = "select code,english_description,Arabic_description from code_setup WHERE code_type=1";

$result=$conn->query($sql);
if ($result == TRUE) {
    
    if( $result->num_rows>0){

        
     
while($row=$result->fetch_assoc()){
   
    echo "<tr>";
    echo "<td><input type='checkbox', name='engdecctext'/></td>";
    echo "<td>".$row["code"]."</td>";
    echo "<td>".$row["english_description"]."</td>";
    echo "<td>".$row["Arabic_description"]."</td>";
    echo "</tr>";
    
   

}
}
}

 }


$conn->close();



?>
</body>
</html>

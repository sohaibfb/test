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

    if(isset($_POST['code'])){
$codetype=$_POST['code'];
$functionflag=$_POST['functionflag'];
$sql = "select code,get_code_setup_name(related_code),related_code,english_description,Arabic_description from code_setup WHERE code_type='$codetype'";

$result=$conn->query($sql);
if ($result == TRUE) {
    
    if( $result->num_rows>0){
if($codetype==6){
while($row=$result->fetch_assoc()){
   
    echo "<tr>";
    echo "<td><input type='checkbox', name='engdecctext'/></td>";
    echo "<td>".$row["code"]."</td>";
    echo "<td>".$row["get_code_setup_name(related_code)"]."</td>";
    echo "<td>".$row["english_description"]."</td>";
    echo "<td>".$row["Arabic_description"]."</td>";
    echo "</tr>";
    
   

}
}
else{
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
    }
    else
    {
        echo 'error';
    }
 }
 

$conn->close();



?>
</body>
</html>

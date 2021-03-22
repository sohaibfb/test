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
$codetype=0;

//create connection
$conn=new mysqli($host,$user,$passwd,$database);
if($conn->connect_error){

    die("connection failed :".$conn->connect_error);
}

 else{

if(isset($_POST['data'])){


    
$codetype=$_POST['data'];
$code=$_POST['code'];
if($codetype==6){
    $sql = "select code,english_description from code_setup WHERE code_type='$codetype' and related_code='$code'";

}
else{
$sql = "select code,english_description from code_setup WHERE code_type='$codetype'";
}

$result=$conn->query($sql);
if ($result == TRUE) {
    
    if( $result->num_rows>0){

    
     echo "<option value='0' selected>"."Choose"."</option>";     
while($row=$result->fetch_assoc()){
   
   

    echo "<option value='".$row['code']."'>".$row['english_description']."</option>";
    

   
   

}

}
}
 }
 else{

    echo "<option value='1'>"."error"."</option>";
}
    
 }
 

$conn->close();



?>
</body>
</html>

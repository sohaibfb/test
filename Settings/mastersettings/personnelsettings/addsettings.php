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


  

if(isset($_POST['submit'])){


 $engdesc=$_POST['engdesctext'];
 $arabicdesc=$_POST['arabicdesctext'];
 $scode=$_POST['scode'];


$sql1="select max(code) from code_setup where code_type='$scode' ";
$code='0';
if($conn->query($sql1)===true){
$result=$conn->query($sql1);
  if( $result->num_rows>0){
    $row=$result->fetch_assoc();
    $code=$row["max(code)"];
    $code=$code+1;
  }
  else{
    $code=1;
  }

  
  

 $sql2= "INSERT INTO code_setup(code_type,code,english_description,arabic_description) VALUES ('$scode','$code','$engdesc','$arabicdesc')";

 

 if($conn->query($sql2)===true){
    header("Location:/test/settings/mastersettings/personnelsettings/Nationality.html");
   }
 
 else {
    header("Location:/test/Employee Profile.php");//"Location:/test/mastersettings/personnelsettings/addSettings.php";
    echo "Error: " . $sql2 . "<br>" . $conn->error;
   }
}
else
{
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

}



$conn->close();



?>


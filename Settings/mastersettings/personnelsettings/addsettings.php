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


  

 elseif(isset($_POST['submit'])){


 $engdesc=$_POST['engdesctext'];
 $arabicdesc=$_POST['arabicdesctext'];




 $sql1= "INSERT INTO code_setup(code_type,english_description,arabic_description) VALUES ('1','$engdesc','$arabicdesc')";

 

 if($conn->query($sql1)===true){
    header("Location:/test/settings/mastersettings/personnelsettings/Nationality.php");
}
 
else {
    header("Location:/test/Employee Profile.php");//"Location:/test/mastersettings/personnelsettings/addSettings.php";
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

}


$conn->close();



?>


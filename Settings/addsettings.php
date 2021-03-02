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


//$sql1="select code from code_setup where code_type=1 ";
$sql1 = "SELECT max(code) from code_setup where code_type='$scode'";

$code='0';
$result=$conn->query($sql1);
if($result==true){

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
   switch($scode)
   {
   case 1 : 
    header("Location:/test/settings/mastersettings/personnelsettings/Nationality.html");
    
    break;
    case 2 :
    header("Location:/test/settings/mastersettings/personnelsettings/Religion.html");
    break;
    case 3 :
      header("Location:/test/settings/mastersettings/personnelsettings/HomeCountry.html");
      break;
    case 4 :
      header("Location:/test/settings/mastersettings/employementsettings/positions.html");
      break;
    case 5 :
      header("Location:/test/settings/mastersettings/structuresettings/Functions.html");
      break;
    case 6 :
      header("Location:/test/settings/mastersettings/structuresettings/Sections.html");
      break;
    case 7 :
      header("Location:/test/settings/mastersettings/structuresettings/Locations.html");
      break;
   }
   }
 
 else {
    header("Location:/test/Employee Profile.php");
    echo "Error: " . $sql2 . "<br>" . $conn->error;
   }
}
else
{
    echo "Error: " . $sql1. "<br>" .$conn ->error;
}

}



$conn->close();



?>


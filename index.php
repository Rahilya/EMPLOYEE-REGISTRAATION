<?php

$servername="localhost";
$username="root";
$password="";
$dbname="global";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("connection to the database failed due to" . mysqli_connect_error());
    
}
//echo "success connect to the db";
if(isset($_POST['absolute']))
{
$Date = $_POST ['date'];
$Name = $_POST ['empl'];
$Mobile_No = $_POST ['no'];
$Permanent_Address = $_POST ['aadd'];
$Temporary_Address = $_POST ['aaddd'];
$Education = $_POST ['educ'];
$Date_Of_Birth = $_POST ['dob'];
$Pan_Aadhar_No = $_POST ['pana'];
$Emergency_Contact_Name = $_POST ['relname'];
$Relation = $_POST ['rela'];
$Mobile_Number = $_POST ['cont'];
$Medical_Fitness = $_POST ['medi'];
$Work_Experience = $_POST ['check'];

 
// $sql="INSERT INTO `power`(`Name`, `Email`, `Service`, `Message`) VALUES ('$Name', '$Email', '$Service', '$Message');";

$sql="INSERT INTO `power` (`Date`, `Name`, `Mobile No`, `Permanent Address`, `Temporary Address`, `Education`, `Date Of Birth`, `Pan/Aadhar No`, `Emergency Contact Name`, `Relation`, `Mobile Number`, `Medical Fitness`, `Work Experience`) VALUES ('$Date', '$Name', '$Mobile_No', '$Permanent_Address', '$Temporary_Address', '$Education', '$Date_Of_Birth', '$Pan_Aadhar_No', '$Emergency_Contact_Name', '$Relation', '$Mobile_Number', '$Medical_Fitness', '$Work_Experience');";

if($con->query($sql)==true){
    // echo"successfully inserted";

}
else{
    echo "ERROR:$sql <br> $con->error";
}
  $con->close();


}

echo '<script>alert("we get your information successfully.");history.go(-1);</script>';

?>

<!-- INSERT INTO `power` (`Date`, `Name`, `Mobile No`, `Permanent Address`, `Temporary Address`, `Education`, `Date Of Birth`, `Pan/Aadhar No`, `Emergency Contact Name`, `Relation`, `Mobile Number`, `Medical Fitness`, `Work Experience`) VALUES ('2022-09-06', 'nilesh', '25369841', 'avytsv aygs aua ayga5181', 'atvta ga gas asgasggagsg   ag sag as 1568', 'stvs gs,wutdgwdw,, wwwgdw', '2001-08-01', '51151843515', 'xbywyxwxx', 'bwbxywx', '564984151986', 'gtwegdgwdb6t fgf6tf6fg f6ff ', 'no'); -->



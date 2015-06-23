<?php     //start php tag
//include connect.php page for database connection
// Include('assets/php/mysqli_connect.php')

$con = mysqli_connect("localhost", "root", "", "ndere_boys" ) or die(mysqli_error());

$studentFName = mysqli_real_escape_string($con, $_POST['studentFName']);
$studentMName = mysqli_real_escape_string($con,$_POST['studentMName']);
$studentLName = mysqli_real_escape_string($con, $_POST['studentLName']);
$studentDOB = mysqli_real_escape_string($con,$_POST['studentDOB']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
//$gender = mysqli_real_escape_string($con, $_POST['female']);
// $gender = 'unchecked';
//$Male= mysqli_real_escape_string($con, $_POST['studentMale']);
//$Female=mysqli_real_escape_string($con, $_POST['studentFemale']);
//$Male='unchecked';
//$Female='unchecked';

$studentCounty = mysqli_real_escape_string($con,$_POST['studentCounty']);
$formerInstitution = mysqli_real_escape_string($con,$_POST['formerInstitution']);
$classtoJoin = mysqli_real_escape_string($con,$_POST['classtoJoin']);
$parentName = mysqli_real_escape_string($con,$_POST['parentName']);
$mobileNumber = mysqli_real_escape_string($con,$_POST['mobileNumber']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$County = mysqli_real_escape_string($con,$_POST['County']);
// ============================================================================================
// $attachedFiles


// $filesize = $_FILES['attachedFiles']['size'][$key];
// $extention = pathinfo($_FILES['attachedFiles']['name'][$key] ,PATHINFO_EXTENSION );
// $name = $_FILES['attachment']['name'][$key];
// $data = file_get_contents($_FILES['attachedFiles']['tmp_name'][$key]));
// $repassword=mysqli_real_escape_string($con,$_POST['repassword']);
//isset($_GET['message']) ? $_GET['message'] : '';
// ============================================================================================

//if submit is not blanked i.e. it is clicked.
//If(isset($_REQUEST['submit'])!='')
//{
// If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']=='')

// if(isset($_POST['Click']))      
// {

// $rating = explode($_POST['studentGender'], $_POST['studentGender']);
// $_SESSION['commentInput'] = array();
// $_SESSION['commentInput'][] = $_POST['comment'][0];
// $_SESSION['commentInput'][] = $_POST['comment'][1];
// $_SESSION['commentInput'][] = $_POST['comment'][2];

// if(isset($_REQUEST["comment"]))
// {

// $merge = array_combine ($_SESSION['product'],$_SESSION['commentInput']);
// foreach($merge as $key => $value)
// {

// $sqlComment = "INSERT into enrolment (gender) VALUES ('".$value."', '".$key."')";
// $result = $mysqli->query($sqlComment);
// }
// =================================================================================================

mysqli_connect ("localhost","ndere_boys","") or die ('Error: ' . msqli_error());
mysqli_select_db ($con, "ndere_boys");

if ( $studentFName == "" || $studentMName == "" || $studentLName == ""|| $studentCounty == "" || $formerInstitution == "" || $classtoJoin == "" || $parentName == "" || $mobileNumber == "" || $email == "" || $County == "" )

{
Echo "Please fill the empty field!";
}
Else
// $Male = 'unchecked';
// $female_status = 'unchecked';

//     if (isset($_POST['submit'])) {
//          $selected_radio = $_POST['studentGender'];

//          if ($gender == 'Male') {
//                 $male_status = 'checked';
//           }else if ($gender == 'Female') {
//                 $female_status = 'checked';
//           }
//     }
// ElseIf

// if(isset($_POST['submit']))
// if($gender=='Male') or ($gender=='Female')


 
$sql="insert into enrolment(studentFName, studentMName, studentLName, studentDOB, gender, studentCounty, formerInstitution, classJoin, parentName, mobileNumber, email, County ) values ('$studentFName','$studentMName', '$studentLName', '$studentDOB','$gender','$studentCounty','$formerInstitution','$classtoJoin','$parentName','$mobileNumber','$email','$County')";
 // $res=mysqli_query($con,$sql);
 // If($res)

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}


echo "Record successfully inserted!<br>";



// echo "Database updated with: '$name','$email','$password'<br>";


echo "You have updated database successfully!<a href=enrolment.html>Click Here to go back";


?>

<?php 

				// in this file --> code for add a new course ,update a course and delete a course by admin from manage_courses.php

 session_start();

   $con=mysqli_connect('localhost','root');

mysqli_select_db($con,'uniquedeveloper');

// ==========================================================================================

					// code to add a new course by admin from manage_profile.php

if (isset($_POST['btn_add'])) {
	
$profileimg=$_FILES['profile_image'];
$profilename=$_POST['profile_name'];
$profileemail=$_POST['profile_email'];
$profilecontact=$_POST['profile_contact'];
$profilecourse=$_POST['profile_course'];
$profilesem=$_POST['profile_sem'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );


if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,'../../uploadimg/'.$filename);

	$q="insert into profile(image,name,email,contact,course,sem) values('$destinationfile','$profilename','$profileemail','$profilecontact','$profilecourse','$profilesem')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_profile.php?status=added");
    }
	
 }
}


// ============================================================================================

				// code to add a new course by admin from manage_courses.php

i


// ==============================================================================
					// code to update course by admin from manage_courses.php


if (isset($_POST['btn_update'])) {
	$profilename=$_POST['selected-profile-to-update'];

$profileimg=$_FILES['profile_image'];
$profilename=$_POST['profile_name'];
$profileemail=$_POST['profile_email'];
$profilecontact=$_POST['profile_contact'];
$profilecourse=$_POST['profile_course'];
$profilesem=$_POST['profile_sem'];

print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q=" UPDATE programming_languages SET language_image='$destinationfile',language_description='$languagedesc' WHERE language_name='$languagename'";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:manage_profile.php?status=updated");
    }
	
 }
}



// =====================================================================================================================================
// ========================================================================================================================
     // in this section add videos ,update videos and delete videos is going on from manage_videos.php


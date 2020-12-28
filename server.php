<?php
session_start();

$emri = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'listaproduktevedb') or die("Baza e te dhenave nuk u lidh!");

 $emri = mysqli_real_escape_string($db, $_POST['emri']?? 'any default value, but probably null');
 $mbiemri = mysqli_real_escape_string($db, $_POST['mbiemri']?? 'any default value, but probably null');
 $email = mysqli_real_escape_string($db, $_POST['email']?? 'any default value, but probably null');
 $fjalekalimi_1 = mysqli_real_escape_string($db, $_POST['fjalekalimi_1']?? 'any default value, but probably null');
 $fjalekalimi_2 = mysqli_real_escape_string($db, $_POST['fjalekalimi_2']?? 'any default value, but probably null');
 
 
 /*if(empty($emri)) {array_push($errors, "Kërkohet emri!");}
 if(empty($mbiemri)) {array_push($errors, "Kërkohet mbiemri!");}
 if(empty($email)) {array_push($errors, "Kërkohet email!");}
 if(empty($fjalekalimi_1)) {array_push($errors, "Kërkohet fjalëkalimi!");}*/
 if($fjalekalimi_1 != $fjalekalimi_2 ) {array_push($errors, "Dy fjalëkalimet nuk përputhen!");}
 
 
 $user_check_query = "SELECT * FROM perdoruesit WHERE email = '$email' LIMIT 1";
 $results = mysqli_query($db, $user_check_query);
 $user = mysqli_fetch_assoc($results);
 
 if ($user) {
     if($user['email'] === $email){array_push($errors, "Email duhet të jetë unike!");}
         
 }
 
 if (count($errors)== 0 )
 {
     $fjalekalimi = md5($fjalekalimi_1);
     $query = "INSERT INTO perdoruesit (emri, mbiemri, email, fjalekalimi) 
             VALUES ('$emri', '$mbiemri', '$email', '$fjalekalimi')";
     mysqli_query($db, $query);
     $_SESSION['email']= $email;
     header("location: account.php");
 }
